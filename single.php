<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
if ( in_category( 'nl' )) {
	$lang = ' lang="nl-nl"';
}
else {
	$lang = '';
}
?>
<?php flush(); ?>
<article<?php echo $lang; ?> role="main" itemscope itemtype="http://schema.org/BlogPosting" class="h-entry">
<h1><span><a href="/" accesskey="h">Nerd</a></span></h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="e-content">
    	<h1><?php the_title(); ?></h1>
<?php the_content();  ?>
	<footer>
		<ul>
			<li><cite><a href="https://twitter.com/vasilis" rel="contact author" class="p-author">Vasilis van Gemert</a></cite></li>
			<li><time itemprop="datePublished" class="dt-published" datetime="<?php the_time('c') ?>"><?php the_time('d-m-Y') ?></time></li>
<?php edit_post_link('Edit','<li>','</li>'); ?>
		</ul>
	</footer>
<?php
    echo '<aside role="complementary">';
    related_posts();
    previous_post_link('<h3>Previous article</h3><p>%link</p>');
    next_post_link('<h3>Next article</h3><p>%link</p>');
    ?>
    </aside>

<?php comments_template(); ?>
</div>
<div></div>
</article>
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>

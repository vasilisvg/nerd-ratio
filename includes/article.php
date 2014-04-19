<?php
if ( in_category( 'nl' )) {
	$lang = ' lang="nl-nl"';
}
else {
	$lang = '';
}
if(is_home()) {
?>

<article<?php echo $lang; ?> itemscope itemtype="http://schema.org/BlogPosting" class="h-entry">
<header>
<?php }
 ?>
		<h1><span><a href="<?php the_permalink() ?>" itemprop="name" class="p-name u-url">
            <?php the_title(); ?></a></span></h1>
	<?php if(is_home()) {
    echo "</header>";
	the_content();?>
    <footer>
        <ul>
            <li><cite><a href="https://twitter.com/vasilis" rel="contact author" class="p-author">Vasilis van Gemert</a></cite></li>
            <li><time itemprop="datePublished" class="dt-published" datetime="<?php the_time('c') ?>"><?php the_time('d-m-Y') ?></time></li>
<?php edit_post_link('Edit','<li>','</li>'); ?>
        </ul>
    </footer>
<?php

	}
	else {
	 ?>


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

 <?php }

if(is_home()) {
?>
</article>
<?php } ?>

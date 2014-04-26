<?php
if ( in_category( 'nl' )) {
	$lang = ' lang="nl-nl"';
}
else {
	$lang = '';
}
?>
<article<?php echo $lang; ?> itemscope itemtype="http://schema.org/BlogPosting" class="h-entry">
<header>
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

</article>

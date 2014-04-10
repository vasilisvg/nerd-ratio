<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<?php flush(); ?>
<div id="home">
    <h1><span><a href="/">Nerd.</a></span></h1>
    <section role="main">
<?php
$flushCount = 0;
if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php include('includes/article.php'); ?>
<?php
if ($flushCount == 0) {
	flush();
	$flushCount=1;
}
endwhile; ?>
    </section>
    <div></div>
</div>
<nav class="prevnext" role="navigation">
    <div></div>
    <div>
           <span><?php next_posts_link('Older') ?></span>
           <span><?php previous_posts_link('Newer') ?></span>
    </div>
    <div></div>
</nav>
<?php else : ?>
<div class="article">
	<h2 class="love">No nonsense here</h2>
	<p>Sorry, but you are looking for something that isn't here. Only sensible things here. Such as this search field.</p>
	<?php get_search_form(); ?>
<?php endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

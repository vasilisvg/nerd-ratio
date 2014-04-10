<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php flush(); ?>
<article role="main" itemscope itemtype="http://schema.org/BlogPosting" class="h-entry">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php include_once('includes/article.php'); ?>

<?php comments_template(); ?>

</section>
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>

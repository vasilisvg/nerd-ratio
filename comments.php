<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
    <section>
<h2 id="comments">Comments</h2>
<!-- Yes, I did some css-positioning-trickery with the 'details ul'. -->
<ol class="comments" itemscope itemtype="http://schema.org/UserComments">
	<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
</ol>
</section>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<!-- <p class="nocomments">Comments are closed.</p> -->

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>





<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="commentform" role="form">
    <fieldset>
        <legend>Commenting is free</legend>
<?php if ( is_user_logged_in() ) : ?>

		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<label>Name <input type="text" name="author" id="author" placeholder="Your name" value="<?php echo esc_attr($comment_author); ?>"><span class="bagarozz" id="bagarozz-preview"></span></label>
<label>E-mail <input type="email" name="email" id="email" placeholder="Your e-mail" value="<?php echo esc_attr($comment_author_email); ?>"></label>
<label>URL<input type="url" name="url" id="url" placeholder="Your website" value="<?php echo esc_attr($comment_author_url); ?>"></label>

<?php endif; ?>

<!--
You could try to use some HTML in your comment. No idea if it works, never tried it.
-->

<textarea name="comment" id="comment"></textarea>
<p><em><?php echo get_post_meta($post->ID, 'ontopic', 'true'); ?> On topic? Friendly? Excellent!</em></p>
<label><input name="submit" class="smaller" type="submit" id="submit" value="Publish" /></label>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</fieldset>
</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

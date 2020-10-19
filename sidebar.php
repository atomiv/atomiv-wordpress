<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>

<aside class="blog__sidebar grid grid--25">
	<div id="atomiv-sidebar" class="sidebar__widgets-wrap" role="complementary">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div><!-- End: #atomiv-sidebar -->
</aside><!-- End: blog__sidebar -->

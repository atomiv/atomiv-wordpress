<aside class="blog__sidebar">
	<?php if ( ! is_active_sidebar( 'atomiv_blog' ) ) { ?>
		<div id="atomiv-sidebar" class="sidebar__widgets-wrap" role="complementary">
			<?php dynamic_sidebar( 'atomiv_blog' ); ?>
		</div><!-- End: #atomiv-sidebar -->
	<?php } ?>
</aside><!-- End: blog__sidebar -->


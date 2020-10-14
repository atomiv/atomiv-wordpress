<!-- This is template for error 404 - page is not found -->

<?php get_header();?>


	<div class="a-content">
	
		<div class="grid-1160">

			<div class="page-404">

				<div class="page-404__logo">
					<?php the_custom_logo(); ?>
				</div>

				<h1 class="page-404__title">404</h1>
				<h4 class="page-404__heading page-404__heading--4">Page not found</h4>
				<p class="page-404__paragraph">Are you sure you entered the correct address?
				It may be better if you return to the <a href="<?php echo get_home_url(); ?>"title="Home page">home page</a> and click on the content that interests you.</p>

			</div><!-- End: .page-404 -->

		</div><!-- End: .grid-1160 -->

	</div><!-- End: .a-content -->


<?php get_footer();?>
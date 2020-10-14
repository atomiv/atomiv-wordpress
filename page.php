<!-- Tepmlate which displays every Page -->

<?php get_header();?>


<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>


		<div class="a__content">

			<div class="grid-1160">

				<?php the_content(); ?>

			</div><!-- end grid-1160 -->

		</div><!-- End: .a__content -->


	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer();?>
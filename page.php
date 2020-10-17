<!-- Tepmlate which displays every Page -->

<?php get_header();?>


<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>


		<div class="atomiv">

			<div class="grid-1160">

				<?php the_content(); ?>

			</div><!-- End: grid-1160 -->

		</div><!-- End: .atomiv -->


	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer();?>
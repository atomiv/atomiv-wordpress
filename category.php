<?php
/*
 *	Blog page
 */

get_header(); ?>


<div class="atomiv blog blog--category">


	<div class="grid grid--1160">

		<?php
			// Title of the category
			the_archive_title( '<h1 class="blog__taxonomy-title">', '</h1>' );
			// Post category description
			the_archive_description( '<div class="blog__taxonomy-description">', '</div>' );
		?>

		<div class="blog__content grid grid--70">

			<ul class="blog__posts">
				<?php
				// For pagination to knows on which page you are
				$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
				$monthnum = (get_query_var('monthnum')) ? absint(get_query_var('monthnum')) : -1;
				$year = (get_query_var('year')) ? absint(get_query_var('year')) : -1;

				$args = array(
					'post_type'     => 'post',
					'posts_per_page'	=> 5, // Number of posts per page
					'cat'				=> $cat,
					'orderby'			=> 'date',
					'paged'				=> $paged, // Enable pagination
					'order'				=> 'DESC'
				);

				if($monthnum != -1 && $year != -1){
					$args["monthnum"] = $monthnum;
					$args["year"] = $year;
				}

				$postsCat = new WP_Query($args);

				if ($postsCat->have_posts()) {
					while ($postsCat->have_posts()) {
						$postsCat->the_post();
				?>

				<li class="article">

					<span class="article__date"><?php echo get_the_time('d.m.y') ?></span>

					<a href="<?php echo get_the_permalink(); ?>">
						<h3 class="article__title"><?php the_title() ?></h3>
					</a>

					<!-- get_the_post_thumbnail_url -->
					<?php get_the_post_thumbnail_url(); ?>
					<!-- the_post_thumbnail -->
					<?php the_post_thumbnail(); ?>

					<div class="blog__thumbnail">
						<img alt="" title="" src="<?php get_the_post_thumbnail_url(); ?>">
					</div>

					<div class="article__content">
			            <div class="article__excerpt"><?php the_excerpt(); ?></div>
				        <div class="permalink permalink--article"><a href="<?php echo get_the_permalink(); ?>">Read More</a></div>
				    </div>

				</li><!-- End: article -->

				<?php
					} // End: while have_posts
				} else {
					echo 'No matching results found. Please modify your search criteria and try searching again.!';
				} // End: if have_posts
				?>

			</ul>

			<div class="pagination">
				<?php $big = 999999999; // need an unlikely integer
				echo paginate_links(array(
				'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format'    => '?paged=%#%',
				'current'   => max(1, get_query_var('paged')),
				'total'     => $posts->max_num_pages,
				'mid_size'  => 1,
				'prev_text' => "<",
				'next_text' => ">"
				)); ?>
			</div><!-- End: pagination-->

		</div><!-- End: blog__content -->


		<?php get_sidebar(); ?>
		
	</div><!-- End: grid--1160 -->


</div><!-- End: atomiv & blog -->


<?php get_footer();

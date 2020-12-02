<?php
/*
 * The template shows Archive Page
 */

get_header(); ?>


<div class="a__content blog">

   <div class="grid-1160">

      <?php
         // Title of the category
         the_archive_title( '<h1 class="archive">', '</h1>' );
         // Post category description
         the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>

      <div class="blog__content">

         <ul class="blog__posts">
            <?php
               // For pagination to knows on which page you are
               $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
               $monthnum = (get_query_var('monthnum')) ? absint(get_query_var('monthnum')) : -1;
               $year = (get_query_var('year')) ? absint(get_query_var('year')) : -1;

               $args = array(
                  'post_type'     => 'post',
                  'post_per_page' => 5,
                  'paged'         => $paged, // Enable pagination
               );

               if($monthnum != -1 && $year != -1){
                  $args["monthnum"] = $monthnum;
                  $args["year"] = $year;
               }

               $posts = new WP_Query($args);

               if ($posts->have_posts()) {
                  while ($posts->have_posts()) {
                     $posts->the_post();
            ?>

            <li class="blog__article">

               <span class="blog__date"><?php echo get_the_time('d.m.y') ?></span>

               <a href="<?php echo get_the_permalink(); ?>">
                  <h3><?php the_title() ?></h3>
               </a>

               <div class="blog__content">
                  <div class="blog__excerpt"><?php the_excerpt(); ?></div>
                  <div class="permalink"><a href="<?php echo get_the_permalink(); ?>">Read More</a></div>
               </div>

            </li><!-- End: blog__article -->

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
   
      <aside class="blog__sidebar">
         <?php dynamic_sidebar( 'blog-sidebar' ); ?>
      </aside><!-- End: blog__sidebar -->

   </div><!-- end grid-1160 -->


</div><!-- End: a__content & blog -->


<?php get_footer();
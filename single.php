<?php 
/*
 * The template shows Single post
 */

get_header(); ?>
  
    <div class="atomiv__single grid-1200">

        <main class="single__content ai__flex ai__sb">

            <section class="content__single__main grid-70">

                <!-- Thumbnail of post -->
                <?php the_post_thumbnail(); ?>

                <!-- The date the post was created -->
                <p class="single__date"><?php echo get_the_date(); ?></p>

                <!-- Title of POST -->
                <h1><?php the_title(); ?></h1>
                
                <section class="content__text">

                    <!-- A loop that collects data from a post.  -->
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>
            
                    <?php  endwhile; ?><!-- End: the loop. -->

                </section><!-- End: content__text -->

            </section><!-- End: content__single__main -->


            <?php 
                // If comments are open or we have at least one comment, load up the comment template.
                // if ( comments_open() || get_comments_number() ) :
                //     comments_template();
                // endif; 
            ?>


            <?php get_sidebar(); ?>


        </main><!-- End: single__content -->


    </div><!-- End: atomiv__single -->
  
<?php get_footer(); ?>
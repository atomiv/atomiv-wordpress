<?php 
/*
 * The template shows Single post
 */

get_header(); ?>


<div class="atomiv atomiv--single">

    <?php // A loop that collects data from a post
    while ( have_posts() ) : the_post(); ?>

        <div class="grid-1160">

            <main class="single">

                <section class="single__content">

                    <!-- Title of the post -->
                    <h1 class="single__title"><?php the_title(); ?></h1>

                    <?php // check if the post has a Post Thumbnail assigned to it
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail(array('class' => 'single__thumbnail'));
                    } ?>

                    <!-- The date the post was created -->
                    <p class="single__date"><?php echo get_the_date(); ?></p>

                    <!-- The post content -->
                    <?php the_content(); ?>

                </section><!-- End: single__main -->


                <?php 
                    // If comments are open or we have at least one comment, load up the comment template.
                    // if ( comments_open() || get_comments_number() ) :
                    //     comments_template();
                    // endif; 
                ?>


                <?php get_sidebar(); ?>

            </main><!-- End: single -->

        </div><!-- End: grid-1160 -->

    <?php  endwhile; // End: while post ?>


</div><!-- End: atomiv -->


<?php get_footer(); ?>
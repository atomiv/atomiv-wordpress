<?php 

get_header(); ?>
  
    <div class="atomiv__signle grid-1200">

        <main class="signle__content ai__flex ai__sb">

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

            <aside class="single__sidebar grid-25">
                
                <!-- Sidebar activation - the sidebar is activated in function.php and this is its "single_post_sidebar" ID which is called for the sidebar to be activated. -->
                <?php if ( is_active_sidebar( 'single_post_sidebar' ) ) { ?>
                    <ul id="sidebar">
                        <?php dynamic_sidebar('single_post_sidebar'); ?>
                    </ul>
                <?php } ?>

            </aside><!-- End: signlsingle__sidebare__content -->

        </main><!-- End: signle__content -->


    </div><!-- End: atomiv__signle -->
  
<?php get_footer(); ?>
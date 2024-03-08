<?php

/*Template Name: About*/

get_header();
?>


<?php query_posts(array('post_type' => 'history-post-type')); ?> 
<?php while (have_posts()) : the_post(); ?>
  <!-- Start Agency Benefits Area -->
  <div class="section-agency-benefit section-pt section-pb">
        <div class="container">
            <div class="row align-items-center">
            
                <div class="col-lg-6">
                    <div class="agency-benefits">
                        <div class="content">
                            <div class="section-title title-2">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <p><?php the_content(); ?></p>
                            <a href="<?php bloginfo('url'); ?>/contact" class="btn contact-btn mt-30 btn-circle">CONTACT US </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="agency-thumb">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/about/about-01.png" alt="Agency Images">
                            <div class="play-btn">
                                <a class="video-popup" href="<?php echo get_post_custom()['video_url'][0]; ?>"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Agency Benefits Area --->
    <?php endwhile; ?>

    <?php get_footer() ?>
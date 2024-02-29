<?php

/*Template Name: Team*/

get_header();
?>


<?php query_posts(array('post_type' => 'team-post-type')); ?>
<!-- Page Conttent -->
<main class="page-content">
    
    <!-- Start Team Style -->
    <div class="section-team section-pt section-pb-90 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                     <h2><?php the_title(); ?></h2>
                     <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <!-- Start Team Area -->
            <div class="row">
                <!-- Start Single Team -->
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team team-8 mb-30">
                        <div class="thumb">
                            <a href="#">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="team img">
                            </a>
                        </div>
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="#"><?php the_title(); ?></a></h4>
                                <span><?php echo get_post_custom()['designation'][0]; ?></span>
                            </div>
                            <ul class="social-network social-net-2">
                                <li><a class="facebook" href="<?php echo get_post_custom()['Facebook'][0]; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="<?php echo get_post_custom()['Twitter'][0]; ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="<?php echo get_post_custom()['G+'][0]; ?>"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- End Single Team -->
      
            </div>
            <!-- End Team Area -->
        </div>
    </div>
    <!-- End Team Style -->
    
    

</main>
<!--// Page Conttent -->


<?php get_footer(); ?>


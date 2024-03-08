    
   <?php query_posts(array('post_type' => 'service-heading','order'=>'asc')); ?> 
    <!-- Start Service Style-->
    <div class="section-service">
        <div class="container-fluid plr_-0">
            <div class="row g-0">

                <!-- Start Single Service -->
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="row-service-wrap_white">
                        <div class="service text-start service-6 medical-service">
                            <div class="icons">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="service icons">
                            </div>
                            <div class="content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                 <!-- End Single Service -->


            </div>
        </div>
    </div>
    <!-- End Service Style-->
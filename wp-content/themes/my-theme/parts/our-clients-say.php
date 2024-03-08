<div class="section-testimonial-carousel section-pt section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Our Clients Say</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore</p>
                    -->
                    </div>
                </div>
            </div>
            <div class="row pb-60 justify-content-center testimonial-carousel-3">
            <?php query_posts(array('post_type' => 'our-clients-say-post','order'=>'asc')); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-6">
                    <!-- Start Single Testimonial -->
                    <div class="testimonial-style-3  testimonial-grid-2">
                        <div class="testimonal">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="testimonal image">
                            <div class="content">
                                <p><?php the_content(); ?></p>
                                <div class="clint-info">
                                    <h4><?php the_title(); ?></h4>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <?php endwhile; ?>
               
            </div>
        </div>
    </div>
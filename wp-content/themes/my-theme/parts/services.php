 <!-- Start Service Style-->
 <div class="section-service bg-gray section-pt section-pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                     <?php
                     $post_id = 14;
                     $my_post = get_post($post_id);                    
                     ?>
                    <h2><?php echo $my_post->post_title ?></h2>
                    <p><?php echo $my_post->post_content ?> </p>
                    </div>
                </div>
            </div>
            <div class="row cln-service-activation poss_relative">
            <?php query_posts(array('post_type' => 'service-post','order'=>'asc')); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-12">
                    <!-- Start Single Service -->
                    <div class="service text-center service-2 padding-none cleaning-service mb-30">
                        <div class="thumb">
                            <a href="service-details.html">
                            <?php the_post_thumbnail( 'medium' ); ?>
                                <!-- <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="service img"> -->
                            </a>
                        </div>
                        <div class="content">
                            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                            <a class="readmore_btn btn-transparent" href="<?php the_permalink() ?>">READ MORE</a>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
                <?php endwhile; ?> 
           
            </div>
        </div>
    </div>
    <!-- End Service Style-->
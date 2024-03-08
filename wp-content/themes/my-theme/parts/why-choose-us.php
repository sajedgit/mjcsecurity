<div class="reapir-choose-us section-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="reapir-choose-inner">
                        <div class="section-title title-2">
                            <h2>Why Choose Us</h2>
                        </div>
                        <div class="choose-resone-inner mt-20">
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore</p>
                             -->
                            <!-- Start Single Service -->
                            <?php query_posts(array('post_type' => 'why-choose-us-post','order'=>'asc')); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="service text-start service-6 reapir-service mt-30">
                                <div class="icons">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="service icons">
                                </div>
                                <div class="content">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo get_the_content(); ?> </p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <!-- End Single Service -->

                           

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="contact_form_container repair-request-form">
                        <div class="ct-title-2">
                            <h2>Request a Quote</h2>
                        </div>
                        <div class="repair-service-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Subject*">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your Massege*"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Submit Inquiry">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
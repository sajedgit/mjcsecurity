
<!-- Footer -->
<footer class="footer">
    <div class="footer-top bg-gray section-pt-90 section-pb">
        <div class="container">
            <div class="row">

           

                <!-- Start Single Widget -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1 space-left">
                        <h5 class="ft-title">CONTACT <span>US</span></h5>
                        <div class="content">
                            <p>Baldwin NY</p>
                            <div class="ft-address">
                                <p>Phone : (516) 427 0602</p>
                                <p>E : <a href="#">Martincampbell@mjcsecurity.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <?php query_posts(array('post_type' => 'service-post','order'=>'desc')); ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1 space-left">
                        <h5 class="ft-title">Our <span>Services</span></h5>
                        <div class="content">
                            <ul class="ft-menu">
                            <?php while (have_posts()) : the_post(); ?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>     
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget --> 


                <!-- Start Single Widget -->
                <?php query_posts(array('post_type' => 'page','order'=>'asc')); ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1 space-left">
                        <h5 class="ft-title">QUICK <span>LINKS</span></h5>
                        <div class="content">
                            <ul class="ft-menu">
                            <?php while (have_posts()) : the_post(); ?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>     
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->


            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="copyright-left content text-center">
                        <p>Copyright &copy; by <a href="<?php bloginfo('url'); ?>"></a>MJCSECURITY</a>. All right reserved</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--// Footer -->

    


<?php wp_footer(); ?>

</body>

</html>
<?php
/*Template Name: Contact*/
include_once get_template_directory() . '/parts/send-mail.php';
get_header();
?>


<!-- Page Conttent -->
<main class="page-content">
    
    <!-- Start Google-map Area -->
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48424.05501089611!2d-73.65146483956826!3d40.66287513755636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27b8464639c99%3A0x17629ccbf98966bf!2sBaldwin%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1709937856501!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End google-map Area -->
    
    <div class="contact-form-area">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form_wrapper form-style-1">
                        <div class="contact-title">
                           <div class="title-3">
                               <h3>Get In Touch</h3>
                           </div>
                        </div>
                        <div class="form-inner-box-warp">
                            <!-- (You can usr this line) <form id="contact-form" action="assets/php/mail.php">-->
                            <form id="contact-form" action="<?php bloginfo('url') ?>/contact">
                            <?php  wp_nonce_field( 'submit-form' . get_the_ID() ); ?>
                                <div class="row">
                                    <div class="col-lg-12 mb-30">
                                        <input name="con_name" type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-lg-12  mb-30">
                                        <input name="con_email" type="email" placeholder="Email*">
                                    </div>
                                    <div class="col-lg-12  mb-30">
                                        <input name="con_subject" type="text" placeholder="Subject*">
                                    </div>
                                    <div class="col-lg-12  mb-30">
                                        <textarea name="con_message"  placeholder="Your Message*"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-btn default-btn">Send</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="contact-info-wrapper">
                        <div class="contact-title">
                           <div class="title-3">
                               <h3>Contact Us</h3>
                           </div>
                        </div>
                        
                        <div class="contact-info">
                        <ul>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="fa fa-phone"></i> 
                                    <p>
                                        <a href="#">(516) 427 0602</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="fa fa-globe"></i> 
                                    <p>
                                        <a href="#"> Martincampbell@mjcsecurity.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                    Baldwin NY 
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
</main>
<!--// Page Conttent -->

<?php get_footer() ?>
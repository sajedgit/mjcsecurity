<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.ico"> -->
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>


<body <?php body_class(); ?>>
  
<!-- Header -->
<header class="header">
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p>Have any question ?  (516) 427 0602 </p>
                </div>
                <div class="col-lg-6  col-md-6">
                    <ul class="socail-top">
                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-4 col-md-4  col-sm-6 col-8">
                    <div class="cuscol">
                        <div class="logo">
                            <?php 
                              $custom_logo_id = get_theme_mod( 'custom_logo' );
                              $image = wp_get_attachment_image_src( $custom_logo_id, 'full');?>
                              <a href="<?php bloginfo('url') ?>"><img src="<?php echo $image[0]; ?>" class="img-fluid img-responsive"></a>
                            <span class="logo-description responsive-logo-description"><?php echo get_bloginfo( 'name' ); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-6 col-6 d-none d-lg-block main-menu">
                    <div class="menu-area d-flex align-items-center justify-content-end">
                        <nav class="main-menu text-center">
                        <?php wp_nav_menu( array( 'container' => 'ul','depth' => 3) ); ?>
                        <?php //aaa();die();  ?>
                           <?php /* <ul>
                                <li class="has-dropdown"><a href="index.html">HOME</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home one</a></li>
                                        <li><a href="boxed-layout.html">Boxed Layout Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="about.html">ABOUT</a></li>
                                <li><a href="#">SERVICES</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="service.html">Service Page</a></li>
                                        <li><a href="service-details.html">Service Details Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="gallery.html">GALLERY</a></li>
                                <li><a href="team.html">TEAM</a></li>
                                <!-- <li><a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog-details.html">Blog Details Page</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="contact-us.html">CONTACT</a></li>
                            </ul> */ ?>
                        </nav><!--// main-menu -->
                     
                    </div>
                </div>
                
                <!-- Show in small device Start -->
                <div class="clickable-menu clickable-mainmenu-active d-block d-lg-none  col-md-6 col-4">
                    <a href="#"><i class="zmdi zmdi-menu"></i></a>
                </div>
                <div class="clickable-mainmenu">
                    <div class="clickable-mainmenu-icon">
                        <button class="clickable-mainmenu-close">
                            <span class="zmdi zmdi-close"></span>
                        </button>
                    </div>
                    
                    <div id="menu" class="text-start clickable-menu-style">
                    <?php wp_get_menu_array(); ?>
                        <?php /* <ul>
                            <li><a href="index.html">HOME</a>
                                <!-- <ul>
                                    <li><a href="index.html">Home one</a></li>
                                    <li><a href="boxed-layout.html">Boxed Layout Page</a></li>
                                </ul> -->
                            </li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="service.html">SERVICES</a>
                                <!-- <ul>
                                    <li><a href="service.html">Service Page</a></li>
                                    <li><a href="service-details.html">Service Details Page</a></li>
                                </ul> -->
                            </li>
                            <li><a href="gallery.html">GALLERY</a></li>
                            <li><a href="team.html">TEAM</a></li>
                            <!-- <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog.html">Blog page</a></li>
                                    <li><a href="blog-details.html">Blog Details Page</a></li>
                                </ul>
                            </li> -->
                        </ul> */ ?>
                    </div>
                    
                    <div class="mobile-more-info">
                        <p>Have any question ? (516) 427 0602</p>
                        <ul class="socail-top">
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                    
               
                    
                </div>
                <!-- Show in small device End -->
            </div>
        </div>
    </div>
</header>
<!--// Header -->


<!-- Hero Section Start -->
<?php 
if(is_home() && is_front_page()) 
{
    get_template_part( 'parts/slider' ); 
}
else
{
    get_template_part( 'parts/slider-inner' ); 
}

?>
<!-- Hero Section End -->
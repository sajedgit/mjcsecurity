
<?php get_header(); ?>



<!-- Page Conttent -->
<main class="page-content">
    
     <!-- Start Service Style-->
      <?php get_template_part( 'parts/service-heading' ); ?>
     <!-- End Service Style-->
    
    <!-- Start Agency Benefits Area -->
      <?php get_template_part( 'parts/history' ); ?>
    <!-- End Agency Benefits Area -->
    
    <!-- Start Service Style-->
      <?php get_template_part( 'parts/services' ); ?>
    <!-- End Service Style-->
    
    <!-- Start Choose Us Area -->
      <?php get_template_part( 'parts/why-choose-us' ); ?>
    <!-- End Choose Us Area -->
    
    <!-- Start Newsletter Style -->
    <?php //get_template_part( 'parts/newsletter' ); ?>
    <!-- End Newsletter Style  -->
    
    <!-- Start Testimonial Style -->
    <?php get_template_part( 'parts/our-clients-say' ); ?>
    <!-- End Testimonial Style -->
    
    <!-- start Team Style -->
    <?php get_template_part( 'parts/team' ); ?>
    <!-- End Team Style -->
    
    <!-- Start Post Carousel Style-->
    <?php //get_template_part( 'parts/blog' ); ?>
    <!-- End Post Carousel  Style-->
    
</main>
<!--// Page Conttent -->

<?php get_footer(); ?>
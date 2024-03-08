
<?php get_header();?>

<style>

.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}

</style>

<!-- Page Conttent -->
<main class="page-content">
    
    
<section class="" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-10 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-6 col-sm-6 col-12 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid "  alt="<?php the_title(); ?>">
            
              <h5><?php the_title(); ?></h5>
              <p><?php echo get_post_custom()['designation'][0]; ?></p>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo get_post_custom()['email'][0]; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo get_post_custom()['phone'][0]; ?></p>
                  </div>
                </div>
                <h6>Details</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col mb-3">
                  <?php the_content(); ?>
                  </div>
                 
                </div>
                <div class="d-flex justify-content-start">
                  <a href="<?php echo get_post_custom()['Facebook'][0]; ?>"><span class="dashicons dashicons-facebook-alt"></span></a>
                  <a href="<?php echo get_post_custom()['Twitter'][0]; ?>"><span class="dashicons dashicons-twitter"></span></a>
                  <a href="<?php echo get_post_custom()['G+'][0]; ?>"><span class="dashicons dashicons-google"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   

</main>
<!--// Page Conttent -->

<?php get_footer();?>
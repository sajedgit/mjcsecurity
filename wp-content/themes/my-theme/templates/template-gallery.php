<?php
/*Template Name: Gallery*/
get_header();
?>

<?php 
/** get all category term name by post type  */
$taxonomies = get_object_taxonomies( 'gallery-post' );
$terms = get_terms( array( 'taxonomy' => $taxonomies[0]) ); 
/** get all category term name by post type  */
?> 

<!-- Page Conttent -->
<main class="page-content">
    
    <!--Gallery Area Start-->
    <div class="gallery-area section-pb-90 section-pt">
        <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="hp__portfolio__area gallery__masonry__activation ptb--110 text-center">
                        <div class="gallery__menu">
                            <button data-filter="*" class="is-checked">ALL</button>
                            <?php foreach( $terms as $album ) :  ?>
                            <button data-filter=".cat--<?php echo $album->term_id; ?>" class=""><?php echo $album->name; ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
               </div>
           </div>
            <div class="row masonry__wrap">
                <!--Single Gallery Image Start-->
                <?php query_posts(array('post_type' => 'gallery-post')); ?>
                <?php while (have_posts()) : the_post(); 
                      global $post;
                      $get_term_ids = get_the_terms( $post->ID, $taxonomies[0] );
                      $terms_string = 'cat--'.implode(' cat--', wp_list_pluck($get_term_ids, 'term_id'));
                 ?>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery__item <?php echo $terms_string; ?>">
                    <div class="single-gallery mb--30">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="gallery">
                        <div class="gallery-content">
                            <div class="gallery-icon-box">
                                <a class="gallery-popup" href="<?php echo get_the_post_thumbnail_url() ?>"><i class="fa fa-search"></i></a>
                                <a class="gallery-link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!--Single Gallery Image End-->
               
            </div>
        </div>
    </div>
    <!--Gallery Area End-->

</main>
<!--// Page Conttent -->



<?php get_footer() ?>
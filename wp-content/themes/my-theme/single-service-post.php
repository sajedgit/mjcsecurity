
<?php get_header();?>

<!-- Page Conttent -->
<main class="page-content">
    
    <!-- Start Service Style-->
    <?php query_posts(array('post_type' => 'service-post'));  
    $url_slug = get_post_field( 'post_name', get_post() );
    $counter=0;
    ?>
    <div class="section-service bg-gray section-pt section-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav flex-column service-details-menu dashboard-list">
                    <?php while (have_posts()) : the_post();
                    
                    $counter++;
                    $active= "";
                    $post_slug = get_post_field( 'post_name', get_post() );
                    if($url_slug===$post_slug)
                      $active= 'active';
                    else
                      $active= '';


                    ?>
                        <li>
                            <button data-bs-target="#tab-list-<?php echo $counter; ?>" data-bs-toggle="tab" class="service-link <?php echo $active;?>"><?php the_title(); ?></button>
                        </li>
                    <?php endwhile; ?>   
                    </ul>
                    
                </div>
                <?php query_posts(array('post_type' => 'service-post'));  
                $counter=0;
                ?>
                <div class="col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content">
                    <?php while (have_posts()) : the_post();
                    $counter++;
                    $active= "";
                    $post_slug = get_post_field( 'post_name', get_post() );
                    if($url_slug===$post_slug)
                      $active= 'active';
                    else
                      $active= '';

                     ?>
                        <div class="tab-pane <?php echo $active; ?>" id="tab-list-<?php echo $counter; ?>">
                            <div class="service-details-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-details-lg-image">
                                        <?php the_post_thumbnail( 'large' ); ?>
                                        </div>
                                        <div class="service-details-cont mt-30">
                                            <h4 class="service-title"><?php the_title(); ?></h4>
                                            <p> <?php  the_content();  ?> </p>
                                       </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    <?php endwhile; ?>     
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Style-->
    

</main>
<!--// Page Conttent -->

<?php get_footer();?>
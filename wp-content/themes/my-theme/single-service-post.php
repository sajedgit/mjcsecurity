
<?php get_header();?>

<!-- Page Conttent -->
<main class="page-content">
    
    <!-- Start Service Style-->
    <div class="section-service bg-gray section-pt section-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav flex-column service-details-menu dashboard-list">
                        <li><button data-bs-target="#tab-list-1" data-bs-toggle="tab" class="service-link">Private Security</button></li>
                        <li><button data-bs-target="#tab-list-2" data-bs-toggle="tab" class="service-link active">Transport Security</button></li>
                        <li><button data-bs-target="#tab-list-3" data-bs-toggle="tab" class="service-link">Home Security</button></li>
                        <li><button data-bs-target="#tab-list-4" data-bs-toggle="tab" class="service-link">Self Security</button></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content">
                        <div class="tab-pane" id="tab-list-1">
                            <div class="service-details-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-details-lg-image">
                                            <img src="assets/images/serviece/service-details01.jpg" alt="">
                                        </div>
                                        <div class="service-details-cont mt-30">
                                            <h4 class="service-title">Private Security</h4>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-30"> long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                     normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>

                            </div>
                        </div>
                        <div class="tab-pane active" id="tab-list-2">
                            <div class="service-details-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-details-lg-image">
                                            <img src="assets/images/serviece/service-details01.jpg" alt="">
                                        </div>
                                        <div class="service-details-cont mt-30">
                                            <h4 class="service-title">Transport Security</h4>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-30"> long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                     normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab-list-3">
                            <div class="service-details-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-details-lg-image">
                                            <img src="assets/images/serviece/service-details01.jpg" alt="">
                                        </div>
                                        <div class="service-details-cont mt-30">
                                            <h4 class="service-title">Home Security</h4>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-30"> long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                     normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab-list-4">
                            <div class="service-details-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-details-lg-image">
                                            <img src="assets/images/serviece/service-details01.jpg" alt="">
                                        </div>
                                        <div class="service-details-cont mt-30">
                                            <h4 class="service-title">Self Security</h4>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-30"> long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                     normal distribution of letters be distracted by the readable content of a page when looking at its layout. looking at its layout.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Style-->
    

</main>
<!--// Page Conttent -->

<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <?php  the_content();  ?>
                </div>
                <div class="comment-section-here"
                <?php //comments_template(); ?>
                </div>
                </div>

            <?php endwhile; ?>

<?php get_footer();?>
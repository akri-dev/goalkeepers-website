<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GoalKeepers
 */
get_header();
?>

	<main id="primary" class="site-main">
    <div class="hero-section">
                    <div class="container h-100 d-flex align-items-end">
                        <div class="row justify-content-center">
                                <div class="col-12 hero-text">
                                    <div class="header-tagline">
                                        <h1 class="display-1 text-left">Strengthening Teams<br>For Success</h1>
                                    </div>
                                    <div class="learn-more"> <!-- space here in content box is the bottom property in CSS-->
                                        <div class="wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <p>Drive significant performance improvement, foster collaboration, and lead with impact. Experience the transformative difference for your organization.</p>
                                            </div>
                                            <div class="row d-flex justify-content-center"><a href="about-us.php">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container card-section d-flex justify-content-center">
                <div class="row card-groupings justify-content-center">
                    <div class="col-3 card-group">
                        <h5 class="card-header">Top Program</h2>
                        <p class="card-body">Short description</p>
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-1.jpg" class="img-fluid" alt="Students playing rock paper scissors">
                    </div>
                    <div class="col-3 card-group">
                        <h5 class="card-header">Top Program</h2>
                        <p class="card-body">Short description</p>
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-2.jpg" class="img-fluid" alt="Seminar proper">
                    </div>
                    <div class="col-6 card-group">
                        <h5 class="card-header">Top Program</h2>
                        <p class="card-body">Short description</p>
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-3-landscape.jpg" class="img-fluid" id="responsive-card-image-one" alt="Team-building activity">
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-3-mobile.jpg" class="img-fluid" id="responsive-card-image-two" alt="Team-building activity">
                    </div>
                </div>
            </div>
            <div class="about-section">
                Hi
            </div>
        </main>
        <!-- #main -->

<?php
get_footer();

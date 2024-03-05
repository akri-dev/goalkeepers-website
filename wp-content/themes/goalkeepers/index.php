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
                    <div class="card-group">
                        <h5 class="card-header">Top Program</h2>
                        <p class="card-body">Short description</p>
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-3-landscape.jpg" class="img-fluid" id="responsive-card-image-one" alt="Team-building activity">
                        <img src="<?php bloginfo('template_directory');?>/img/card-image-3-mobile.jpg" class="img-fluid" id="responsive-card-image-two" alt="Team-building activity">
                    </div>
                </div>
            </div>
            <div class="about-section container mb-5">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center"><img src="<?php bloginfo('template_directory');?>/img/about-hug.jpg" alt="two people hugging" class="object-fit-cover img-fluid"></div>
                    <div class="col-lg-6 text-start">
                        <h3 class="expertise-text">
                        Our expertise lies in crafting unforgettable experiences that unite teams and promote collaboration as adept team-building facilitators.
                        </h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 mt-4 text-center w-75">
                        <h3 class="expertise-sub-text">
                        A group of people doesn&apos;t have to rely on each other to get what they want, but the TEAM must depend on each other to achieve their goals.
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-4 text-center">
                        <h3 class="team-sub-text fs-1 fw-bolder">
                        We are all about TEAM.
                        </h3>
                    </div>
                </div>
                <div class="row team-container">
                    <div class="col-lg-3 text-center">
                        <h1 class="team-text">
                        T
                        </h1>
                        <h2 class="team-caption-text">
                        Together
                        </h2>
                    </div>
                    <div class="col-lg-3 text-center">
                        <h1 class="team-text">
                        E
                        </h1>
                        <h2 class="team-caption-text">
                        Everyone
                        </h2>
                    </div>
                    <div class="col-lg-3 text-center">
                        <h1 class="team-text">
                        A
                        </h1>
                        <h2 class="team-caption-text">
                        Achieves
                        </h2>
                    </div>
                    <div class="col-lg-3 text-center">
                        <h1 class="team-text">
                        M
                        </h1>
                        <h2 class="team-caption-text">
                        More
                        </h2>
                    </div>
                </div>
            </div>
            <div class="brands">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </main>
        <!-- #main -->

<?php
get_footer();

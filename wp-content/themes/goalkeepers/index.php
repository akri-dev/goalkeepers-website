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
                    <div class="row h-100 align-items-center">
                            <div class="col-12 hero-text h-100 align-items-center">
                                <div class="header-tagline d-flex justify-content-left">
                                    <h1 class="display-1 text-left">Strengthening Teams<br>For Success</h1>
                                </div>
                                <div class="learn-more">
                                    <div class="row d-flex justify-content-center">
                                        <p>Drive significant performance improvement, foster collaboration, and lead with impact. Experience the transformative difference for your organization.</p>
                                    </div>
                                    <div class="row d-flex justify-content-center"><a href="about-us.php">Learn More</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row cards justify-content-center">
                        <div class="col-3 card-group">A</div>
                        <div class="col-3 card-group">B</div>
                        <div class="col-3 card-group">C</div>
                    </div>
            </div>
	</main><!-- #main -->

<?php
get_footer();

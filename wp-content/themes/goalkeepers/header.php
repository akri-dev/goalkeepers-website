<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GoalKeepers
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="wrapper-div">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goalkeepers' ); ?></a>
	<!-- navigation bar -->
	<header>
        <nav class="container">
            <div class="row">
                <div class="col-lg-3 logo">
                    <a href="index.php">
                        <img src="<?php bloginfo('template_directory');?>/img/Logo-GoalKeepers.svg" alt="GoalKeepers Logo"><img src="<?php bloginfo('template_directory');?>/img/Text-Logo-GoalKeepers.svg" alt="GoalKeepers Logo in Text">
                    </a>
                </div>
                <div class="col-lg-7 nav-links">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                </div>
                <div class="col-lg-2 cta-fill"><a href="index.html" class="cta-btn">Contact Us</a></div>
            </div>
        </nav>
    </header>    

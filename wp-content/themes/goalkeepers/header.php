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
        <nav class="navbar navbar-expand-lg container justify-content-center">
            <div class="container-fluid row">
                <div class="navbar-brand col-lg-3 logo justify-content-between">
                    <a href="index.php">
                    <img src="<?php bloginfo('template_directory');?>/img/Logo-GoalKeepers.svg" alt="GoalKeepers Logo"><img src="<?php bloginfo('template_directory');?>/img/Text-Logo-GoalKeepers.svg" alt="GoalKeepers Logo in Text">
                    </a>
                    <button class="navbar-toggler col-lg-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
                
                <div class="collapse navbar-collapse col-lg-9 nav-links justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                    </ul>
                    <div class="cta-fill"><a href="index.html" class="cta-btn">Contact Us</a></div>
                  </div>
                  
                </div>  
              </nav>
            </div>
        </nav>
    </header>    

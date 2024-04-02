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

<div id="contact-form-modal" class="modal">
    <div class="modal-content">
        <div class="close">&times;</div>
        <div class="contact-form container justify-content-center">
            <div class="img-contact-person" id="modal-photo">
                <div class="contact-form-text">
                    <h1>Connect with Us<br>for Team-building.</h1>
                    <p>Forge Stronger Teams: Connect with Us for<br>Unparalleled Team-building Experiences!</p>
                </div>
                <div class="contact-form-card w-50 rounded-5 p-5">
                    <form action="https://api.web3forms.com/submit" method="POST">

                        <input type="hidden" name="access_key" value="7706cdd8-0071-499d-8fc6-13b07d5d4732">

                        <input type="text" name="name" placeholder="Name" class="rounded-2 w-100" required>
                        <input type="text" name="Facebook_Messenger" placeholder="Facebook Messenger" class="rounded-2 w-100" required>
                        <input type="email" name="email" id="prospect-email" placeholder="Email Address" class="rounded-2 w-100" required>
                        <div class="booking-container d-flex justify-content-between">
                            <input type="text" name="Booking_Start_Date" id="prospect-start-date" placeholder="Booking Start Date" onfocus="(this.type='date')" onfocusout="(this.type='date')" class="rounded-2" required>
                            <input type="text" name="Booking_End_Date" id="prospect-end-date" placeholder="Booking End Date" onfocus="(this.type='date')" onfocusout="(this.type='date')" class="rounded-2 " required>
                        </div>
                        <textarea name="Message" id="" cols="30" rows="5" placeholder="Message" class="rounded-2 mb-1 w-100" required></textarea>
                        <input type="hidden" name="redirect" value="https://web3forms.com/success">
                        <div class="wrapper-button-contact d-flex justify-content-center">
                            <button class="rounded-2 px-5 pt-3 pb-3 ">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goalkeepers' ); ?></a>
	<!-- navigation bar -->
	<header class="container">
        <nav class="navbar navbar-expand-lg justify-content-center">
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
                    <ul class="navbar-nav mb-4">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                    </ul>
                    <div class="cta-fill"><button id="contact-form-modal-btn" class="cta-btn">Contact Us</button></div>
                </div> 
            </div>
        </nav>
    </header>    

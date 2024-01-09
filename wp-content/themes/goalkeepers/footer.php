<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GoalKeepers
 */

?>
	<!-- footer area -->
	<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 footer-logo">
                        <a href="index.php">
                            <img src="<?php bloginfo('template_directory');?>/img/Logo-GoalKeepers.svg" alt="GoalKeepers Logo"><img src="<?php bloginfo('template_directory');?>/img/Text-Logo-GoalKeepers.svg" alt="GoalKeepers Logo in Text">
                        </a>
                    </div>
                    <div class="col-lg-6 socials">
                        <div class="col-lg-4"><img src="<?php bloginfo('template_directory');?>/img/social-fb.svg" alt="facebook icon"><span>@goalkeepersteamph</span></div>
                        <div class="col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/social-phone.svg" alt="phone icon"><span>09954781200</span></div>
                        <div class="col-lg-5"><img src="<?php bloginfo('template_directory');?>/img/social-email.svg" alt="email icon"><span>goal.keepersteam@gmail.com</span></div>
                    </div>
                    <div class="col-lg-3 copyright"><span>&copy; 2024 GOALKEEPERS. All rights reserved. </span></div>
                </div>
            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

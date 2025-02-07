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
        <div class="row justify-content-center d-flex">
            <div class="col-lg-2 footer-logo">
                <a href="index.php">
                    <img src="<?php bloginfo('template_directory');?>/img/Logo-GoalKeepers.svg" alt="GoalKeepers Logo"><img src="<?php bloginfo('template_directory');?>/img/Text-Logo-GoalKeepers.svg" alt="GoalKeepers Logo in Text">
                </a>
            </div>
            <div class="col-lg-7 gx-3 socials justify-content-center">
                <div class="col-lg-4"><img src="<?php bloginfo('template_directory');?>/img/social-email.svg" alt="email icon"><span>goal.keepersteam@gmail.com</span></div>
                <div class="col-lg-4" id="adjust-span"><img src="<?php bloginfo('template_directory');?>/img/social-fb.svg" alt="facebook icon"><span>@goalkeepersteamph</span></div>
                <div class="col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/social-phone.svg" alt="phone icon"><span>09954781200</span></div>
                </div>
                <div class="col-lg-3 copyright"><span>&copy; 2024 GOALKEEPERS. All rights reserved. </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- #page -->

<?php wp_footer(); ?>

    <script>
        // Get the modal
        var modal = document.getElementById("contact-form-modal");

        // Get the button that opens the modal
        var btn = document.getElementById("contact-form-modal-btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
</body>
</html>

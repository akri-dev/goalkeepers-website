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
                                            <div class="row d-flex justify-content-center"><a href="about-us">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="about-section container mb-5 mt-5">
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
                        "A group of people doesn&apos;t have to rely on each other to get what they want, but the TEAM must depend on each other to achieve their goals."
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
                    <div class="col-sm-3 text-center">
                        <h1 class="team-text">
                        T
                        </h1>
                        <h2 class="team-caption-text">
                        Together
                        </h2>
                    </div>
                    <div class="col-sm-3 text-center">
                        <h1 class="team-text">
                        E
                        </h1>
                        <h2 class="team-caption-text">
                        Everyone
                        </h2>
                    </div>
                    <div class="col-sm-3 text-center">
                        <h1 class="team-text">
                        A
                        </h1>
                        <h2 class="team-caption-text">
                        Achieves
                        </h2>
                    </div>
                    <div class="col-sm-3 text-center">
                        <h1 class="team-text">
                        M
                        </h1>
                        <h2 class="team-caption-text">
                        More
                        </h2>
                    </div>
                </div>
            </div>
            <div class="services pt-5 pb-4">
                <h1 class="text-uppercase text-center">Programs & Services</h1>
                <div class="col-lg-12 container text-center">
                    <h2 class="team-sub-text">
                    Empowering teams, leaders, and communities through tailored development programs.
                    </h2>
                </div>
            </div>
            <section class="bg-light pb-4">
                <div class="container text-center">
                    <div class="row pt-2 g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/team-building-fin.jpg" class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Team Building</h2>
                            <p class="card-text">Foster unity, collaboration, and fun through engaging group activities designed to strengthen teamwork.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/Seminar.jpg" class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Seminars & Training</h2>
                            <p class="card-text">Equip teams and individuals with knowledge, skills, and inspiration through relevant and interactive learning sessions.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/retreat-recollect.jpg" class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Retreats & Recollections</h2>
                            <p class="card-text">Create space for spiritual reflection, healing, and values formation in peaceful and guided environments.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/camp.jpg" class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Camps & Campus Programs</h2>
                            <p class="card-text">Engage youth and students in leadership development, values education, and purposeful community-building activities.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/community-1.jpg" class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Community Programs</h2>
                            <p class="card-text">Promote transformation and empowerment through outreach, sports, livelihood, and holistic life skill programs.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                        <div class="card-header p-0">
                            <div><img src="https://goalkeepers.42web.io/wp-content/uploads/2025/01/character.jpg class="w-100" alt="Team Building"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="fw-bolder">Character & Values Formation</h2>
                            <p class="card-text">Build integrity, leadership, and purpose through customized value-based learning for all ages and sectors.</p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="mt-4 program-services">
                        <div class="row d-flex justify-content-center"><a href="our-programs-services">Learn More</a>
                    </div>
                </div>
            </section>
            <div class="brands pb-4">
                <div class="inner-brands container pt-5 pb-5">
                    <h1 class="text-uppercase text-center pb-4">Brands we have worked with</h1>
                    <div class="row">
                        <img src="<?php bloginfo('template_directory');?>/img/brand-group1.jpg" alt="group of brands collaborated" class="col-lg-6 testimonial-client">
                        <img src="<?php bloginfo('template_directory');?>/img/brand-group2.jpg" alt="group of brands collaborated" class="col-lg-6 testimonial-client">
                    </div>
                </div>
            </div>
            <div class="testimonials mt-5">
                <div class="inner-testimonials container pt-4 pb-5">
                    <h1 class="text-uppercase text-center pb-4">Testimonials</h1>
                    <div class="row d-flex justify-content-center">
                        <img src="<?php bloginfo('template_directory');?>/img/testimonial-img1.jpg" alt="testimonial of a client" class="col-lg-4 mb-4 testimonial-client">
                        <img src="<?php bloginfo('template_directory');?>/img/testimonial-img2.jpg" alt="testimonial of a client" class="col-lg-4 mb-4 testimonial-client">
                        <img src="<?php bloginfo('template_directory');?>/img/testimonial-img3.jpg" alt="testimonial of a client" class="col-lg-4 mb-4 testimonial-client">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="<?php bloginfo('template_directory');?>/img/testimonial-img4.jpg" alt="testimonial of a client" class="col-lg-4 mb-4 testimonial-client">
                        <img src="<?php bloginfo('template_directory');?>/img/testimonial-img5.jpg" alt="testimonial of a client" class="col-lg-4 mb-4 testimonial-client">
                    </div>
                </div>
            </div>
            <div class="coaches">
                <div class="inner-coaches container pt-4 pb-4 text-center">
                    <h1 class="text-uppercase pt-4">Meet Our Stellar Team of Coaches</h1>
                    <h2 class="coaches-sub-text">
                        Our team comprises top-tier Coaches, each a proven expert in their field. Diverse backgrounds converge, forming a powerhouse of competence and excellence.
                    </h2>
                </div>
                <img src="<?php bloginfo('template_directory');?>/img/team-coaches.jpg" alt="team of coaches" class="img-liquid object-fit-cover w-100">
            </div>
            <div class="contact-form container justify-content-center">
                <div class="img-contact-person">
                    <div class="contact-form-text">
                        <h1>Connect with Us<br>for Team-building.</h1>
                        <p>Forge Stronger Teams: Connect with Us for<br>Unparalleled Team-building Experiences!</p>
                    </div>
                    <div class="contact-form-card w-50 rounded-5 p-5" id="form-modal-card-size">
                        <form action="https://formspree.io/f/xgvvrlqg" method="POST">
                            <input type="text" name="name" placeholder="Name" class="rounded-2 w-100" required>
                            <input type="tel" name="contact_number" placeholder="Contact Number" class="rounded-2 w-100" required>
                            <input type="email" name="email" id="prospect-email" placeholder="Email Address" class="rounded-2 w-100" required>
                            <select class="form-select rounded-2 w-100" aria-label="Select Event" name="event_type" required>
                                <option selected hidden>Event Type</option>
                                <option value="Team Building">Team Building</option>
                                <option value="Sportsfest">Sportsfest</option>
                                <option value="Leadership Training">Leadership Training</option>
                                <option value="Employee Wellbeing Workshops">Employee Wellbeing Workshops</option>
                                <option value="Camp">Camp</option>
                                <option value="Retreat">Retreat</option>
                                <option value="Others">Others (Indicate in the message box below)</option>
                            </select>
                            <input type="text" name="event_date" id="prospect-start-date" placeholder="Event Date" onfocus="(this.type='date')" onfocusout="(this.type='date')" class="rounded-2 w-100" required>
                            <input type="number" name="head_count" placeholder="Head Count" class="rounded-2 w-100" required>
                            <textarea name="Message" id="" cols="30" rows="5" placeholder="Message" class="rounded-2 mb-1 w-100" required></textarea>
                            
                            <div class="wrapper-button-contact d-flex justify-content-center">
                                <button class="rounded-2 px-5 pt-3 pb-3 ">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- #main -->

<?php
get_footer();





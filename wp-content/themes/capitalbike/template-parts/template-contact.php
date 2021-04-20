<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capitalbike
 */

get_header(); ?>

<section class="pagebanner text-white">
    <div class="pagebanner__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-us.jpg" alt="contact-us">
    </div>
    <div class="container">
        <div class="row pagebanner__row pagebanner-full">
            <div class="col-md-6">
                <h1>Reach Out</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore
                    et dolore magna aliquyam erat, sed diam</p>
                <ul class="ctalist">
                    <li><a href="#" class="btn btn-primary">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="contactsec py-6 bg-light">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 contactsec__widget">
                <h3>Social</h3>
                <ul>
                    <li><a href="#">@capitalbike</a></li>
                    <li><a href="#">@capitalbikevictoria</a></li>
                    <li><a href="#">@capitalbike</a></li>
                </ul>
            </div>
            <div class="col-md-4 contactsec__widget">
                <h3>Get in Touch</h3>
                <ul>
                    <li><a href="#">info@capitalbike.ca</a></li>
                    <li><a href="#">Phone: (250) 920-5775</a></li>
                    <li><a href="#">Fax: (250) 920-5773</a></li>
                </ul>
            </div>
            <div class="col-md-4 contactsec__widget">
                <h3>Location</h3>
                <ul>
                    <li><a href="#">1034 Hillside Avenue V8T 2A5</a></li>
                    <li>
                        Office Hours: <br> Monday-Friday: 9:00am-4:30pm
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="py-5 commsec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore
                    et dolore magna aliquyam erat, sed diam voluptua. At del dolor estilos skiousha io ueliou vero eos
                    et
                    accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="col-md-10 pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="First Name" class="form-control">
                        <input type="text" placeholder="Last Name" class="form-control">
                        <input type="text" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <textarea placeholder="Your Message" class="form-control"></textarea>
                        <button class="btn btn-lg btn-block btn-secondary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 commsec text-white bg-dark newsletter">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-lg-4 col-md-8">
                <h2>Subscribe To Our Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumkoly eirmod tempor invidunt ut
                    labo dolor.</p>
            </div>
            <div class="col-lg-6 col-xl-5 pl-lg-5 col-md-8">
                <form>
                    <input type="text" placeholder="Full Name" class="form-control">
                    <input type="email" placeholder="Email Address" class="form-control">
                    <button class="btn btn-lg btn-block btn-secondary">Sign Me Up!</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
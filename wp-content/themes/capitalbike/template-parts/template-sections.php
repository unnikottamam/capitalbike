<?php
/**
 * Template Name: Sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capitalbike
 */

get_header(); ?>

<section class="banner text-white">
    <div class="container">
        <div class="row banner__row banner-full">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Advocate. Educate. </h1>
                <p>Capital Bike is a registered non-profit society governed by a volunteer Board of Directors.</p>
                <ul class="ctalist">
                    <li><a href="#" class="btn btn-primary">Upcoming Events</a></li>
                    <li><a href="#" class="btn btn-default">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="banner__side d-none d-lg-block"></div>
</section>
<section class="py-5 commsec bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 text-center">
                <h2>GoByBikeWeek 2021</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore
                    et dolore magna aliquyam erat, sed diam voluptua.</p>
                <ul class="ctalist">
                    <li><a href="#" class="btn btn-secondary">Learn More</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="eventsec bg-primary">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-6 text-lg-right eventsec__left">
                <div class="eventsec__leftinn">
                    <div class="eventsec__slider">
                        <div class="eventsec__slide">
                            <div class="eventsec__slideimg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/city-bike-event.jpg"
                                    alt="event">
                            </div>
                        </div>
                        <div class="eventsec__slide">
                            <div class="eventsec__slideimg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/city-bike-event.jpg"
                                    alt="event">
                            </div>
                        </div>
                        <div class="eventsec__slide">
                            <div class="eventsec__slideimg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/city-bike-event.jpg"
                                    alt="event">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 eventsec__right pt-lg-6">
                <h2>Upcoming Events</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum.</p>
                <ul class="ctalist">
                    <li><a href="#" class="btn btn-dark">View Events</a></li>
                    <li><a href="#" class="btn btn-default">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="clouddesign text-white">
    <div class="clouddesign__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/curved-image.png" alt="curved-image">
    </div>
    <div class="container">
        <div class="clouddesign__cont">
            <h2>Catchy City Riding Urban Title.</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores
                et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur.</p>
            <ul class="ctalist">
                <li><a href="#" class="btn btn-primary">Learn More</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="py-5 commsec">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 text-center text-lg-left">
                <h2>Our Sponsors</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                <ul class="ctalist">
                    <li><a href="#" class="btn btn-secondary">Become a Sponsor</a></li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="brands__slider">
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" alt="logo">
                    </div>
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.svg" alt="logo">
                    </div>
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.svg" alt="logo">
                    </div>
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" alt="logo">
                    </div>
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.svg" alt="logo">
                    </div>
                    <div class="brands__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.svg" alt="logo">
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
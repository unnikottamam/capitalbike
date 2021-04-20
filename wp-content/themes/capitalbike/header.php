<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capitalbike
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header text-white">
        <div class="container-fluid">
            <div class="row align-items-center header__row">
                <div class="col-md-5 col-sm-6 col-8">
                    <a class="header__logo" href="<?php echo home_url(); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/capital-bike-logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-md-7 col-sm-6 col-4 text-right">
                    <a href="#" class="btn btn-secondary d-none d-sm-inline-block">Donate</a>
                    <a href="#" class="header__toggle ml-sm-3">
                        <span class="toggle__1"></span>
                        <span class="toggle__2"></span>
                        <span class="toggle__3"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="mainmenu text-white">
        <div class="mainmenu__inn text-center">
            <div class="container">
                <div class="row align-items-center mainmenu__row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="mainmenu__list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">News & Events</a></li>
                                    <li><a href="#">Bike Courses</a></li>
                                    <li><a href="#">Get Involved</a></li>
                                    <li><a href="#">Resources</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-md-4 mainmenu__widget">
                                <h3>Social</h3>
                                <ul>
                                    <li><a href="#">@capitalbike</a></li>
                                    <li><a href="#">@capitalbikevictoria</a></li>
                                    <li><a href="#">@capitalbike</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mainmenu__widget">
                                <h3>Get in Touch</h3>
                                <ul>
                                    <li><a href="#">info@capitalbike.ca</a></li>
                                    <li><a href="#">Phone: (250) 920-5775</a></li>
                                    <li><a href="#">Fax: (250) 920-5773</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mainmenu__widget">
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
                </div>
            </div>
        </div>
    </div>
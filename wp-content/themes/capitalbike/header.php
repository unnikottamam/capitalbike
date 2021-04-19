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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header text-white">
        <div class="container-fluid">
            <div class="row align-items-center header__row">
                <div class="col-md-5 col-8">
                    <a class="header__logo" href="<?php echo home_url( ); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/capital-bike-logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-md-7 col-8 text-right">
                    <a href="#" class="btn btn-secondary">Donate</a>
                    <a href="#" class="header__toggle">
                        <span class="toggle__1"></span>
                        <span class="toggle__2"></span>
                        <span class="toggle__3"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
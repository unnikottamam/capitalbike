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
               <a href="<?php echo get_permalink(
                 15
               ); ?>" class="btn btn-secondary d-none d-sm-inline-block">Join Us</a>
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
                     <div class="col-lg-8 col-12">
                        <?php wp_nav_menu([
                          'container_class' => '',
                          'theme_location' => 'menu-1',
                          'container' => '',
                          'menu_class' => 'mainmenu__list',
                        ]); ?>
                     </div>
                     <div class="col-12"></div>
                     <?php get_template_part(
                       'template-parts/contact',
                       'widgets'
                     ); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
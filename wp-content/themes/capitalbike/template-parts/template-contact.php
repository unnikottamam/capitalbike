<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capitalbike
 */

get_header(); ?>

<section class="pagebanner text-white cloud1">
   <div class="pagebanner__img cloud1">
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
         <?php get_template_part('template-parts/contact', 'widgets'); ?>
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
            <?php echo do_shortcode(
              '[contact-form-7 id="98" title="Contact Form"]'
            ); ?>
         </div>
      </div>
   </div>
</section>
<section class="py-5 commsec text-white bg-dark newsletter">
   <div class="container">
      <div class="row text-center text-md-left">
         <div class="col-lg-4 col-md-8">
            <?php the_field('subscribe_content', 'options'); ?>
         </div>
         <?php get_template_part('template-parts/newsletter', 'area'); ?>
      </div>
   </div>
</section>

<?php get_footer();
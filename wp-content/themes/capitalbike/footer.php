<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capitalbike
 */
?>

<?php get_template_part('template-parts/instagram', 'feeds'); ?>
<footer class="footer bg-dark text-white">
   <div class="container text-center">
      <div class="row">
         <div class="col-12">
            <a href="<?php echo home_url(); ?>" class="footer__logo">
               <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="capital bike">
            </a>
         </div>
         <?php get_template_part('template-parts/contact', 'widgets'); ?>
      </div>
   </div>
</footer>
<div class="footer__btm text-white bg-secondary">
   <p><a href="#">Terms & Conditions</a></p>
</div>
<div class="footer__btm bg-light">
   <p>
      Copyright Capital Bike &copy; <?php echo date('Y'); ?>.
      All Rights Reserved.</p>
</div>
<div class="footer__btm bg-primary">
   <p><a target="_blank" href="https://foecreative.com/">Crafted by Foe</a></p>
</div>

<?php wp_footer(); ?>

</body>

</html>
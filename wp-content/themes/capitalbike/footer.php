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

if (!is_page_template('template-parts/template-sections.php')) { ?>
<section class="py-5 commsec bg-dark text-white newsletter">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-lg-4 col-md-8">
                <?php the_field('subscribe_content', 'options'); ?>
            </div>
            <?php get_template_part('template-parts/newsletter', 'area'); ?>
        </div>
    </div>
</section>
<?php } ?>

<div class="insta">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bike-icon.svg"
        style="display:block;width:100px;height:auto;margin:6vw auto .75vw">
    <a href="https://www.instagram.com/capitalbikeca/">
        <h3 style="text-align:center;">@capitalbikeca</h3>
    </a>
    <?php get_template_part('template-parts/instagram', 'feed'); ?>
    <img src="<?php echo get_template_directory_uri(); ?>/images/blue-wave-before.svg"
        style="position:absolute;bottom:0;z-index:999;width:100%;margin-bottom:-5vw;" class="nomobile">
</div>

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
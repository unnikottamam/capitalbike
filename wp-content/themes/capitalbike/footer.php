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

<section class="pt-5 instasec">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bike-icon.svg" alt="instagram">
                <h3><a target="_blank" href="#">@capitalbike</a></h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="instasec__slider">
            <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="instasec__slide">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.jpg" alt="instagram">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<footer class="footer bg-dark text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo home_url(); ?>" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="capital bike">
                </a>
            </div>
            <div class="col-md-4 footer__widget">
                <h3>Social</h3>
                <ul>
                    <li><a href="#">@capitalbike</a></li>
                    <li><a href="#">@capitalbikevictoria</a></li>
                    <li><a href="#">@capitalbike</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer__widget">
                <h3>Get in Touch</h3>
                <ul>
                    <li><a href="#">info@capitalbike.ca</a></li>
                    <li><a href="#">Phone: (250) 920-5775</a></li>
                    <li><a href="#">Fax: (250) 920-5773</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer__widget">
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
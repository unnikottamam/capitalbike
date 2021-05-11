<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

get_header(); ?>


<section id="section_2" class="pt-6 commsec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php while (have_posts()) {
                  the_post();
                  the_content();
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
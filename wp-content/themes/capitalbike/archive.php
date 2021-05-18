<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

get_header();
get_template_part('template-parts/news', 'banner');
$page_id = get_queried_object_id();
?>

<section id="section_2" class="pt-6 commsec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12 text-center text-lg-left">
                <h2><?php echo single_term_title(); ?></h2>
                <?php the_archive_description(); ?>
            </div>
            <?php get_template_part('template-parts/post', 'filter'); ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/post', 'list');
get_footer();
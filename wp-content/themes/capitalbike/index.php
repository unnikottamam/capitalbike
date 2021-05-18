<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

get_header();
get_template_part('template-parts/news', 'banner');
$page_for_posts = get_option('page_for_posts');
?>

<section id="section_2" class="pt-6 commsec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12 text-center text-lg-left">
                <?php
                $page = get_post($page_for_posts);
                echo $page->post_content;
                ?>
            </div>
            <?php get_template_part('template-parts/post', 'filter'); ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/post', 'list');
get_footer();
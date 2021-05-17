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
$page_for_posts = get_option('page_for_posts');
?>

<section id="section_2" class="pt-6 commsec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12">
                <?php
                $page = get_post($page_for_posts);
                echo $page->post_content;
                ?>
            </div>
            <div class="col-lg-6 col-12">

            </div>
        </div>
    </div>
</section>

<?php
if (have_posts()) {
  $ct = 0;
  echo '<div class="text-center text-md-left">';
  while (have_posts()) {
    the_post();
    $ct = $ct == 1 ? 0 : ++$ct;
    get_template_part('template-parts/content', get_post_type(), [
      'class' => $ct,
    ]);
  }
  the_posts_navigation();
  echo '</div>';
} else {
  get_template_part('template-parts/content', 'none');
}
get_footer();
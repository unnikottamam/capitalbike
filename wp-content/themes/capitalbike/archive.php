<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

get_header();
$page_id = get_queried_object_id();

if (have_rows('page_banner', 'category_' . $page_id)) {
  while (have_rows('page_banner', 'category_' . $page_id)) {

    the_row();
    $overlay = get_sub_field('overlay_type');
    ?>
<section id="section_1" class="pagebanner text-white cloud<?php echo $overlay; ?> white">
    <?php
    $image = get_sub_field('bg_image');
    if ($image) {

      $src = aq_resize($image['url'], 1366, 768, true, true, true);
      $alt = $image['alt'] ? $image['alt'] : get_the_title();
      ?>
    <div class="pagebanner__img cloud<?php echo $overlay; ?>">
        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
    </div>
    <?php
    }
    ?>
    <div class="container">
        <div class="row pagebanner__row pagebanner-full">
            <div class="col-md-6">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
  }
} else {
  get_template_part('template-parts/news', 'banner');
}
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
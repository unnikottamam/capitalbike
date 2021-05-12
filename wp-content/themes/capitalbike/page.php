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

get_header();

if (have_rows('page_banner')) {
  while (have_rows('page_banner')) {

    the_row();
    $overlay = get_sub_field('overlay_type');
    ?>
<section id="section_1" class="pagebanner text-white cloud<?php echo $overlay; ?>">
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
}
?>

<section id="section_2" class="py-5 bg-light commsec">
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
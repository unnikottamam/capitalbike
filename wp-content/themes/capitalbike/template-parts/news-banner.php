<?php
/**
 * Template part for displaying news banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

$page_for_posts = get_option('page_for_posts');
if (have_rows('page_banner', $page_for_posts)) {
  while (have_rows('page_banner', $page_for_posts)) {

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
}
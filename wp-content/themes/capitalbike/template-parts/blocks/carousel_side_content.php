<?php
/**
 * Carousel + Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if (have_rows('styles')) {
    while (have_rows('styles')) {
        the_row();
        $bg_color = get_sub_field('bg_color');
        $text_color = get_sub_field('text_color');
        $text_align = get_sub_field('text_align');
        $needcurve = get_sub_field('need_curve_layer');
        $curve_type = get_sub_field('curve_type')
        ? get_sub_field('curve_type')
        : 'none';
        $curve_color = get_sub_field('curve_color')
        ? get_sub_field('curve_color')
        : 'none';
    }
}
$cloudbg = $needcurve ? "cloud$curve_type" : "";
get_template_part('template-parts/section', 'start', [
  'class' => "py-5 commsec sidecarousel bg-$bg_color text-$text_color $cloudbg $curve_color",
]);
?>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 order-lg-2 text-<?php echo $text_align; ?>">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
        <div class="col-lg-6 order-lg-<?php the_field(
              'carousel_position'
            ); ?>">
            <?php if (have_rows('images')) {
                echo '<div class="sidecarousel__imgs">';
                while (have_rows('images')) {
                the_row();
                $image = get_field('image');
                $src = aq_resize($image['url'], 540, 540, true, true, true);
                $alt = $image['alt'];
                ?>
            <div class="sidecarousel__img">
                <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
            </div>
            <?php
                }
                echo '</div>';
            } ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
<?php
/**
 * Content Area Block Template.
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
        $column_size = get_sub_field('column_size');
        switch ($column_size) {
        case 'small':
            $class = "col-md-6 col-lg-5";
            break;
        case 'medium':
            $class = "col-md-9 col-lg-7";
            break;
        case 'large':
            $class = "col-md-11 col-lg-10";
            break;
        default:
            $class = "col-12";
            break;
        }
    }
}
$cloudbg = $needcurve ? "cloud$curve_type" : "";
get_template_part('template-parts/section', 'start', [
  'class' => "py-5 commsec bg-$bg_color text-$text_color $cloudbg $curve_color",
]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
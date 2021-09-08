<?php
/**
 * Contact Form Area Block Template.
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
        $column_size = get_sub_field('column_size');
        switch ($column_size) {
        case 'small':
            $class = "col-md-6 col-lg-5";
            break;
        case 'medium':
            $class = "col-md-8 col-lg-6";
            break;
        case 'large':
            $class = "col-md-10 col-lg-8";
            break;
        default:
            $class = "col-12";
            break;
        }
    }
}
get_template_part('template-parts/section', 'start', [
  'class' => "py-6 commsec contactarea bg-$bg_color text-$text_color",
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
        <?php if (get_field('form_shortcode')) { ?>
        <div class="col-md-10 contactarea__form">
            <?php echo do_shortcode(get_field("form_shortcode")); ?>
        </div>
        <?php } ?>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
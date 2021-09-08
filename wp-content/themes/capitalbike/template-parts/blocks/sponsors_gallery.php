<?php
/**
 * Sponsors Gallery Block Template.
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
        $curve_color = get_sub_field('curve_color');
        $curve_position = get_sub_field('curve_position')
        ? get_sub_field('curve_position')
        : 'bottom';
    }
}
get_template_part('template-parts/section', 'start', [
  'class' => "aboutsec sponsorgal $curve_color $curve_position py-6 text-$text_color bg-$bg_color",
]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-<?php echo $text_align; ?>">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
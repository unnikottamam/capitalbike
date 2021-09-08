<?php
/**
 * Contact Info Block Template.
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
    }
}
get_template_part('template-parts/section', 'start', [
  'class' => "contactsec py-6 bg-$bg_color text-$text_color",
]);
?>
<div class="container text-center">
    <div class="row">
        <?php get_template_part('template-parts/contact', 'widgets'); ?>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
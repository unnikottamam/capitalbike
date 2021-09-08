<?php
/**
 * Newsletter Block Template.
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
  'class' => "py-5 commsec bg-$bg_color text-$text_color newsletter",
]);
?>
<div class="container">
    <div class="row text-center text-md-left">
        <div class="col-lg-4 col-md-8">
            <?php the_field('subscribe_content', 'options'); ?>
        </div>
        <?php get_template_part('template-parts/newsletter', 'area'); ?>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
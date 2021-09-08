<?php
/**
 * Line Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$text_color = get_field('color');
$bg_color = get_field('bg_color');
get_template_part('template-parts/section', 'start', [
  'class' => "horizline text-$text_color bg-$bg_color",
]);
get_template_part('template-parts/section', 'end');
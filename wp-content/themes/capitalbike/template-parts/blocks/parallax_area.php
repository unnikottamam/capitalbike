<?php
/**
 * Parallax Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
  'class' => "clouddesign text-white",
]);

if (get_sub_field('bg_image')) {
    $image = get_sub_field('bg_image');
    $src = $image['url'];
    $alt = $image['alt'];
    ?>
<div class="clouddesign__img">
    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
</div>
<?php
}
?>
<div class="container">
    <div class="clouddesign__cont">
        <?php
        the_sub_field('contents');
        get_template_part('template-parts/cta', 'buttons');
        ?>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
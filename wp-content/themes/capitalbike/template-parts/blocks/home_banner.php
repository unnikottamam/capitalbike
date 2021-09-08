<?php
/**
 * Home Banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
    'class' => 'banner text-white',
]);
?>
<div class="container">
    <div class="row banner__row banner-full">
        <div class="col-lg-6 text-center text-lg-left">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php
if (get_sub_field('side_image')) {
    $image = get_sub_field('side_image');
    $src = $image['url']; ?>
<div class="banner__side d-none d-lg-block" style="background-image: url('<?php echo $src; ?>');"></div>
<?php }
get_template_part('template-parts/section', 'end');
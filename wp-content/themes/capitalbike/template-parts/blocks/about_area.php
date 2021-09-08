<?php
/**
 * About Area Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
  'class' => "aboutsec pt-6 bottom text-white bg-darklight",
]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 text-center">
            <?php
            the_sub_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/section', 'end');
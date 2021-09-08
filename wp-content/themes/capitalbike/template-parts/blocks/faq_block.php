<?php
/**
 * FAQ Block Template.
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
  'class' => "faqsec commsec bg-$bg_color text-$text_color",
]);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <?php
            if (have_rows('faq_lists')) {
                $count = 0;
                while (have_rows('faq_lists')) {
                the_row();
                $count++;
                ?>
            <div class="faqsec__inn <?php if ($count == 1) {
                echo 'active';
            } ?>">
                <h3>Q: <?php the_sub_field('title'); ?></h3>
                <div class="faqsec__cont">
                    <?php the_sub_field('faq_contents'); ?>
                </div>
            </div>
            <?php
                }
            }
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/section', 'end');
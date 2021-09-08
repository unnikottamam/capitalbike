<?php
/**
 * Side Content as Slider Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
  'class' => "contslider",
]);
?>
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-lg-6 contslider__left py-6">
            <div class="contslider__leftinn text-white">
                <?php the_field('contents'); ?>
            </div>
            <?php get_template_part('template-parts/cta', 'buttons'); ?>
        </div>
        <div class="col-lg-6 contslider__right pt-5">
            <div class="contslider__rightinn">
                <?php if (have_rows('image_slider')) {
                    echo '<div class="contslider__slider">';
                    while (have_rows('image_slider')) {
                        the_row();
                        $image = get_sub_field('image');
                        if (get_sub_field('image')) {
                            $src = aq_resize(
                            $image['url'],
                            610,
                            510,
                            true,
                            true,
                            true
                            );
                            $alt = $image['alt']
                            ? $image['alt']
                            : get_the_title();
                            ?>
                <div class="contslider__slide">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
                </div>
                <?php
                        }
                    }
                    echo '</div>';
                } ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
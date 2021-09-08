<?php
/**
 * Events Area Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
  'class' => "eventsec bg-primary",
]);
?>
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-lg-6 text-lg-right eventsec__left">
            <div class="eventsec__leftinn">
                <?php if (have_rows('image_slider')) {
                    echo '<div class="eventsec__slider">';
                    while (have_rows('image_slider')) {
                    the_row();
                    $image = get_sub_field('image');
                    if (get_sub_field('image')) {
                        $src = aq_resize(
                        $image['url'],
                        540,
                        540,
                        true,
                        true,
                        true
                        );
                        $alt = $image['alt'] ? $image['alt'] : "Events";
                        ?>
                <div class="eventsec__slide">
                    <div class="eventsec__slideimg">
                        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
                    </div>
                </div>
                <?php }
                    }
                    echo '</div>';
                } ?>
            </div>
        </div>
        <div class="col-lg-5 eventsec__right pt-lg-6">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
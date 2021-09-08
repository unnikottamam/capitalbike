<?php
/**
 * Sponsors Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

get_template_part('template-parts/section', 'start', [
  'class' => "py-5 commsec",
]);
?>
<div class="container">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-4 text-center text-lg-left">
            <?php
            the_field('contents');
            get_template_part('template-parts/cta', 'buttons');
            ?>
        </div>
        <?php if (have_rows('sponsors_list', 'options')) { ?>
        <div class="col-lg-7">
            <div class="brands__slider">
                <?php while (have_rows('sponsors_list', 'options')) {
                    the_row();
                    $link = get_sub_field('link');
                    if (get_sub_field('image')) {
                        $image = get_sub_field('image');
                        $src = $image['url'];
                        $alt = $image['alt']
                            ? $image['alt']
                            : get_sub_field('title');
                        ?>
                <div class="brands__slide">
                    <?php if ($link) {
                            echo '<a href="' . $link . '">';
                        } ?>
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                    <?php if ($link) {
                            echo '</a>';
                        } ?>
                </div>
                <?php
                    }
                } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
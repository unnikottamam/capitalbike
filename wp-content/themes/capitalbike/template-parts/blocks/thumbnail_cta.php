<?php
/**
 * Thumbnail CTA Block Template.
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
        $text_align = get_sub_field('text_align');
        $needcurve = get_sub_field('need_curve_layer');
        $curve_type = get_sub_field('curve_type')
        ? get_sub_field('curve_type')
        : 'none';
        $curve_color = get_sub_field('curve_color')
        ? get_sub_field('curve_color')
        : 'none';
        $column_size = get_sub_field('column_size');
        switch ($column_size) {
        case 'small':
            $class = "col-md-6 col-lg-5";
            break;
        case 'medium':
            $class = "col-md-9 col-lg-7";
            break;
        case 'large':
            $class = "col-md-11 col-lg-10";
            break;

        default:
            $class = "col-12";
            break;
        }
    }
}
$cloudbg = $needcurve ? "cloud$curve_type" : "";
get_template_part('template-parts/section', 'start', [
  'class' => "py-5 commsec thumbnailscta bg-$bg_color text-$text_color $cloudbg $curve_color",
]);
?>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
            <?php the_sub_field('contents'); ?>
        </div>
        <div class="col-12">
            <?php if (have_rows('thumbnails')) {
                echo '<div class="row thumbnailscta__list">';
                while (have_rows('thumbnails')) {
                the_row();
                $type = get_sub_field('type');
                ?>
            <div class="col-md-6 col-12 thumbnailscta__item">
                <?php $class =
                    $type == 'image'
                    ? 'thumbnailscta__image'
                    : 'thumbnailscta__cont'; ?>
                <div class="thumbnailscta__inn <?php echo $class; ?>">
                    <?php
                    echo get_sub_field('link')
                        ? '<a href="' .
                        get_sub_field('link') .
                        '"><span class="sr-only">Read More</span></a>'
                        : '';
                    if ($type == 'image' && get_sub_field('image')) {
                        $image = get_sub_field('image');
                        $src = aq_resize(
                        $image['url'],
                        500,
                        386,
                        true,
                        true,
                        true
                        );
                        $alt = $image['alt'];
                        ?>
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
                    <div class="thumbnailscta__imginn text-white">
                        <?php
                        echo '<h2>' . get_sub_field('title') . '</h2>';
                        echo '<p>' . get_sub_field('sub_title') . '</p>';
                        ?>
                    </div>
                    <?php
                    } else {
                        the_sub_field('content');
                    }
                    ?>
                </div>
            </div>
            <?php
                }
                echo '</div>';
            } ?>
        </div>
        <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
            <?php get_template_part('template-parts/cta', 'buttons'); ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/section', 'end');
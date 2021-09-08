<?php
/**
 * Page Banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$cloud_color = get_sub_field('cloud_color');
$overlay = get_sub_field('overlay_type');
get_template_part('template-parts/section', 'start', [
    'class' => "pagebanner text-white cloud$overlay $cloud_color",
]);
if (get_sub_field('bg_image')) {
    $image = get_sub_field('bg_image');
    $src = aq_resize($image['url'], 1366, 768, true, true, true);
    $alt = $image['alt'] ? $image['alt'] : get_the_title();
    ?>
<div class="pagebanner__img cloud<?php echo $overlay; ?>">
    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
</div>
<?php } ?>
<div class="container">
    <div class="row pagebanner__row pagebanner-full">
        <div class="col-md-6">
            <?php
            the_field('contents');
            if (have_rows('buttons')) {
                get_template_part('template-parts/cta', 'buttons');
            } else {
                ?>
            <a href="#section_2" class="pagebanner__down">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/section', 'end');
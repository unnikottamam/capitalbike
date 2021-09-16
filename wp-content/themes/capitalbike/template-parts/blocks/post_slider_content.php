<?php
/**
 * Post Slider With Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$circular_images = get_field('circular_side_images');
$readmore = get_field('post_read_more') ? get_field('post_read_more') : 'Read More';
get_template_part('template-parts/section', 'start', [
  'class' => "contslider postslider",
]);
$select_posts = get_field('select_posts');

$buttn__cont = '';
if (have_rows('buttons')) {
    while (have_rows('buttons')) {
        the_row();
        if (get_sub_field('link') && get_sub_field('title')) {
            $buttn__cont .=
            '<li><a href="' .
            get_sub_field('link') .
            '" class="btn btn-' .
            get_sub_field('color') .
            '">' .
            get_sub_field('title') .
            '</a></li>';
        }
    }
}
if ($select_posts) { ?>
<div class="contslider__slider">
    <?php foreach ($select_posts as $postitem) {
        ?>
    <div class="row postslider__slide justify-content-between d-flex">
        <div class="col-lg-6 contslider__left py-6">
            <div class="contslider__leftinn text-white">
                <h2><?php echo get_the_title( $postitem->ID ); ?></h2>
                <p>
                    <?php echo wp_trim_words(
                        get_the_excerpt($postitem->ID),
                        30,
                        '...'
                    ); ?>
                </p>
            </div>
            <ul class="ctalist">
                <li>
                    <a href="<?php echo get_permalink( $postitem->ID ); ?>"
                        class="btn btn-primary"><?php echo $readmore; ?></a>
                </li>
                <?php echo $buttn__cont; ?>
            </ul>
        </div>
        <div class="col-lg-6 contslider__right pt-5">
            <div class="contslider__rightinn">
                <?php if (has_post_thumbnail($postitem->ID)) {
                    $image = get_the_post_thumbnail_url($postitem->ID, 'full');
                    $src = $circular_images
                    ? aq_resize($image, 560, 560, true, true, true)
                    : aq_resize($image, 610, 510, true, true, true);
                    ?>
                <div class="contslider__slide">
                    <img <?php echo $circular_images
                        ? 'class="circleimg" width="560" height="560"'
                        : 'width="610" height="510"'; ?> src="<?php echo $src; ?>"
                        alt="<?php echo get_the_title(); ?>">
                </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <?php
    } ?>
</div>
<?php
}

get_template_part('template-parts/section', 'end');
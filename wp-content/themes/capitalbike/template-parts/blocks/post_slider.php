<?php
/**
 * Post Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$term = get_sub_field('select_post_category');
$num = get_sub_field('post_number')
  ? get_sub_field('post_number')
  : 3;
get_template_part('template-parts/section', 'start', [
  'class' => "eventsec",
]);
?>
<div class="container-fluid p-0">
    <?php
    $buttons = '';
    if (have_rows('buttons')) {
        while (have_rows('buttons')) {
        the_row();
        if (get_sub_field('link') && get_sub_field('title')) {
            $buttons .=
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
    $args = [
        'post_type' => 'post',
        'posts_per_page' => $num,
        'cat' => $term->term_id,
    ];
    query_posts($args);
    if (have_posts()) {
        echo '<div class="eventsec__slider bg-primary">';
        while (have_posts()) {

        echo '<div class="row justify-content-between d-flex">';

        the_post();
        if (has_post_thumbnail()) {

            $src = aq_resize(
            get_the_post_thumbnail_url(get_the_ID(), 'full'),
            540,
            540,
            true,
            true,
            true
            );
            $alt = get_the_title();
            ?>
    <div class="col-lg-6 text-lg-right eventsec__left">
        <div class="eventsec__leftinn">
            <div class="eventsec__slide">
                <div class="eventsec__slideimg">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
                </div>
            </div>
        </div>
    </div>
    <?php
        }
        ?>
    <div class="col-lg-5 eventsec__right pt-lg-6 bg-primary">
        <h2><?php the_title(); ?></h2>
        <p>
            <?php echo wp_trim_words(
                get_the_excerpt(get_the_ID()),
                40,
                '...'
            ); ?>
        </p>
        <ul class="ctalist">
            <li><a href="<?php the_permalink(); ?>" class="btn btn-dark">Learn More</a></li>
            <?php echo $buttons; ?>
        </ul>
    </div>
    <?php echo '</div>';
        }
        echo '</div>';
    }
    wp_reset_query();
    ?>
</div>
<?php get_template_part('template-parts/section', 'end');
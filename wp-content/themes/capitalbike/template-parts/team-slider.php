<?php
/**
 * Template part for displaying team members as slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

if (have_rows('team_info', 'options')) { ?>
<section class="pt-6 teamarea text-white bg-darklight">
    <div class="container text-center">
        <div class="teamarea__slider">
            <?php while (have_rows('team_info', 'options')) {
              the_row(); ?>
            <div class="teamarea__slide">
                <?php
                $image = get_sub_field('image');
                if ($image) {

                  $src = aq_resize($image['url'], 194, 194, true, true, true);
                  $alt = $image['alt'] ? $image['alt'] : get_sub_field('title');
                  ?>
                <div class="teamarea__img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                </div>
                <?php
                }
                ?>
                <h3><?php the_sub_field('title'); ?></h3>
                <h4><?php the_sub_field('sub_title'); ?></h4>
                <p><?php the_sub_field('description'); ?></p>
            </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<?php }
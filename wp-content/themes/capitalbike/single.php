<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package capitalbike
 */

get_header();
while (have_posts()) {
  the_post(); ?>
<section id="section_1" class="pagebanner text-white cloud1 white">
    <?php if (has_post_thumbnail()) {

      $src = aq_resize(
        get_the_post_thumbnail_url(),
        1366,
        768,
        true,
        true,
        true
      );
      $alt = get_the_post_thumbnail_caption()
        ? get_the_post_thumbnail_caption()
        : get_the_title();
      ?>
    <div class="pagebanner__img cloud1">
        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="524" height="392">
    </div>
    <?php
    } ?>
    <div class="container">
        <div class="row pagebanner__row pagebanner-full">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
                <?php if (has_excerpt()) { ?>
                <p><?php the_excerpt(); ?></p>
                <?php } ?>
                <a href="#section_2" class="pagebanner__down">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<main id="section_2" class="pt-6">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6 text-center text-md-left">
                <p><?php echo get_the_date(); ?></p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <?php
                echo do_shortcode('[social-share]');
                the_post_navigation([
                  'prev_text' =>
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg><span class="sr-only">Previous: %title</span>',
                  'next_text' =>
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg><span class="sr-only">Next: %title</span>',
                ]);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <article class="post__main">
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
                <?php echo do_shortcode('[social-share]'); ?>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <?php the_post_navigation([
                  'prev_text' =>
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg><span class="sr-only">Previous: %title</span>',
                  'next_text' =>
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg><span class="sr-only">Next: %title</span>',
                ]); ?>
            </div>
        </div>
    </div>
</main>
<?php
}
get_footer();
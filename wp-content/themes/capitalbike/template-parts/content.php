<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

$post_class = "py-5 post__thumb ";
$count = $args['class'] ? $args['class'] : '';
$post_class .=
  $count == 0 ? 'py-6 cloudtop cloudbtm white bg-dark text-white even' : 'odd';
?>
<section id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="<?php the_permalink(); ?>" class="row align-items-center">
                    <div class="col-md-6 <?php echo $count == 0
                      ? 'order-md-2'
                      : ''; ?>">
                        <div class="post__thumbimg">
                            <?php if (has_post_thumbnail()) {

                              $src = aq_resize(
                                get_the_post_thumbnail_url(),
                                524,
                                392,
                                true,
                                true,
                                true
                              );
                              $alt = get_the_post_thumbnail_caption()
                                ? get_the_post_thumbnail_caption()
                                : get_the_title();
                              ?>
                            <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="524" height="392">
                            <?php
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-6 post__thumbcont">
                        <?php the_title('<h2>', '</h2>'); ?>
                        <p>
                            <?php echo wp_trim_words(
                              get_the_excerpt(),
                              30,
                              '...'
                            ); ?>
                        </p>
                        <span class="btn btn-<?php echo $count == 0
                          ? 'primary'
                          : 'secondary'; ?>">Read More</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
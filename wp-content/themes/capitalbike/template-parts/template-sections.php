<?php
/**
 * Template Name: Sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capitalbike
 */

get_header();
if (have_posts()) {
  while (have_posts()) {
    the_post();
    if (have_rows('layouts')) {
      $sec_id = 0;
      while (have_rows('layouts')) {
        the_row();
        $sec_id++;

        if (get_row_layout() == 'home_banner') { ?>
<section id="section_<?php echo $sec_id; ?>" class="banner text-white">
    <div class="container">
        <div class="row banner__row banner-full">
            <div class="col-lg-6 text-center text-lg-left">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    $image = get_sub_field('side_image');
    if ($image) {
      $src = $image['url']; ?>
    <div class="banner__side d-none d-lg-block" style="background-image: url('<?php echo $src; ?>');"></div>
    <?php
    }
    ?>
</section>
<?php }

        if (get_row_layout() == 'page_banner') {

          $cloud_color = get_sub_field('cloud_color');
          $overlay = get_sub_field('overlay_type');
          ?>
<section id="section_<?php echo $sec_id; ?>"
    class="pagebanner text-white cloud<?php echo $overlay; ?> <?php echo $cloud_color; ?>">
    <?php
    $image = get_sub_field('bg_image');
    if ($image) {

      $src = aq_resize($image['url'], 1366, 768, true, true, true);
      $alt = $image['alt'] ? $image['alt'] : get_the_title();
      ?>
    <div class="pagebanner__img cloud<?php echo $overlay; ?>">
        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
    </div>
    <?php
    }
    ?>
    <div class="container">
        <div class="row pagebanner__row pagebanner-full">
            <div class="col-md-6">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
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
</section>
<?php
        }

        if (get_row_layout() == 'common_content') {
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
          } ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec bg-<?php echo $bg_color; ?> text-<?php
 echo $text_color;
 if ($needcurve) { ?> cloud<?php echo $curve_type;}
 ?> <?php echo $curve_color; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li <?php if (get_sub_field('button_type') == 'block') {
                  echo 'class="ctalist__block"';
                } ?>>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'carousel_side_content') {
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
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec sidecarousel bg-<?php echo $bg_color; ?> text-<?php
 echo $text_color;
 if ($needcurve) { ?> cloud<?php echo $curve_type;}
 ?> <?php echo $curve_color; ?>">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 order-lg-2 text-<?php echo $text_align; ?>">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
            <div class="col-lg-6 order-lg-<?php the_sub_field(
              'carousel_position'
            ); ?>">
                <?php if (have_rows('images')) {
                  echo '<div class="sidecarousel__imgs">';
                  while (have_rows('images')) {

                    the_row();
                    $image = get_sub_field('image');

                    $src = aq_resize($image['url'], 540, 540, true, true, true);
                    $alt = $image['alt'];
                    ?>
                <div class="sidecarousel__img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="540" height="540">
                </div>
                <?php
                  }
                  echo '</div>';
                } ?>
            </div>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'thumbnails_cta_area') {
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
          } ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec thumbnailscta bg-<?php echo $bg_color; ?> text-<?php
 echo $text_color;
 if ($needcurve) { ?> cloud<?php echo $curve_type;}
 ?> <?php echo $curve_color; ?>">
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
                <?php if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                } ?>
            </div>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'content_slider_section') {
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
          } ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec contentslider bg-<?php echo $bg_color; ?> text-<?php
 echo $text_color;
 if ($needcurve) { ?> cloud<?php echo $curve_type;}
 ?> <?php echo $curve_color; ?>">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <?php if (have_rows('slider_contents')) {
                  echo '<div class="contentslider__slider">';
                  while (have_rows('slider_contents')) {
                    the_row(); ?>
                <div class="contentslider__slides">
                    <div class="row justify-content-center">
                        <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                </div>
                <?php
                  }
                  echo '</div>';
                } ?>
            </div>
            <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
                <?php if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                } ?>
            </div>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'faq_area') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="faqsec commsec bg-<?php echo $bg_color; ?> text-<?php echo $text_color; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php
                if (have_rows('faq_lists')) {
                  $count = 0;
                  while (have_rows('faq_lists')) {

                    the_row();
                    $count++;
                    ?>
                <div class="faqsec__inn <?php if ($count == 1) {
                  echo 'active';
                } ?>">
                    <h3>Q: <?php the_sub_field('title'); ?></h3>
                    <div class="faqsec__cont">
                        <?php the_sub_field('faq_contents'); ?>
                    </div>
                </div>
                <?php
                  }
                }
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'contact_form_area') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
              $text_align = get_sub_field('text_align');
              $column_size = get_sub_field('column_size');
              switch ($column_size) {
                case 'small':
                  $class = "col-md-6 col-lg-5";
                  break;
                case 'medium':
                  $class = "col-md-8 col-lg-6";
                  break;
                case 'large':
                  $class = "col-md-10 col-lg-8";
                  break;

                default:
                  $class = "col-12";
                  break;
              }
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>" class="py-6 commsec contactarea bg-<?php echo $bg_color; ?>
    text-<?php echo $text_color; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="<?php echo $class; ?> text-<?php echo $text_align; ?>">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
            <?php if (get_sub_field('form_shortcode')) { ?>
            <div class="col-md-10 contactarea__form">
                <?php echo do_shortcode(get_sub_field("form_shortcode")); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
        }

        if (get_row_layout() == 'events_area') { ?>
<section id="section_<?php echo $sec_id; ?>" class="eventsec bg-primary">
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
                    <?php
                        }
                        ?>
                    <?php
                      }
                      echo '</div>';
                    } ?>
                </div>
            </div>
            <div class="col-lg-5 eventsec__right pt-lg-6">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php }

        if (get_row_layout() == 'post_slider') {

          $term = get_sub_field('select_post_category');
          $num = get_sub_field('post_number')
            ? get_sub_field('post_number')
            : 3;
          ?>

<section id="section_<?php echo $sec_id; ?>" class="eventsec">
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
</section>
<?php
        }
        if (get_row_layout() == 'content_sideslider') { ?>
<section id="section_<?php echo $sec_id; ?>" class="contslider">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-6 contslider__left py-6">
                <div class="contslider__leftinn text-white">
                    <?php the_sub_field('contents'); ?>
                </div>
                <?php if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                } ?>
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
                        ?>
                    <?php
                      }
                      echo '</div>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
        if (get_row_layout() == 'post_slider_content') {

          $circular_images = get_sub_field('circular_side_images');
          $readmore = get_sub_field('post_read_more')
            ? get_sub_field('post_read_more')
            : 'Read More';
          ?>
<section id="section_<?php echo $sec_id; ?>" class="contslider postslider">
    <?php
    $buttn__cont = '';
    if (have_rows('buttons')) {
      while (have_rows('buttons')) {
        the_row();
        if (get_sub_field('link') && get_sub_field('title')) {
          $buttn__cont .=
            '<li>
                  <a href="' .
            get_sub_field('link') .
            '" class="btn btn-' .
            get_sub_field('color') .
            '">' .
            get_sub_field('title') .
            '</a></li>';
        }
      }
    }
    $select_posts = get_sub_field('select_posts');
    if ($select_posts) { ?>
    <div class="contslider__slider">
        <?php foreach ($select_posts as $post) {
          setup_postdata($post); ?>
        <div class="row postslider__slide justify-content-between d-flex">
            <div class="col-lg-6 contslider__left py-6">
                <div class="contslider__leftinn text-white">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php echo wp_trim_words(
                          get_the_excerpt(),
                          30,
                          '...'
                        ); ?>
                    </p>
                </div>
                <ul class="ctalist">
                    <li>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo $readmore; ?></a>
                    </li>
                    <?php echo $buttn__cont; ?>
                </ul>
            </div>
            <div class="col-lg-6 contslider__right pt-5">
                <div class="contslider__rightinn">
                    <?php if (has_post_thumbnail()) {

                      $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
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
    <?php wp_reset_postdata();}
    ?>
</section>
<?php
        }
        if (get_row_layout() == 'parallax_area') { ?>
<section id="section_<?php echo $sec_id; ?>" class="clouddesign text-white">
    <?php
    $image = get_sub_field('bg_image');
    if ($image) {

      $src = $image['url'];
      $alt = $image['alt'];
      ?>
    <div class="clouddesign__img">
        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
    </div>
    <?php
    }
    ?>
    <div class="container">
        <div class="clouddesign__cont">
            <?php
            the_sub_field('contents');
            if (have_rows('buttons')) {
              echo '<ul class="ctalist">';
              while (have_rows('buttons')) {
                the_row();
                if (get_sub_field('link') && get_sub_field('title')) { ?>
            <li>
                <a href="<?php the_sub_field(
                  'link'
                ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
            </li>
            <?php }
              }
              echo '</ul>';
            }
            ?>
        </div>
    </div>
</section>
<?php }
        if (get_row_layout() == 'team_area') { ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5 text-center">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/team', 'slider');}
        if (get_row_layout() == 'about_area') { ?>
<section id="section_<?php echo $sec_id; ?>" class="aboutsec pt-6 bottom text-white bg-darklight">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php }
        if (get_row_layout() == 'horizontal_line') { ?>
<section id="section_<?php echo $sec_id; ?>" class="horizline text-<?php echo get_sub_field(
  'color'
); ?> bg-<?php echo get_sub_field('bg_color'); ?>">
</section>
<?php }
        if (get_row_layout() == 'curve_bg_content_area') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
              $text_align = get_sub_field('text_align');
              $curve_color = get_sub_field('curve_color');
              $curve_position = get_sub_field('curve_position')
                ? get_sub_field('curve_position')
                : 'bottom';
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="aboutsec <?php echo $curve_color; ?> <?php echo $curve_position; ?> py-6 text-<?php echo $text_color; ?> bg-<?php echo $bg_color; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-<?php echo $text_align; ?>">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
        }
        if (get_row_layout() == 'sponsors_gallery') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
              $text_align = get_sub_field('text_align');
              $curve_color = get_sub_field('curve_color');
              $curve_position = get_sub_field('curve_position')
                ? get_sub_field('curve_position')
                : 'bottom';
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="aboutsec sponsorgal <?php echo $curve_color; ?> <?php echo $curve_position; ?> py-6 text-<?php echo $text_color; ?> bg-<?php echo $bg_color; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-<?php echo $text_align; ?>">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
        }
        if (get_row_layout() == 'sponsors') { ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 text-center text-lg-left">
                <?php
                the_sub_field('contents');
                if (have_rows('buttons')) {
                  echo '<ul class="ctalist">';
                  while (have_rows('buttons')) {
                    the_row();
                    if (get_sub_field('link') && get_sub_field('title')) { ?>
                <li>
                    <a href="<?php the_sub_field(
                      'link'
                    ); ?>" class="btn btn-<?php the_sub_field(
  'color'
); ?>"><?php the_sub_field('title'); ?></a>
                </li>
                <?php }
                  }
                  echo '</ul>';
                }
                ?>
            </div>
            <?php if (have_rows('sponsors_list', 'options')) { ?>
            <div class="col-lg-7">
                <div class="brands__slider">
                    <?php while (have_rows('sponsors_list', 'options')) {
                      the_row();
                      $link = get_sub_field('link');
                      $image = get_sub_field('image');
                      if ($image) {

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
</section>
<?php }
        if (get_row_layout() == 'contact_info_blocks') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="contactsec py-6 bg-<?php echo $bg_color; ?> text-<?php echo $text_color; ?>">
    <div class="container text-center">
        <div class="row">
            <?php get_template_part('template-parts/contact', 'widgets'); ?>
        </div>
    </div>
</section>
<?php
        }
        if (get_row_layout() == 'newsletter') {
          if (have_rows('styles')) {
            while (have_rows('styles')) {
              the_row();
              $bg_color = get_sub_field('bg_color');
              $text_color = get_sub_field('text_color');
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="py-5 commsec bg-<?php echo $bg_color; ?> text-<?php echo $text_color; ?> newsletter">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-lg-4 col-md-8">
                <?php the_field('subscribe_content', 'options'); ?>
            </div>
            <?php get_template_part('template-parts/newsletter', 'area'); ?>
        </div>
    </div>
</section>
<?php
        }
      }
    } else {
      get_template_part('template-parts/content', 'page');
    }
  }
}
get_footer();
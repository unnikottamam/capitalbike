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
          $overlay = get_sub_field('overlay_type'); ?>
<section id="section_<?php echo $sec_id; ?>" class="pagebanner text-white cloud<?php echo $overlay; ?>">
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
<section id="section_<?php echo $sec_id; ?>"
    class="py-5 commsec bg-<?php echo $bg_color; ?> text-<?php echo $text_color; ?>">
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
<section id="section_<?php echo $sec_id; ?>" class="aboutsec pt-6 text-white bg-darklight">
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
            }
          } ?>
<section id="section_<?php echo $sec_id; ?>"
    class="aboutsec <?php echo $curve_color; ?> py-6 text-<?php echo $text_color; ?> bg-<?php echo $bg_color; ?>">
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
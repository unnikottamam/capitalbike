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
   <div class="banner__side d-none d-lg-block"></div>
</section>
<?php }

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
   class="py-5 commsec bg-<?php echo $bg_color; ?> text-<?php echo $text_color; ?> ">
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

                     $size = 'large';
                     $src = $image['sizes'][$size];
                     $alt = $image['alt'] ? $image['alt'] : "Events";
                     ?>
               <div class="eventsec__slide">
                  <div class="eventsec__slideimg">
                     <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
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

        if (get_row_layout() == 'newsletter') { ?>
<section id="section_<?php echo $sec_id; ?>" class="py-5 commsec text-white bg-dark newsletter">
   <div class="container">
      <div class="row text-center text-md-left">
         <div class="col-lg-4 col-md-8">
            <?php the_field('subscribe_content', 'options'); ?>
         </div>
         <?php get_template_part('template-parts/newsletter', 'area'); ?>
      </div>
   </div>
</section>
<?php }
      }
    } else {
      get_template_part('template-parts/content', 'page');
    }
  }
}
get_footer();
<?php
/**
 * ACF Blocks
 *
 * @package capitalbike
 */

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
  if (function_exists('acf_register_block_type')) {
    acf_register_block_type([
      'name' => 'home_banner',
      'title' => __('Home Banner'),
      'description' => __('Home Banner block.'),
      'render_template' => 'template-parts/blocks/home_banner.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['home_banner'],
    ]);

    acf_register_block_type([
      'name' => 'page_banner',
      'title' => __('Page Banner'),
      'description' => __('Page Banner block.'),
      'render_template' => 'template-parts/blocks/page_banner.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['page_banner'],
    ]);

    acf_register_block_type([
      'name' => 'content-section',
      'title' => __('Content Section'),
      'description' => __('Content Section block.'),
      'render_template' => 'template-parts/blocks/content-section.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['content-section'],
    ]);

    acf_register_block_type([
      'name' => 'carousel-side-section',
      'title' => __('Carousel + Content Section'),
      'description' => __('Carousel + Content Section.'),
      'render_template' => 'template-parts/blocks/carousel_side_content.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['carousel-side-section'],
    ]);

    acf_register_block_type([
      'name' => 'thumbnail-cta-section',
      'title' => __('Thumbnail CTA Section'),
      'description' => __('Thumbnail CTA Section.'),
      'render_template' => 'template-parts/blocks/thumbnail_cta.php',
      'category' => 'layout ',
      'icon' => 'format-image',
      'keywords' => ['thumbnail-cta-section'],
    ]);

    acf_register_block_type([
      'name' => 'content-slider-section',
      'title' => __('Content With Slider Section'),
      'description' => __('Content With Slider Section.'),
      'render_template' => 'template-parts/blocks/content_with_slider.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['content-slider-section'],
    ]);

    acf_register_block_type([
      'name' => 'faq-section',
      'title' => __('FAQ Block Section'),
      'description' => __('FAQ Block Section.'),
      'render_template' => 'template-parts/blocks/faq_block.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['faq-section'],
    ]);

    acf_register_block_type([
      'name' => 'contact-form-area',
      'title' => __('Contact Form Area'),
      'description' => __('Contact Form Area.'),
      'render_template' => 'template-parts/blocks/contact_form_area.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['contact-form-area'],
    ]);

    acf_register_block_type([
      'name' => 'events-area',
      'title' => __('Events Area'),
      'description' => __('Events Area.'),
      'render_template' => 'template-parts/blocks/contact_form_area.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['events-area'],
    ]);

    acf_register_block_type([
      'name' => 'post-slider',
      'title' => __('Post Slider Block'),
      'description' => __('Post Slider Block.'),
      'render_template' => 'template-parts/blocks/post_slider.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['post-slider'],
    ]);

    acf_register_block_type([
      'name' => 'post-slider-content',
      'title' => __('Post Slider With Content Block'),
      'description' => __('Post Slider With Content Block.'),
      'render_template' => 'template-parts/blocks/post_slider_content.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['post-slider-content'],
    ]);

    acf_register_block_type([
      'name' => 'content-side-slider',
      'title' => __('Side Content as Slider Block'),
      'description' => __('Side Content as Slider Block.'),
      'render_template' => 'template-parts/blocks/side_content_slider.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['content-side-slider'],
    ]);

    acf_register_block_type([
      'name' => 'parallax-section',
      'title' => __('Parallax Block'),
      'description' => __('Parallax Block.'),
      'render_template' => 'template-parts/blocks/parallax_area.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['parallax-section'],
    ]);

    acf_register_block_type([
      'name' => 'team-section',
      'title' => __('Team Block'),
      'description' => __('Team Block.'),
      'render_template' => 'template-parts/blocks/team_area.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['team-section'],
    ]);

    acf_register_block_type([
      'name' => 'about-section',
      'title' => __('About Block'),
      'description' => __('About Block.'),
      'render_template' => 'template-parts/blocks/about_area.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['about-section'],
    ]);

    acf_register_block_type([
      'name' => 'curved-bg-section',
      'title' => __('Curved BG Content Block'),
      'description' => __('Curved BG Content Block.'),
      'render_template' => 'template-parts/blocks/curved_bg_content.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['curved-bg-section'],
    ]);

    acf_register_block_type([
      'name' => 'sponsors-section',
      'title' => __('Sponsors Block'),
      'description' => __('Sponsors Block.'),
      'render_template' => 'template-parts/blocks/sponsors.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['sponsors-section'],
    ]);

    acf_register_block_type([
      'name' => 'sponsors-gallery-section',
      'title' => __('Sponsors Gallery Block'),
      'description' => __('Sponsors Gallery Block.'),
      'render_template' => 'template-parts/blocks/sponsors_gallery.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['sponsors-gallery-section'],
    ]);

    acf_register_block_type([
      'name' => 'contact-info-section',
      'title' => __('Contact Info Block'),
      'description' => __('Contact Info Block.'),
      'render_template' => 'template-parts/blocks/contact_info.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['contact-info-section'],
    ]);

    acf_register_block_type([
      'name' => 'newsletter-section',
      'title' => __('Newsletter Block'),
      'description' => __('Newsletter Block.'),
      'render_template' => 'template-parts/blocks/newsletter.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['newsletter-section'],
    ]);

    acf_register_block_type([
      'name' => 'line-section',
      'title' => __('Horizontal Line Block'),
      'description' => __('Horizontal Line Block.'),
      'render_template' => 'template-parts/blocks/line.php',
      'category' => 'layout ',
      'icon' => 'edit-page',
      'keywords' => ['line-section'],
    ]);
  }
}
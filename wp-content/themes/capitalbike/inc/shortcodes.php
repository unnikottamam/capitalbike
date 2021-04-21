<?php
/**
 * Register all shortcodes
 *
 * @return null
 */
function register_shortcodes()
{
  add_shortcode('social-media', 'shortcode_social_media');
  add_shortcode('contact-list', 'shortcode_contact_list');
  add_shortcode('location-info', 'shortcode_location_info');
}
add_action('init', 'register_shortcodes');

/**
 * Social Media Shortcode Callback
 */
function shortcode_social_media()
{
  $html = '<h3>Social</h3>';
  if (have_rows('social_media_links', 'options')) {
    $html .= '<ul class="social-media-links">';
    while (have_rows('social_media_links', 'options')) {
      the_row();
      $link = get_sub_field('link');
      $html .= '<li class="hasimg"><a target="_blank" href="' . $link . '">';
      if (strpos($link, "facebook") !== false) {
        $html .=
          '<img src="' .
          get_template_directory_uri() .
          '/images/facebook.svg" alt="facebook">';
      } elseif (strpos($link, "instagram") !== false) {
        $html .=
          '<img src="' .
          get_template_directory_uri() .
          '/images/instagram.svg" alt="instagram">';
      } elseif (strpos($link, "twitter") !== false) {
        $html .=
          '<img src="' .
          get_template_directory_uri() .
          '/images/twitter.svg" alt="twitter">';
      }
      $html .= get_sub_field('title') . '</a></li>';
    }
    $html .= '</ul>';
  }
  return $html;
}

/**
 * Contact List Shortcode Callback
 */
function shortcode_contact_list()
{
  $html = '<h3>Get in Touch</h3>';
  if (have_rows('contact_list', 'options')) {
    $html .= '<ul class="contact-list">';
    while (have_rows('contact_list', 'options')) {
      the_row();
      $link = get_sub_field('link');
      $html .= '<li>';
      if ($link) {
        $html .= '<a href="' . $link . '">';
      }
      $html .= get_sub_field('title');
      if ($link) {
        $html .= '</a>';
      }
      $html .= '</li>';
    }
    $html .= '</ul>';
  }
  return $html;
}

/**
 * Contact List Shortcode Callback
 */
function shortcode_location_info()
{
  $html = '<h3>Location</h3>';
  if (have_rows('location_info', 'options')) {
    $html .= '<ul class="location-info">';
    while (have_rows('location_info', 'options')) {
      the_row();
      $link = get_sub_field('link');
      $html .= '<li>';
      if ($link) {
        $html .= '<a target="_blank" href="' . $link . '">';
      }
      $html .= get_sub_field('title');
      if ($link) {
        $html .= '</a>';
      }
      $html .= '</li>';
    }
    $html .= '</ul>';
  }
  return $html;
}
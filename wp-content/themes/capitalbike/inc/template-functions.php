<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package capitalbike
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function capitalbike_body_classes($classes)
{
  // Adds a class of hfeed to non-singular pages.
  if (!is_singular()) {
    $classes[] = 'hfeed';
  }

  // Adds a class of no-sidebar when there is no sidebar present.
  if (!is_active_sidebar('sidebar-1')) {
    $classes[] = 'no-sidebar';
  }

  return $classes;
}
add_filter('body_class', 'capitalbike_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function capitalbike_pingback_header()
{
  if (is_singular() && pings_open()) {
    printf(
      '<link rel="pingback" href="%s">',
      esc_url(get_bloginfo('pingback_url'))
    );
  }
}
add_action('wp_head', 'capitalbike_pingback_header');

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

// Change Menu Active Clas
function change_menu_classes($css_classes)
{
  $css_classes = str_replace("current-menu-item", "active", $css_classes);
  $css_classes = str_replace("current_page_item", "active", $css_classes);
  $css_classes = str_replace("current-menu-parent", "active", $css_classes);
  $css_classes = str_replace("current-menu-ancestor", "active", $css_classes);
  return $css_classes;
}
add_filter('nav_menu_css_class', 'change_menu_classes');

update_option('large_size_w', 460);
update_option('large_size_h', 460);
update_option('large_crop', 1);

require_once 'shortcodes.php';
require_once 'aq_resizer.php';

// Remove the CiviCRM styles from front-end displays.
function my_remove_civicrm_styles()
{
  if (!is_admin()) {
    global $civicrm_root;
    if (empty($civicrm_root)) {
      return;
    }
    $civicrm_css = CRM_Core_Resources::singleton()->getUrl(
      'civicrm',
      'css/civicrm.css',
      true
    );
    CRM_Core_Region::instance('html-header')->update($civicrm_css, [
      'disabled' => true,
    ]);
  }
}
add_action('wp_print_styles', 'my_remove_civicrm_styles', 100);

function changeCiviCass($text)
{
  $replace = [
    'crm-form-text' => 'crm-form-text form-control',
    'crm-form-submit' => 'crm-form-submit btn btn-primary',
  ];
  $text = str_replace(array_keys($replace), $replace, $text);
  return $text;
}
add_filter('the_content', 'changeCiviCass');
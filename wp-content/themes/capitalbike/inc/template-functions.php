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

// Load More Funtion
function my_load_more_scripts()
{
  global $wp_query;
  wp_register_script(
    'my_loadmore',
    get_stylesheet_directory_uri() . '/js/loadmore.js',
    ['jquery']
  );

  wp_localize_script('my_loadmore', 'loadmore_params', [
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
    'posts' => json_encode($wp_query->query_vars),
    'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages,
  ]);

  wp_enqueue_script('my_loadmore');
}
add_action('wp_enqueue_scripts', 'my_load_more_scripts');

function loadmore_ajax_handler()
{
  $args = json_decode(stripslashes($_POST['query']), true);
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';

  query_posts($args);
  $ct = $_POST['page'] % 2 ? 1 : 0;
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      $ct = $ct == 1 ? 0 : ++$ct;
      get_template_part('template-parts/content', get_post_type(), [
        'class' => $ct,
      ]);
    }
  }
  die();
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');
<?php
/**
 * Template part for displaying post lists
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

if (have_posts()) {
  $ct = 0;
  echo '<div class="text-center text-md-left post__list">';
  while (have_posts()) {
    the_post();
    $ct = $ct == 1 ? 0 : ++$ct;
    get_template_part('template-parts/content', get_post_type(), [
      'class' => $ct,
    ]);
  }
  if ($wp_query->max_num_pages > 1) { ?>
<div class="container text-center">
    <button class="load-more btn btn-secondary">Load More</button>
</div>
<?php }
  echo '</div>';
} else {
  get_template_part('template-parts/content', 'none');
}
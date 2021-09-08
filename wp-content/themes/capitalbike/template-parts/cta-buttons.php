<?php
/**
 * CTA Buttons Template Part
 *
 */

$class = $args['class'] ? $args['class'] : '';
if (have_rows('buttons')) {
  echo '<ul class="ctalist ' . $class . '">';
  while (have_rows('buttons')) {
    the_row();
    if (get_sub_field('link') && get_sub_field('title')) {

      $link = get_sub_field('link');
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
<li>
    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr(
  $link_target
); ?>" class="btn btn-<?php the_sub_field('color'); ?>"><?php echo esc_html(
  $link_title
); ?></a>
</li>
<?php
    }
  }
  echo '</ul>';
}
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
      $link_title = get_sub_field('title');
      ?>
<li>
    <a href="<?php echo $link; ?>" class="btn btn-<?php the_sub_field('color'); ?>">
        <?php echo $link_title; ?>
    </a>
</li>
<?php
    }
  }
  echo '</ul>';
}
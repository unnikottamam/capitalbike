<?php
/**
 * Section Start Template Part
 *
 */

$id = 'section_' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = $args['class'] ? $args['class'] : '';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section class="<?php echo $className; ?>">
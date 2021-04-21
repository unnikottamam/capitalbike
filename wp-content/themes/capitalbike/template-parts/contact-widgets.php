<?php
/**
 * Template part for displaying contact widgets
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */
?>

<div class="col-md-4 shortcode__widget">
   <?php echo do_shortcode('[social-media]'); ?>
</div>
<div class="col-md-4 shortcode__widget">
   <?php echo do_shortcode('[contact-list]'); ?>
</div>
<div class="col-md-4 shortcode__widget">
   <?php echo do_shortcode('[location-info]'); ?>
</div>
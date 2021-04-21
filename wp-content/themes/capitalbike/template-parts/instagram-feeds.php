<?php
/**
 * Template part for displaying instagram images
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

if (have_rows('instagram_details', 'options')) {
  while (have_rows('instagram_details', 'options')) {
    the_row();
    $username = get_sub_field('username');
    $link = get_sub_field('link');
    $token = get_sub_field('access_keys');
  }
}
if ($token) {
  $remote_wp = wp_remote_get(
    "https://graph.instagram.com/me/media?fields=id,media_type,media_url,permalink,caption&access_token=" .
      $token
  );
}

$datalist = json_decode($remote_wp['body']);
if ($remote_wp['response']['code'] == 200) { ?>
<section class="pt-5 instasec">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bike-icon.svg" alt="instagram">
            <h3><a target="_blank" href="#">@capitalbike</a></h3>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="instasec__slider">
         <?php
         $count = 0;
         $response = $datalist->data;
         foreach ($response as $res) {
           if ($res->media_type == "IMAGE") {
             $count++; ?>
         <div class="instasec__slide">
            <a target="_blank" href="<?php echo $res->permalink; ?>">
               <img src="<?php echo $res->media_url; ?>" alt="<?php echo $res->caption; ?>">
            </a>
         </div>
         <?php
           } ?>
         <?php if ($count == 7) {
           break;
         }
         }
         ?>
      </div>
   </div>
</section>
<?php }
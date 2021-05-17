<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

get_header();
get_template_part('template-parts/news', 'banner');
$page_for_posts = get_option('page_for_posts');
?>

<section id="section_2" class="pt-6 commsec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-12">
                <?php
                $page = get_post($page_for_posts);
                echo $page->post_content;
                ?>
            </div>
            <div class="col-lg-6 col-12 text-center text-lg-right">
                <ul class="list-inline m-0 post__filter pt-3">
                    <li class="list-inline-item p-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="filtercats"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Category
                            </button>
                            <?php
                            $categories = get_categories([
                              'orderby' => 'name',
                              'order' => 'ASC',
                            ]);
                            foreach ($categories as $category) { ?>
                            <div class="dropdown-menu" aria-labelledby="filtercats">
                                <a class="dropdown-item" href="<?php echo esc_url(
                                  get_category_link($category->term_id)
                                ); ?>"><?php echo esc_html(
  $category->name
); ?></a>
                            </div>
                            <?php }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
if (have_posts()) {
  $ct = 0;
  echo '<div class="text-center text-md-left">';
  while (have_posts()) {
    the_post();
    $ct = $ct == 1 ? 0 : ++$ct;
    get_template_part('template-parts/content', get_post_type(), [
      'class' => $ct,
    ]);
  }
  the_posts_navigation();
  echo '</div>';
} else {
  get_template_part('template-parts/content', 'none');
}
get_footer();
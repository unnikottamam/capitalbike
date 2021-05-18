<?php
/**
 * Template part for displaying post filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capitalbike
 */

$page_id = get_queried_object_id(); ?>
<div class="col-lg-6 col-12 text-center text-lg-right">
    <ul class="list-inline m-0 post__filter pt-3">
        <li class="list-inline-item p-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="filtercats" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo is_archive()
                      ? single_term_title()
                      : "All Categories"; ?>
                </button>

                <div class="dropdown-menu" aria-labelledby="filtercats">
                    <?php
                    if (is_archive()) {
                      $page_for_posts = get_option('page_for_posts'); ?>
                    <a class="dropdown-item" href="<?php echo get_permalink(
                      $page_for_posts
                    ); ?>">All Categories</a>
                    <?php
                    }
                    $categories = get_categories([
                      'orderby' => 'name',
                      'order' => 'ASC',
                    ]);
                    foreach ($categories as $category) {
                      if ($category->term_id == $page_id) {
                        continue;
                      } ?>
                    <a class="dropdown-item" href="<?php echo esc_url(
                      get_category_link($category->term_id)
                    ); ?>"><?php echo esc_html($category->name); ?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </li>
        <li class="list-inline-item p-2">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="filterorder" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sort By
                </button>
                <div class="dropdown-menu" aria-labelledby="filterorder">
                    <a class="dropdown-item" href="?order=desc">Newest</a>
                    <a class="dropdown-item" href="?order=asc">Oldest</a>
                    <a class="dropdown-item" href="?orderby=title&order=asc">Name (A-Z)</a>
                    <a class="dropdown-item" href="?orderby=title&order=desc">Name (Z-A)</a>
                </div>
            </div>
        </li>
    </ul>
</div>
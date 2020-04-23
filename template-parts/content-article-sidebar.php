<aside class="w-full md:w-4/12 px-6 mt-6 sm:mt-0">
  <h2 class="px-2 text-xl font-medium flex justify-between items-end border-b-2 border-teal-300 pb-3">文章類別
    <?php get_template_part('template-parts/content', 'svg-bookmark-outline'); ?>
  </h2>
  <ul>
    <?php
    $args = array(
      'type'                     => 'post',
      'orderby'                  => 'name',
      'order'                    => 'ASC',
      'hide_empty'               => true,
      'exclude'                  => array(5, 7, 8, 9, 6)
    );
    $categories = get_categories($args);
    foreach ($categories as $category) {
      echo '
            <li class="p-4 text-teal-800 font-medium border-b border-teal-300">
            <a href="' . get_category_link($category->term_id) . '" class="flex justify-between items-center">'
        . $category->name . '<svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-teal-300 h-5 w-5" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 110 20 10 10 0 010-20zM2 10a8 8 0 1016 0 8 8 0 00-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z"/>
          </svg>
            </a>
        </li>';
    }
    ?>
  </ul>
  <h2 class="px-2 text-xl font-medium flex justify-between items-end border-b-2 border-teal-300 pb-3 mt-16">最熱門文章
    <?php get_template_part('template-parts/content', 'svg-bookmark-outline'); ?>
  </h2>
  <ul>
    <?php
    query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <li class="p-4 text-teal-800 font-medium border-b border-teal-300">
          <a href="<?php the_permalink(); ?>" class="flex justify-between items-center"><?php the_title(); ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-teal-300 h-5 w-5" viewBox="0 0 20 20">
              <path d="M10 0a10 10 0 110 20 10 10 0 010-20zM2 10a8 8 0 1016 0 8 8 0 00-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z" />
            </svg>
          </a>
        </li>
        <li><a href=""></a></li>
    <?php
      endwhile;
    endif;
    wp_reset_query();
    ?>
  </ul>
</aside>
<!-- sm:w-4/12 -->
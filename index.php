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
 * @package betterlife
 */

get_header();
?>
<header>
  <div class="bg-teal-500 w-full" style="height: 450px;"></div>
</header>

<section class="sm:py-16">
  <div class="container mx-auto">
    <div class="flex flex-wrap sm:-mx-6">
      <main class="w-full md:w-8/12 bg-white mt-8 md:mt-0 px-6">
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <div class="relative overflow-hidden shadow-lg rounded-lg">
              <div class="absolute bg-teal-700 rounded-lg text-white font-medium p-2 " style="top: 3%; left: 3%;">
                <?php the_time('F d, Y') ?>
              </div>
              <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail("", array('class'  => 'w-full rounded object-cover object-center thumbnail')); ?>
              <?php } ?>
            </div>
            <div class="mt-3">
              <a href="<?php the_permalink(); ?>">
                <h2 class="text-green-700 font-medium text-xl">
                  <?php the_title(); ?>
                </h2>
              </a>
              <p class="mt-2 text-sm ">
                <?php echo get_the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="text-green-500">繼續閱讀→</a>
              </p>
            </div>
          </article>
          <hr class="border-b-0 border-gray-300 my-8" />
        <?php endwhile; ?>
        <?php wp_pagenavi(); ?>

      </main>
      <!-- sm:w-8/12 -->
      <?php get_template_part('template-parts/content', 'article-sidebar'); ?>
    </div>
  </div>
</section>
<!-- Footer -->



<?php
get_footer();

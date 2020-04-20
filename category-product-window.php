<?php
/* Template Name: 所有產品 Page */
get_header(); ?>

<header>
  <img src="<?php echo get_theme_file_uri('/assets/product-header.jpg') ?>" class="object-cover object-center w-full" style="max-height: 450px;" />
</header>

<section class="py-16 bg-gray-200">
  <div class="container mx-auto">
    <div class="flex flex-wrap">
      <?php get_template_part('template-parts/content', 'products-sidebar'); ?>
      <div class="w-full md:w-8/12 bg-white shadow rounded py-6 px-10 mt-8 md:mt-0">
        <h1 class="font-medium text-3xl mb-6">氣密窗</h1>
        <div class="flex flex-wrap mt-8 -mx-2">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'product',
            'orderby' => 'post_id',
            'cat' => 5,
            'order' => 'ASC',
            'posts_per_page' => '8',
          ));
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="w-full sm:w-1/2 px-2 mb-10">
              <a href="<?php the_permalink(); ?>" class="product-img shadow">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('full', array(
                    'class' => 'w-full object-cover  h-full object-center', 'alt'  => trim(strip_tags($post->post_title)),
                    'title'  => trim(strip_tags($post->post_title))
                  ));
                } ?>
                <h3 class="text-center"><?php the_title(); ?></h3>
              </a>
            </div>
          <?php endwhile;
          wp_reset_query(); ?>
        </div>
        <div class="flex justify-center mt-4">
          <?php wp_pagenavi(); ?>
        </div>
      </div> <!-- sm:w-9/12 -->
    </div>
  </div>
</section>

<?php
get_footer();

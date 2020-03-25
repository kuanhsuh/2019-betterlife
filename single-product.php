<?php
/* Template Name: 所有產品 Page */
get_header(); ?>
<?php while (have_posts()) : the_post();
  setPostViews(get_the_ID());
?>
  <header>
    <img src="<?php echo get_theme_file_uri('/assets/product-header.jpg') ?>" class="object-cover object-center w-full" style="max-height: 450px;" />
  </header>

  <section class="py-16 bg-gray-200 about">
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <?php get_template_part('template-parts/content', 'products-sidebar'); ?>
        <div class="w-full md:w-8/12 bg-white shadow rounded py-6 px-8 mt-8 md:mt-0">
          <h1 class="font-medium text-3xl mb-6"><?php the_title(); ?></h1>
          <div class="mt-8">
            <?php the_content(); ?>
          </div>
        </div> <!-- sm:w-9/12 -->
      </div>
    </div>
  </section>

<?php endwhile; ?>

<?php
get_footer();

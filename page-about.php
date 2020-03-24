<?php
/* Template Name: 關於我們 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>


  <header>
    <div class="bg-teal-800 w-full" style="height: 450px;"></div>
  </header>

  <section class="sm:py-16 bg-gray-200 about">
    <div class="container mx-auto">
      <div class="flex flex-wrap sm:-mx-6">
        <?php get_template_part('template-parts/content', 'company-sidebar'); ?>

        <div class="w-full md:w-8/12 bg-white shadow rounded px-6 sm:mt-8 md:mt-0">
          <div class="p-4">
            <h1 class="font-medium text-3xl my-4"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <hr class="border-l-1 border-gray-400 border-solid my-4">
            <h2 class="font-medium text-2xl mb-4">品牌代理</h2>
            <div class="flex flex-wrap mt-4 sm:-mx-2">
              <div class="w-full sm:w-1/2 md:w-3/12 px-2 mb-2">
                <span class="bg-teal-500 block rounded w-full h-32"></span>
              </div>
              <div class="w-full sm:w-1/2 md:w-3/12 px-2 mb-2">
                <span class="bg-teal-500 block rounded w-full h-32"></span>
              </div>
              <div class="w-full sm:w-1/2 md:w-3/12 px-2 mb-2">
                <span class="bg-teal-500 block rounded w-full h-32"></span>
              </div>
              <div class="w-full sm:w-1/2 md:w-3/12 px-2 mb-2">
                <span class="bg-teal-500 block rounded w-full h-32"></span>
              </div>
            </div>
            <!-- <ul class="text-xl">
              <li class="border-b border-gray-300 py-4">
                <div class="flex items-center font-light">
                  <div class="font-medium" style="min-width: 200px;">
                    <span class="inline-block border border-teal-500 px-4 py-2 border-2 mr-2" style="border-radius: 50%">1</span>
                    來電
                  </div>
                  <span class="text-base px-2">介紹產品，規格，討論需求</span>
                </div>
              </li>
            </ul> -->
          </div>
        </div> <!-- sm:w-9/12 -->
      </div>
    </div>
  </section>

<?php endwhile; ?>
<?php
get_footer();

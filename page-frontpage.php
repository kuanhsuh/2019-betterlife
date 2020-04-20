<?php
/* Template Name: 首頁 Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <header class="container mx-auto">
    <img src="<?php echo get_theme_file_uri('/assets/home-header.jpg') ?>" alt="" class="w-full object-cover header-img">
  </header>

  <!-- 關於我們 -->
  <section class="py-8 sm:pt-16 sm:pb-16 bg-white">
    <div class="container px-4 sm:px-0 mx-auto">
      <div class="flex flex-wrap mt-8 mx-0 sm:-mx-2">
        <div class="w-full sm:w-6/12 px-0 sm:px-2 flex">
          <div class="w-1/2 mr-5" style="height: 500px; margin-top: -40px">
            <span class="bg-teal-400 rounded block w-full mb-5 overflow-hidden" style="height: 30%">
              <img src="<?php echo get_theme_file_uri('/assets/home-h-1.jpg') ?>" alt="" class="w-full object-cover h-full">
            </span>
            <span class="bg-teal-400 rounded block w-full overflow-hidden" style="height: 60%">
              <img src="<?php echo get_theme_file_uri('/assets/home-v-1.jpg') ?>" alt="" class="w-full object-cover h-full"></span>
          </div>
          <div class="w-1/2 mr-5" style="height: 500px; margin-bottom: -40px">
            <span class="bg-teal-400 rounded block w-full mb-5 overflow-hidden" style="height: 30%">
              <img src="<?php echo get_theme_file_uri('/assets/home-h-2.jpg') ?>" alt="" class="w-full object-cover h-full">
            </span>
            <span class="bg-teal-400 rounded block w-full overflow-hidden" style="height: 60%">
              <img src="<?php echo get_theme_file_uri('/assets/home-v-2.jpg') ?>" alt="" class="w-full object-cover h-full "></span>
          </div>
        </div>
        <div class="w-full sm:w-6/12 px-0 sm:px-2 mt-4 sm:mt-0">
          <div class="flex justify-center">
            <h3 class="section-heading flex items-baseline my-4 sm:mt-0">
              <?php get_template_part('template-parts/content', 'svg-heading-line'); ?>
              關於大岳</h3>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 產品與服務 -->
  <section class="py-8 sm:py-16 bg-gray-200">
    <div class="container px-4 sm:px-0 mx-auto">
      <div class="flex justify-center">
        <h3 class="section-heading flex items-baseline">
          <?php get_template_part('template-parts/content', 'svg-heading-line'); ?>
          產品與服務</h3>
      </div>
      <div class="flex flex-wrap mt-8 mx-0 sm:-mx-2">
        <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2">
          <img src="<?php echo get_theme_file_uri('/assets/home-product-door.jpg') ?>" alt="" class="w-full object-cover h-full rounded shadow-lg">
          <p class="text-sm font-normal text-center">鋁合金門</p>
        </div>
        <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2 mt-4 sm:mt-0">
          <img src="<?php echo get_theme_file_uri('/assets/home-product-shutter.jpg') ?>" alt="" class="w-full object-cover h-full rounded shadow-lg">
          <p class="text-sm font-normal text-center">百葉窗</p>
        </div>
        <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2 mt-4 sm:mt-0">
          <img src="<?php echo get_theme_file_uri('/assets/home-product-window.jpg') ?>" alt="" class="w-full object-cover h-full rounded shadow-lg">
          <p class="text-sm font-normal text-center">氣密窗</p>
        </div>
        <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2 mt-4 sm:mt-0">
          <span class="bg-teal-500 block rounded w-full h-64"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- 聯絡我們 -->
  <section class="py-8 sm:py-16 bg-white">
    <div class="container px-4 sm:px-0 mx-auto">
      <div class="flex justify-center">
        <h3 class="section-heading flex items-baseline"><?php get_template_part('template-parts/content', 'svg-heading-line'); ?>聯絡我們</h3>
      </div>
      <div class="flex flex-wrap mt-8 mx-0 sm:-mx-6">
        <div class="w-full sm:w-4/12 px-0 sm:px-6">
          <div class="card text-center flex flex-col justify-center h-full">
            <h3 class="flex justify-center mb-4 text-xl font-medium items-center text-gray-700">
              <?php get_template_part('template-parts/content', 'svg-phone-ring'); ?>
              聯絡我們
            </h3>
            <p class="mb-2 tracking-wider px-16 text-gray-600 text-sm">間成離之風布，星連無，苦常廠片顯線他個史現</p>
            <div class="text-teal-400 font-medium mt-4">07-666-0000</div>
          </div>
        </div>
        <div class="my-8 sm:my-0 w-full sm:w-4/12 px-0 shadow-2xl py-20 transform -translate-y-4 sm:px-6">
          <div class="card text-center flex flex-col justify-center h-full">
            <h3 class="flex justify-center mb-4 text-xl font-medium items-center text-gray-700">
              <?php get_template_part('template-parts/content', 'svg-mail'); ?>
              立即來電
            </h3>
            <p class="mb-2 tracking-wider px-16 text-gray-600 text-sm">間成離之風布，星連無，苦常廠片顯線他個史現</p>
            <div class="text-teal-400 font-medium mt-4">betterlife@gmail.com</div>
          </div>
        </div>
        <div class="w-full sm:w-4/12 px-0 sm:px-6">
          <div class="card text-center flex flex-col justify-center h-full">
            <h3 class="flex justify-center mb-4 text-xl font-medium items-center text-gray-700">
              <?php get_template_part('template-parts/content', 'svg-map'); ?>
              現場參觀
            </h3>
            <p class="mb-2 tracking-wider px-16 text-gray-600 text-sm">間成離之風布，星連無，苦常廠片顯線他個史現</p>
            <div class="text-teal-400 font-medium mt-4">左營區文學路459號</div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>

<?php
get_footer();

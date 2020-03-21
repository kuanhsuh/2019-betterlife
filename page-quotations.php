<?php
/* Template Name: 詢價單 Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <header>
    <div class="bg-teal-500 w-full" style="height: 450px;"></div>
  </header>

  <section class="py-0 sm:py-10">
    <div class="max-w-4xl bg-gray-200 mx-auto p-8">
      <h2 class="section-heading text-center border-b border-teal-300 pb-4">
        我要詢價
      </h2>
      <div class="mt-4 flex justify-center">
        <p class="text-center max-w-2xl text-sm">
          氣密隔音窗/玄關門/實木百葉窗/雷明盾防侵入玻璃/綠風戶外升降百葉窗
          線上詢價系統完成此表單後<br />我們會請業務人員盡快與您聯絡，了解需求以及約定丈量時間*必填
        </p>
      </div>

      <div class="flex flex-wrap mt-6">
        <?php the_content(); ?>
      </div>
  </section>
<?php endwhile; ?>
<!-- Footer -->
<?php
get_footer();

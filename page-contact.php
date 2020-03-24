<?php
/* Template Name: 聯絡我們 Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>


  <header>
    <img src="<?php echo get_theme_file_uri('/assets/contact-header.jpg') ?>" class="object-cover object-center w-full" style="max-height: 450px;" />
  </header>

  <section class="py-0 sm:py-10">
    <div class="max-w-4xl bg-gray-200 mx-auto p-8">
      <h2 class="section-heading text-center border-b border-teal-300 pb-4">聯絡我們</h2>
      <div class="mt-4 flex justify-center">
        <p class="text-center max-w-2xl text-sm">想進一步了解大岳的產品，還是你有任何問題與意見，歡迎你的來電，或使用信箱留言相關資訊<br />我們會儘快與你取得聯繫!
        </p>
      </div>
      <?php the_content(); ?>
    </div>
  </section>
  <!-- Footer -->
<?php endwhile; ?>

<?php
get_footer();

<?php
/* Template Name: 聯絡我們 Page */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>


  <section class="googlemap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.0204203507983!2d120.31391331508615!3d22.690283734358648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0512b5824861%3A0x2b258b5cf5dc5dbb!2z5aSn5bKz5ZyL6Zqb6ZaA56qX5bu65p2Q!5e0!3m2!1szh-TW!2stw!4v1587682246539!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>

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

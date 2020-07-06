<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package betterlife
 */

?>
<!-- Footer -->
<footer class="py-8 sm:py-16 bg-darkblue text-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap mx-0 sm:-mx-6">
      <div class="w-full sm:w-6/12 px-0 sm:px-6">
        <h3 class="pb-4 text-xl font-medium border-b border-teal-300">
          網站地圖
        </h3>
        <div class="flex -mx-2">
          <div class="w-1/2 pt-4 px-2">
            <ul>
              <li><a href="<?php echo esc_html(site_url("/")) ?>">首頁</a></li>
              <li><a href="<?php echo esc_html(site_url("/company")) ?>">公司介紹</a></li>
              <li><a href="<?php echo esc_html(site_url("/products")) ?>">所有產品</a></li>
              <li><a href="<?php echo esc_html(site_url("/inquiry")) ?>">我要詢價</a></li>
              <li><a href="<?php echo esc_html(site_url("/all-articles")) ?>">相關文章</a></li>
              <li><a href="<?php echo esc_html(site_url("/contact")) ?>">聯絡我們</a></li>
            </ul>
          </div>
          <div class="w-1/2 pt-4 px-2 flex">
            <?php get_template_part('template-parts/content', 'svg-footer-facebook'); ?>
            <?php get_template_part('template-parts/content', 'svg-footer-line'); ?>
          </div>
        </div>
      </div>
      <div class="w-full mt-6 sm:mt-0 sm:w-6/12 px-0 sm:px-6">
        <h3 class="pb-4 text-xl font-medium border-b border-teal-300">
          聯絡我們
        </h3>
        <ul class="pt-4">
          <li class="flex items-center">
            <?php get_template_part('template-parts/content', 'svg-footer-pin'); ?>
            高雄市左營區文學路459號
          </li>
          <li class="flex items-center mt-2">
            <?php get_template_part('template-parts/content', 'svg-footer-phone'); ?>
            07-349-6559
          </li>
          <li class="flex items-center mt-2">
            <?php get_template_part('template-parts/content', 'svg-footer-phone'); ?>
            0800-000-753
          </li>
          <li class="flex items-center mt-2">
            <?php get_template_part('template-parts/content', 'svg-footer-mail'); ?>
            service@betterliving.com.tw
          </li>
        </ul>
        </>
      </div>
    </div>
</footer>
<div class="bg-blackblue py-2">
  <h6 class="text-center text-blue-600 text-sm">2020 © Copyright Betterlife All rights Reserved.</h6>
</div>

<script>
  function toggleMenu() {
    var navMenu = document.querySelector("#responsive");
    navMenu.classList.toggle("hidden");
  }
</script>

<?php wp_footer(); ?>

</body>

</html>
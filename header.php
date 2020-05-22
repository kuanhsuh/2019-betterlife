<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package betterlife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

  <style>
    .googlemap {
      position: relative;
      /* 4:3 ratio*/
      overflow: hidden;
      height: 600px;
    }

    .googlemap iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 600px;
    }

    @media screen and (max-width: 620px) {
      .googlemap {
        height: 350px;
      }

      .googlemap iframe {
        height: 350px;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <nav class="sticky top-0 bg-white shadow z-50 text-sm py-2 px-4 sm:px-0">
    <div class="container mx-auto md:px-0">
      <div class="flex flex-wrap justify-between items-center md:items-end">
        <a href="/">
          <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" class="h-10" /> </a>
        <ul class="hidden md:flex md:items-end md:w-auto ">
          <li class="mr-2 px-2 <?php if (is_page(2)) echo 'text-gray-600 font-medium'; ?>">
            <a href="<?php echo esc_html(site_url("/")) ?>">首頁</a>
          </li>
          <li class="mr-2 px-2 <?php if (is_page(6)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/company")) ?>">關於大岳</a></li>
          <li class="mr-2 px-2 relative dropdown<?php if (is_page(15)) echo 'text-gray-600 font-medium'; ?>"><button class="dropbtn">所有產品</button>
            <div class="dropdown-content">
              <a href="<?php echo esc_html(site_url("/category/product-window")) ?>">隔音氣密窗</a>
              <a href="<?php echo esc_html(site_url("/category/product-door")) ?>">鋁合金門</a>
              <a href="<?php echo esc_html(site_url("/category/product-woodshutter")) ?>">實木百葉窗</a>
              <a href="<?php echo esc_html(site_url("/category/product-outdoor-shutter")) ?>">戶外升降百葉窗</a>
              <a href="<?php echo esc_html(site_url("/category/product-heat-shield")) ?>">防曬隔熱產品</a>
              <a href="#">機能紗網</a>
            </div>
          </li>
          <li class="mr-2 px-2 <?php if (is_page(21)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/inquiry")) ?>">我要詢價</a></li>
          <li class="mr-2 px-2 <?php if (is_page(18)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/all-articles")) ?>">相關文章</a></li>
          <li class="pl-2 <?php if (is_page(24)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/contact")) ?>">聯絡我們</a></li>
        </ul>
        <span onclick="toggleMenu()" class="block md:hidden">
          <div class="nav-bar"></div>
          <div class="nav-bar"></div>
          <div class="nav-bar"></div>
        </span>
        <ul id="responsive" class="sidebar hidden w-1/2 shadow h-full text-center md:hidden bg-white fixed" style="z-index: 50; top: 0; right: 0">
          <li class="py-3 text-right pr-6">
            <span onclick="toggleMenu()" class="inline-block relative" style="width: 25px; height: 25px; margin-top: 15px;">
              <div class="nav-cross absolute"></div>
              <div class="nav-cross-2 absolute top-0"></div>
            </span>
          </li>
          <li class="py-2 text-gray-600"><a href="#">首頁</a></li>
          <li class="py-2"><a href="<?php echo esc_html(site_url("/company")) ?>">公司介紹</a></li>
          <li class="py-2"><span class="dropdownMobile flex justify-center">
              所有產品
              <?php get_template_part('template-parts/content', 'svg-plus'); ?></span>
            <ul class="hidden">
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="<?php echo esc_html(site_url("/category/product-window")) ?>">隔音氣密窗</a></li>
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="<?php echo esc_html(site_url("/category/product-door")) ?>">鋁合金門</a></li>
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="<?php echo esc_html(site_url("/category/product-woodshutter")) ?>">實木百葉窗</a></li>
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="<?php echo esc_html(site_url("/category/product-outdoor-shutter")) ?>">戶外升降百葉窗</a></li>
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="<?php echo esc_html(site_url("/category/product-heat-shield")) ?>">防曬隔熱產品</a></li>
              <li class="pt-4 text-left" style="padding-left: 7rem;"><a href="#">機能紗網</a></li>
            </ul>
          </li>
          <li class="py-2"><a href="<?php echo esc_html(site_url("/inquiry")) ?>">我要詢價</a></li>
          <li class="py-2"><a href="<?php echo esc_html(site_url("/all-articles")) ?>">相關文章</a></li>
          <li class="py-2"><a href="<?php echo esc_html(site_url("/contact")) ?>">聯絡我們</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    // Dropdown Menu
    var dropdownItems = document.getElementsByClassName("dropdownMobile");
    var dropdownArray = Array.prototype.slice.call(dropdownItems);
    dropdownArray.forEach(function(el) {
      el.addEventListener('click', function(event) {
        event.target.nextElementSibling.classList.toggle('hidden');
      })
    })
  </script>
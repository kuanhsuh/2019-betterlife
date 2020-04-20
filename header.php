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
</head>

<body <?php body_class(); ?>>
  <nav class="sticky top-0 bg-white shadow z-50 text-sm py-2 px-4 sm:px-0">
    <div class="container mx-auto md:px-0">
      <div class="flex flex-wrap justify-between items-center md:items-end">
        <a href="/">
          <img src="<?php echo get_theme_file_uri('/assets/logo.png') ?>" </a> <ul class="hidden md:flex md:items-end md:w-auto">
          <li class="mr-2 px-2 <?php if (is_page(2)) echo 'text-gray-600 font-medium'; ?>">
            <a href="<?php echo esc_html(site_url("/")) ?>">首頁</a>
          </li>
          <li class="mr-2 px-2 <?php if (is_page(6)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/company")) ?>">關於大岳</a></li>
          <li class="mr-2 px-2 <?php if (is_page(15)) echo 'text-gray-600 font-medium'; ?>"><a href="<?php echo esc_html(site_url("/products")) ?>">所有產品</a></li>
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
            <li class="py-2"><a href="<?php echo esc_html(site_url("/products")) ?>">所有產品</a></li>
            <li class="py-2"><a href="<?php echo esc_html(site_url("/inquiry")) ?>">我要詢價</a></li>
            <li class="py-2"><a href="<?php echo esc_html(site_url("/all-articles")) ?>">相關文章</a></li>
            <li class="py-2"><a href="<?php echo esc_html(site_url("/contact")) ?>">聯絡我們</a></li>
          </ul>
      </div>
    </div>
  </nav>
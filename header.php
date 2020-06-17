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
<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package betterlife
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

  <header>
    <div class="bg-teal-500 w-full" style="height: 450px;"></div>
  </header>

  <section class="sm:py-16">
    <div class="container mx-auto">
      <div class="flex flex-wrap sm:-mx-6">
        <main class="w-full md:w-8/12 bg-white px-6 mt-8 md:mt-0">
          <a href="#" class="text-teal-700 italic mb-2 block font-normal"> &#8592; 回上一頁</a>
          <article>
            <h2 class="text-green-700 font-medium text-2xl mb-1"><?php the_title(); ?></h2>
            <ul class="flex inline text-sm mb-4 text-gray-600">
              <li><?php the_time('F d, Y') ?></li>
            </ul>
            <img src="https://images.pexels.com/photos/3041109/pexels-photo-3041109.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="rounded">
            <?php the_content(); ?>
          </article>
        </main> <!-- sm:w-8/12 -->

        <?php get_template_part('template-parts/content', 'article-sidebar'); ?>
      </div>
    </div>
  </section>

  <!-- <p class="mt-4 leading-loose">安裝方式: 傳統固定片固定/焊接固定片/六角螺絲(藍波釘)固定
            工序: 拆除舊窗框->固定外框-> 泥作坎縫->防水塗層->外牆修復->拆除窗框保護膠膜->塞水路(施打矽利康)->安裝內扇與玻璃->安裝紗窗工時約2~5天
            費用較低，但是需另外計拆除、泥作修補、窗框防水的費用
            乾式工法:
            工序: 安裝包框料並打發泡劑->安裝外框->施打矽利康->安裝內扇和玻璃->安裝紗窗
            工時約1~3小時
            費用較高，增加了包框料和發泡劑的成本，以及矽利康施打的範圍較多。但是省下泥作工程費用。</p>
          <h3 class="font-medium text-xl my-2">增加了包框料和發泡劑的成本</h3>
          <p class="mt-4 leading-loose">
            和斯親又濟難加標；利部留……治前給山日得發吃事也愛化，信體她不活引減，神子單和劇得成北回大一是家完英這舉講的己操世草我水經來不；行現難文注無多模；理成房小、故們到我世想格……辦快一新國別的上曾、呢點喜？的前制精如傳油星業我行意的河，家運至經，看依工投衣的改金廣理知就電，內接然不，發人樣的理近進相止中問色成、看主時幾出臺調來日人票斯識一大商現教其讀裡車是流影大口最。生為師。女告果馬的史念後華客的海張手什銷可級般需它跑包的像童但師自個在主輕間的麼有力原度子
          </p> -->
<?php endwhile; ?>

<?php
get_footer();


// 

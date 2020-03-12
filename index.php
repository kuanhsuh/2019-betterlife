<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betterlife
 */

get_header();
?>
 <header>
        <div class="bg-teal-500 w-full" style="height: 450px;"></div>
    </header>

    <section class="sm:py-16">
        <div class="container mx-auto">
            <div class="flex flex-wrap sm:-mx-6">
                <main class="w-full md:w-8/12 bg-white mt-8 md:mt-0 px-6">
                    <article>
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute bg-teal-700 rounded-lg text-white font-medium p-2 "
                                style="top: 3%; left: 3%;">
                                10 月 21, 2019
                            </div>
                            <img src="https://images.pexels.com/photos/3041109/pexels-photo-3041109.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="" />
                        </div>
                        <div class="mt-3">
                            <h2 class="text-green-700 font-medium text-xl">
                                門窗舊換新時選擇乾式施工或濕式施工
                            </h2>
                            <p class="mt-2 text-sm ">
                                常常聽到很多消費者詢問, 家裡的門窗更新,
                                到底應該採取乾式施工還是濕式施工。我在這裡說明這兩種工法，並把選擇工法時，考量的因素解釋一下。安裝方式:
                                傳統固定片固定/焊接固定片/六角螺絲(藍波釘)固定...
                                <a href="#" class="text-green-500">繼續閱讀→</a>
                            </p>
                        </div>
                    </article>
                    <hr class="border-b-0 border-gray-300 my-8" />
                    <article>
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute bg-teal-700 rounded-lg text-white font-medium p-2 "
                                style="top: 3%; left: 3%;">
                                10 月 21, 2019
                            </div>
                            <img src="https://images.pexels.com/photos/3041109/pexels-photo-3041109.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="" />
                        </div>
                        <div class="mt-3">
                            <h2 class="text-green-700 font-medium text-xl">
                                門窗舊換新時選擇乾式施工或濕式施工
                            </h2>
                            <p class="mt-2 text-sm ">
                                常常聽到很多消費者詢問, 家裡的門窗更新,
                                到底應該採取乾式施工還是濕式施工。我在這裡說明這兩種工法，並把選擇工法時，考量的因素解釋一下。安裝方式:
                                傳統固定片固定/焊接固定片/六角螺絲(藍波釘)固定...
                                <a href="#" class="text-green-500">繼續閱讀→</a>
                            </p>
                        </div>
                    </article>
                </main>
                <!-- sm:w-8/12 -->
                <?php get_template_part('template-parts/content', 'article-sidebar'); ?>
            </div>
        </div>
    </section>
    <!-- Footer -->



<?php
get_footer();

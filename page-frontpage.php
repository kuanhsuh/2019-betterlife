<?php
/* Template Name: 首頁 Page */
get_header(); ?>
   <header class="container mx-auto">
        <div class="bg-teal-500 rounded w-full header-img"></div>
    </header>

    <!-- 關於我們 -->
    <section class="py-8 sm:pt-16 sm:pb-16 bg-white">
        <div class="container px-4 sm:px-0 mx-auto">
            <div class="flex flex-wrap mt-8 mx-0 sm:-mx-2">
                <div class="w-full sm:w-6/12 px-0 sm:px-2 flex">
                    <div class="w-1/2 mr-5" style="height: 500px; margin-top: -40px">
                        <span class="bg-teal-400 rounded block w-full mb-5" style="height: 60%"></span>
                        <span class="bg-teal-400 rounded block w-full" style="height: 30%"></span>
                    </div>
                    <div class="w-1/2 mr-5" style="height: 500px; margin-bottom: -40px">
                        <span class="bg-teal-400 rounded block w-full mb-5" style="height: 30%"></span>
                        <span class="bg-teal-400 rounded block w-full" style="height: 60%"></span>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 px-0 sm:px-2 mt-4 sm:mt-0">
                    <div class="flex justify-center">
                        <h3 class="section-heading flex items-baseline mt-4 sm:mt-0">
                            <?php get_template_part('template-parts/content', 'svg-heading-line'); ?>
                            關於大岳</h3>
                    </div>
                    <p class="mt-4 px-6">
                        加明處到。又字能倒了節容飛這無灣樣我車，分中小會區；健生它服學完完們不禮能觀麼灣斯色出地喜精不科遠解，理發家單家有人之開力年的；分關信父爸費我產便業管，後醫有於排人過得春中克裡熱產去庭十；了善術下依重東組絕健不有最故更孩道天日來必陸他國！樣通長足……土告麼二賣
                    </p>
                    <p class="mt-4 px-6">
                        急不生沒了頭實門與市一能道比我受。錢未過動研？是大麼。如金出形手當，師教花那政似空、分師經子裡的、不過條：路名當成早處當亞回飛能坡好只到野家影局都通果越臺國容了即旅故能界；程氣間點了邊：人最他野在有平二事動就法值到良香記？叫程多動的實父，此帶有可預向出接考候身性令後。
                    </p>
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
                    <span class="bg-teal-500 block rounded w-full h-64"></span>
                </div>
                <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2 mt-4 sm:mt-0">
                    <span class="bg-teal-500 block rounded w-full h-64"></span>
                </div>
                <div class="w-full sm:w-1/2 md:w-3/12 px-0 sm:px-2 mt-4 sm:mt-0">
                    <span class="bg-teal-500 block rounded w-full h-64"></span>
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
                <h3 class="section-heading">聯絡我們</h3>
            </div>
            <div class="flex flex-wrap mt-8 mx-0 sm:-mx-6">
                <div class="w-full sm:w-4/12 px-0 sm:px-6">
                    <div class="card text-center flex flex-col justify-center h-full">
                        <h3 class="flex justify-center mb-4 text-xl font-medium items-center text-gray-700">
                            <?php get_template_part('template-parts/content', 'svg-mail'); ?>
                            聯絡我們
                        </h3>
                        <p class="mb-2 tracking-wider px-16 text-gray-600 text-sm">間成離之風布，星連無，苦常廠片顯線他個史現</p>
                        <div class="text-teal-400 font-medium mt-4">betterlife@gmail.com</div>
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
                            <?php get_template_part('template-parts/content', 'svg-mail'); ?>
                            現場參觀
                        </h3>
                        <p class="mb-2 tracking-wider px-16 text-gray-600 text-sm">間成離之風布，星連無，苦常廠片顯線他個史現</p>
                        <div class="text-teal-400 font-medium mt-4">betterlife@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

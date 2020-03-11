<?php
/* Template Name: 詢價單 Page */
get_header(); ?>
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

            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label for="" class="label">名字</label>
                    <input type="text" class="input" />
                </div>
                <div class="w-full sm:w-1/2 flex flex-col px-4">
                    <label for="" class="label">Email</label>
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="flex flex-wrap mt-6 -mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label for="" class="label">聯絡電話</label>
                    <input type="text" class="input" />
                </div>
                <div class="w-full sm:w-1/2 flex flex-col px-4">
                    <label for="" class="label">Email</label>
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="flex flex-wrap mt-6 -mx-4">
                <div class="w-full flex flex-col px-4">
                    <label for="" class="label">其他備註</label>
                    <textarea class="input h-64"></textarea>
                </div>
            </div>
            <div class="flex justify-center mt-6">
                <button class="primary-btn">送出</button>
            </div>
        </div>
    </section>
    <!-- Footer -->
<?php
get_footer();

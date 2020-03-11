<?php
/* Template Name: 聯絡我們 Page */
get_header(); ?>

<header>
        <div class="bg-teal-500 w-full" style="height: 450px;"></div>
    </header>

    <section class="py-0 sm:py-10">
        <div class="max-w-4xl bg-gray-200 mx-auto p-8">
            <h2 class="section-heading text-center border-b border-teal-300 pb-4">聯絡我們</h2>
            <div class="mt-4 flex justify-center">
                <p class="text-center max-w-2xl text-sm">想進一步了解大岳的產品，還是你有任何問題與意見，歡迎你的來電，或使用信箱留言相關資訊<br />我們會儘快與你取得聯繫!
                </p>
            </div>

            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label for="" class="label">名字</label>
                    <input type="text" class="input">
                </div>
                <div class="w-full sm:w-1/2 flex flex-col px-4">
                    <label for="" class="label">Email</label>
                    <input type="text" class="input">
                </div>
            </div>
            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full sm:w-1/2 flex flex-col px-4 mb-4 sm:mb-0">
                    <label for="" class="label">聯絡電話</label>
                    <input type="text" class="input">
                </div>
                <div class="w-full sm:w-1/2 flex flex-col px-4">
                    <label for="" class="label">地址</label>
                    <input type="text" class="input">
                </div>
            </div>
            <div class="flex flex-wrap mt-6 sm:-mx-4">
                <div class="w-full flex flex-col px-4">
                    <label for="" class="label">訊息</label>
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

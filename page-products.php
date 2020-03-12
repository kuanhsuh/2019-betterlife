<?php
/* Template Name: 所有產品 Page */
get_header(); ?>

<header>
        <div class="bg-teal-500 w-full" style="height: 450px;"></div>
    </header>

    <section class="py-16 bg-gray-200">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <?php get_template_part('template-parts/content', 'company-sidebar'); ?>
                <div class="w-full md:w-8/12 bg-white shadow rounded py-6 px-10 mt-8 md:mt-0">
                    <h1 class="font-medium text-3xl mb-6">所有產品</h1>
                    <div class="flex flex-wrap mt-8 -mx-2">
                        <div class="w-full sm:w-1/2 px-2 mb-6">
                            <span class="bg-teal-500 block rounded w-full h-64"></span>
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-6">
                            <span class="bg-teal-500 block rounded w-full h-64"></span>
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-6">
                            <span class="bg-teal-500 block rounded w-full h-64"></span>
                        </div>
                        <div class="w-full sm:w-1/2 px-2 mb-6">
                            <span class="bg-teal-500 block rounded w-full h-64"></span>
                        </div>
                    </div>

                </div> <!-- sm:w-9/12 -->
            </div>
        </div>
    </section>

<?php
get_footer();

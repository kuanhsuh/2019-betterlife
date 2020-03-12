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
                            <svg class="h-10 w-10 mr-2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M483.738 0h-455.5C12.641.008-.004 12.66 0 28.262v455.5C.008 499.359 12.66 512.004 28.262 512h455.476c15.606.004 28.258-12.645 28.262-28.25V28.238C511.992 12.641 499.34-.004 483.738 0zm0 0"
                                    fill="#4267b2" />
                                <path
                                    d="M353.5 512V314h66.75l10-77.5H353.5v-49.36c0-22.386 6.215-37.64 38.316-37.64H432.5V80.371c-7.078-.941-31.363-3.047-59.621-3.047-59 0-99.379 36-99.379 102.14V236.5H207V314h66.5v198zm0 0"
                                    fill="#fff" />
                            </svg>

                            <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 455.731 455.731">
                                <path fill="#00c200" d="M0 0h455.731v455.731H0z" />
                                <path
                                    d="M393.272 219.605c.766-4.035 1.145-7.43 1.319-10.093.288-4.395-.04-10.92-.157-12.963-4.048-70.408-77.096-126.503-166.616-126.503-92.118 0-166.793 59.397-166.793 132.667 0 67.346 63.088 122.97 144.821 131.526 4.997.523 8.6 5.034 8.046 10.027l-3.48 31.322c-.79 7.11 6.562 12.283 13.005 9.173 69.054-33.326 110.346-67.611 135.004-97.314 4.487-5.405 19.118-25.904 22.101-31.288 6.332-11.43 10.697-23.704 12.75-36.554z"
                                    fill="#fff" />
                                <path
                                    d="M136.103 229.588v-55.882a8.532 8.532 0 00-17.064 0v64.414a8.532 8.532 0 008.532 8.532h34.127a8.532 8.532 0 000-17.064h-25.595zM188.731 246.652h-3.73a6.667 6.667 0 01-6.667-6.667v-68.144a6.667 6.667 0 016.667-6.667h3.73a6.667 6.667 0 016.667 6.667v68.144a6.667 6.667 0 01-6.667 6.667zM257.678 173.706v39.351s-34.073-44.443-34.593-45.027a8.493 8.493 0 00-6.69-2.85c-4.641.176-8.2 4.232-8.2 8.876v64.063a8.532 8.532 0 0017.064 0v-39.112s34.591 44.83 35.099 45.312a8.481 8.481 0 005.773 2.332c4.738.043 8.611-4.148 8.611-8.886v-64.059a8.533 8.533 0 00-17.064 0zM338.729 173.706a8.532 8.532 0 00-8.532-8.532H296.07a8.532 8.532 0 00-8.532 8.532v64.414a8.532 8.532 0 008.532 8.532h34.127a8.532 8.532 0 000-17.064h-25.595v-15.144h25.595a8.532 8.532 0 000-17.064h-25.595v-15.144h25.595a8.53 8.53 0 008.532-8.53z"
                                    fill="#00c500" />
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="w-full mt-6 sm:mt-0 sm:w-6/12 px-0 sm:px-6">
                    <h3 class="pb-4 text-xl font-medium border-b border-teal-300">
                        聯絡我們
                    </h3>
                    <ul class="pt-4">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="footer-social-icon">
                                <path
                                    d="M10 20S3 10.87 3 7a7 7 0 1114 0c0 3.87-7 13-7 13zm0-11a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                            高雄市左營區文學路459號
                        </li>
                        <li class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="footer-social-icon" viewBox="0 0 20 20">
                                <path
                                    d="M20 18.35V19a1 1 0 01-1 1h-2A17 17 0 010 3V1a1 1 0 011-1h4a1 1 0 011 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 01.99 1v3.35z" />
                            </svg>

                            07-666-0000
                        </li>
                        <li class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="footer-social-icon"
                                viewBox="0 0 23.764 19.011">
                                <g id="icon-mail" transform="translate(-2 -4)">
                                    <path id="Path_6" data-name="Path 6"
                                        d="M25.764,8.62V19.765a2.376,2.376,0,0,1-2.376,2.376H4.376A2.376,2.376,0,0,1,2,19.765V8.62l11.347,5.668a1.188,1.188,0,0,0,1.069,0Z"
                                        transform="translate(0 0.869)" fill="#54d1db" />
                                    <path id="Path_7" data-name="Path 7"
                                        d="M13.882,12.769,2,6.828V6.376A2.383,2.383,0,0,1,4.376,4H23.388a2.376,2.376,0,0,1,2.376,2.376v.452Z"
                                        fill="#2cb1bc" />
                                </g>
                            </svg>

                            betterlife@gmail.com
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

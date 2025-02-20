<?php
function render_portfolio()
{
    ?>
    <section id="portfolio" class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold">Projects I've Built</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="bg-white shadow-md rounded-lg p-6">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/felipe-betini-website.png"
                        alt="Felipe Betini Website" class="w-full h-48 object-cover  mb-4" />

                    <h3 class="text-xl font-bold">Felipe Betini Website</h3>
                    <p class="text-gray-600">My portfolio!</p>
                    <a href="https://www.felipebetini.com" class="text-blue-500 font-bold hover:underline" target="_blank">
                        View My Work
                    </a>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/convertlite.png"
                        alt="Felipe Betini Website" class="w-full h-48  mb-4" />
                    <h3 class="text-xl font-bold">Convert Lite</h3>
                    <p class="text-gray-600">My adsense website!</p>
                    <a href="https://www.convertlite.com" class="text-blue-500 font-bold hover:underline" target="_blank">
                        View My Work
                    </a>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/ezVue.png" alt="Felipe Betini Website"
                        class=" h-48  mb-4" />

                    <h3 class="text-xl font-bold">Ex vue</h3>
                    <p class="text-gray-600">My learnings!</p>
                    <a href="https://www.ez-vue.com" class="text-blue-500 font-bold hover:underline" target="_blank">
                        View My Work
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
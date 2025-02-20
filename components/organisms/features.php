<?php
function render_features()
{
    ?>
    <section class="py-32 bg-gray-200">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold">What can we do?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <?php
                render_feature_card("Modern Tech Stack", "Using Tailwind, and TypeScript for clean, scalable code.", "🚀");
                render_feature_card("Custom WordPress", "Building optimized, modular WP themes from scratch.", "🔧");
                render_feature_card("User Experience", "Focusing on performance and usability for the best user experience.", "🎨");
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>
<?php
function render_card($title, $content)
{
    ?>
    <div class="p-6 border rounded-lg shadow-md">
        <h2 class="text-xl font-bold"><?php echo htmlspecialchars($title); ?></h2>
        <p class="text-gray-600"><?php echo htmlspecialchars($content); ?></p>
        <?php render_button('Learn More'); ?>
    </div>
    <?php
}
?>
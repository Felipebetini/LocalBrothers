<?php
function render_feature_card($title, $description, $icon) {
?>
<div class="flex flex-col items-center p-6 bg-white shadow-md rounded-lg text-center">
    <div class="text-4xl mb-4"><?php echo $icon; ?></div>
    <h3 class="text-xl font-bold"><?php echo htmlspecialchars($title); ?></h3>
    <p class="text-gray-600"><?php echo htmlspecialchars($description); ?></p>
</div>
<?php
}
?>

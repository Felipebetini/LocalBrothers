<?php
function render_button($text, $type = 'button')
{
    echo '<button type="<?php echo esc_attr($type); ?>"  class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">'
        . htmlspecialchars($text) .

        '</button>';
}
?>
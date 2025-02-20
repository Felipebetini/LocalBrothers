<?php
function render_contact()
{
    ?>
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold">Get In Touch</h2>
            <form id="contactForm" class="mt-8 max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                <input id="name" type="text" placeholder="Your Name" class="w-full p-3 border rounded mb-4">
                <input id="email" type="email" placeholder="Your Email" class="w-full p-3 border rounded mb-4">
                <textarea id="msg" placeholder="Your Message" class="w-full p-3 border rounded mb-4"></textarea>

                <?php render_button('Send Message', 'submit'); ?>
            </form>
        </div>
    </section>
    <?php
}
?>
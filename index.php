<?php
get_header();
require_once get_template_directory() . '/components/atoms/button.php';
require_once get_template_directory() . '/components/molecules/feature-card.php';
require_once get_template_directory() . '/components/organisms/hero.php';
require_once get_template_directory() . '/components/organisms/features.php';
require_once get_template_directory() . '/components/organisms/portfolio.php';
require_once get_template_directory() . '/components/organisms/contact.php';
?>
<main>
    <?php
    render_hero();
    render_features();
    render_portfolio();
    render_contact();
    ?>
</main>
<?php get_footer(); ?>

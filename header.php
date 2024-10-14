<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Basic seo -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="project, services, blog, contact">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php bloginfo('name'); ?>",
        'url': '<?php echo esc_url( home_url() ); ?>',
        <img src="<?php echo esc_url( get_theme_mod( 'custom_logo_url', 'https://default.logo.url' ) ); ?>" alt="Site Logo">
    }
    </script>


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="logo">
        <a href='<?php echo esc_url( home_url() ); ?>'>
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                } ?>
            </a>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'nav-menu',
            )); ?>
        </nav>
    </div>
</header>

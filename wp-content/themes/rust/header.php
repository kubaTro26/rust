<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="Author" content="Weblider">
	<link rel="stylesheet" href="assets/js/animation.js">
    <link rel='stylesheet' id='fonts-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C700&#038;subset=latin-ext&#038;ver=5.9.3' type='text/css' media='all' />
    <link rel='stylesheet' href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if (get_header_image()) : ?>
        <div class="site-header container-fluid gx-0">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="100%" height="100%" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
        </div>
    <?php endif; ?>

    <nav class="navbar navbar-dark navbar-expand-xl text-secondary navbar_header">
        <div class="container-fluid">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'nav navbar-nav ms-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => 'WP_Bootstrap_Navwalker',
                ));
                ?>
            </div>
        </div>
    </nav>

    <script>
        jQuery(document).ready(function($) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                var nav_item = $(".navbar_header");

                if (scroll) {
                    nav_item.addClass("fixed");
                } else {
                    nav_item.removeClass("fixed");
                }
            });
        });
    </script>
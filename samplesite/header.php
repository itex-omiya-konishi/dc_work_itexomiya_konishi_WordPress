<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php if (is_home() || is_front_page()) : ?>
        <title><?php bloginfo('name'); ?></title>
    <?php else : ?>
        <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php endif; ?>

    <!-- CSS 読み込み -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- JS 読み込み -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    <!-- スライドショー設定 -->
    <script type="text/javascript">
        jQuery(function($) {
            $('#slide').slideshow({
                autoSlide: true,
                effect: 'fade',
                type: 'repeat',
                interval: 2000,
                duration: 500,
                imgHoverStop: true,
                navHoverStop: true
            });
        });
    </script>

    <!-- WordPress 必須 -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
                <!-- ★ 修正済み：/index → / -->
                <a href="<?php echo home_url(); ?>/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" />
                </a>
            </h1>
            <div id="menu">
                <ul>
                    <li class="home">
                        <!-- ★ 修正済み：/index → / -->
                        <a href="<?php echo home_url(); ?>/">TOP</a>
                    </li>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'place_global',
                        'container' => '',
                        'menu_class' => '',
                        'items_wrap' => '%3$s',
                    )); ?>
                </ul>
            </div>
        </div>
    </header>

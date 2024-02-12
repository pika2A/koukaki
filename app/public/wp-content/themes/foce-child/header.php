<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="un site d'animation studio">
    <meta name="theme-color" content="#f2d8ab" />
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">

            <nav id="site-navigation" class="main-navigation">
                <div>
                    <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>

                    <button class="menu-toggle" aria-label="bouton pour afficher le menu" aria-controls="primary-menu" aria-expanded="false">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </div>

                <div class="menu">

                    <img class="orchid" src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?> " alt="orchide mauve qui tourne">
                    <img class="Sunflower" src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="tournesol qui tourne">
                    <img class="flower" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " alt="ortancia qui tourne">
                    <img class="random_flower" src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?> " alt="orchide mauve qui tourne">
                    <img class="hibiscus" src="<?php echo get_template_directory_uri() . '/assets/images/Hibiscus.png'; ?> " alt="hibiscus qui tourne">
                    <ul>
                        <li><img src="<?php echo get_theme_file_uri() . '/assets/images/Image logo en paralax.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></li>
                        <li class="menu-li"><a href="#histoire">Histoire</a></li>
                        <li class="menu-li"><a href="#characters">Personnages</a></li>
                        <li class="menu-li"><a href="#place">Lieu</a></li>
                        <li class="menu-li"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p><a href="#footer">studio kookaki </a></p>
                    <img class="float cat_purple" src="<?php echo get_theme_file_uri() . '/assets/images/cat_purple.png'; ?>" alt="Tête de chat mauve">
                    <img class="float cat_orang" src="<?php echo get_theme_file_uri() . '/assets/images/cat_orang.png'; ?>" alt="Tête de chat orange">
                    <img class="float cat_black" src="<?php echo get_theme_file_uri() . '/assets/images/cat_black.png'; ?>" alt="Tête de chat noir">
                </div>
            </nav><!-- #site-navigation -->
        </header>

        <!-- #masthead -->
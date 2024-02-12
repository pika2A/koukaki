<?php
// Ajoute une action pour charger les styles de mon thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//pour charger les styles de mon thème.
function theme_enqueue_styles()
{
    // Charge le fichier style.css du thème parent.
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Charge le fichier style.css du thème enfant.
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/sass/style.css', array());

    // charger le CSS de SwiperJS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}

// Ajoute une action pour charger les scripts de mon thème
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Fonction pour charger les scripts de mon thème.
function theme_enqueue_scripts()
{
    // Charge le fichier script SwiperJS depuis le CDN
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);

    // Charge le fichier skrollr.min.js de mon thème.
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), false, true);

    // Charge le fichier script.js de mon thème et indique qu'il dépend de skrollr et swiper.
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('skrollr', 'swiper'), '1.0.0', true);
}


// Vérifie si le thème actif est un thème enfant.
if (get_stylesheet() !== get_template()) {
    // Ajoute un filtre pour mettre à jour les options de personnalisation du thème parent lorsque les options du thème enfant sont mises à jour.
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // Empêche la mise à jour des options du thème enfant.
    }, 10, 2);

    // Ajoute un filtre pour obtenir les options de personnalisation du thème parent lorsque les options du thème enfant sont demandées.
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video autoplay loop muted class="banner-video">
            <source src="<?php echo get_theme_file_uri() . '/assets/videos/video-banner.mp4'; ?>" type="video/mp4">
        </video>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" data-0="top: 17vw;" data-400="top: -10vw;">
    </section>
    <section id=" #story" class="story">
        <h2 id="histoire">L'histoire</h2>
        <article id="story" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php
        //section personnages deplacés dans un template part pour integration de l'animation de carrousel avec le script swiper.js
        get_template_part('template-part/personnages');
        ?>

        <article id="place">
            <div class="clouds">
                <!-- integration des nuages pour animation-->
                <img class="big-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage" data-bottom-top="transform:translateX(0vw)" data-top-bottom="transform:translateX(-15.63vw)">
                <img class="little-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage" data-bottom-top="transform:translateX(0vw)" data-top-bottom="transform:translateX(-15.63vw)">
            </div>
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>


    <section id="studio">
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php
    // integration de la section oscar mis dans un template part
    get_template_part('template-part/oscar');
    ?>

</main><!-- #main -->

<?php
get_footer();

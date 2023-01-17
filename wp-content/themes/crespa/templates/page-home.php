<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/css" href="../wp-content/themes/crespa/assets/images/logo.svg" />
    <?php
    // template Name: Accueil
    wp_head(); ?>
    <title>Cre'spa</title>
</head>

<body>
    <div class="welcome">
        <img src="<?php $image = get_field('welcome_img'); echo($image['sizes']['medium_large']) ?>" alt="<?php echo ($image['alt']); ?>" />
    </div>
    <div class="presentation">

        <div class="welcome_logo">
            <img src="../wp-content/themes/crespa/assets/images/logo_white.svg" alt="logo">
        </div>
        <div>
            <?php the_field('subtitle') ?>
        </div>
        <div>
            <a href="#nav"><img class="souris" src="../wp-content/themes/crespa/assets/images/souris.svg" alt="souris incitation a cliquer"></a>
        </div>

    </div>
    <!-- header fixe -->
    <header>
        <nav id="nav">
            <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox" />
            <label class="m-menu__toggle" for="menu">
                <div class="header">
                    <svg width="40" height="33" viewBox="0 0 40 33" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <rect width="40" height="5" fill="#F40044" />
                        <rect y="14" width="40" height="5" fill="#F40044" />
                        <rect y="28" width="40" height="5" fill="#F40044" />
                    </svg>
                    <img src="../wp-content/themes/crespa/assets/images/logo_complet.svg" alt="logo" class="logo" />
                    <button onclick="window.location.href = '../acceuil/contact/'" ; class="contact">Nous contactez</button>
                </div>
            </label>
            <label class="m-menu__overlay" for="menu"></label>

            <div class="m-menu">
                <div class="m-menu__header">
                    <label class="m-menu__toggl" for="menu">
                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40.2514" height="5.03142" transform="matrix(0.707174 -0.707039 0.707174 0.707039 0.541016 29.2573)" fill="#F40044" />
                            <rect width="40.2514" height="5.03142" transform="matrix(0.707174 0.707039 -0.707174 0.707039 4.09863 0.204224)" fill="#F40044" />
                        </svg>


                    </label>
                </div>
                <!-- menu burger -->
                <ul>

                    <li><a href="../artistes">Les artistes</a></li>
                    <li><a href="../oeuvres">La galerie</a></li>
                    <li><a href="../ateliers">Les ateliers</a></li>
                    <li><a href="../formations">Les formations</a></li>
                    <li><a href="../entreprise">Les services & modalités d'achat</a></li>
                    <li><a href="../contact">Nous contacter</a></li>
                    <img src="../wp-content/themes/crespa/assets/images/logo_simple_white.svg" alt="" class="logo_nav" />
                </ul>
            </div>

        </nav>
    </header>
    <!-- deuxieme page présentation + réseaux  -->
    <div class="asso">
        <article>
            <p> <?php the_field('intro'); ?></p>
        </article>
        <div>
            <!-- réseaux sociaux  -->
            <div class="reseaux">
                <a href="">
                    <img src="../wp-content/themes/crespa/assets/images/red_insta.svg" alt="instagram" />
                </a>
                <a href="">
                    <img src="../wp-content/themes/crespa/assets/images/red_linkedin.svg" alt="linkedin" />
                </a>
                <a href="">
                    <img src="../wp-content/themes/crespa/assets/images/red_facebook.svg" alt="facebook" />
                </a>
            </div>
            <div>
                <a href="#actu">
                    <img src="../wp-content/themes/crespa/assets/images/arrow_bottom.svg" alt="flèche du bas" />
                </a>
            </div>
        </div>
    </div>
    <h2 id="actu">Actualités</h2>

<!-- ancre -->
    <div class="ancre">
        <a href="#">
            <img src="../wp-content/themes/crespa/assets/images/ancre.svg" alt="">
        </a>
    </div>
<!-- slider Actualités -->

    <div class="slider">
        <!-- conteneur ou est affiche les infos -->
        <div class="wrapper">
            <div id="un">article_1</article>
            </div>
            <div id="deux">article_2</div>
            <div id="trois">article_3</div>
            <div id="quatre">article_4</div>
        </div>
<!-- partie ou tu selection les articles -->
        <nav class="enter">
            <a href="#un" class="border">
                <span class="thumbs">
                    <div class="articles">
                        <article class="date">
                            date
                        </article>
                        <article class="nom_article">
                            titre de l'article
                        </article>
                    </div>
                </span>
            </a>
            <a href="#deux" class="border">
                <span class="thumbs">
                    <div class="articles">
                        <article class="date">
                            date
                        </article>
                        <article class="nom_article">
                            titre de l'article
                        </article>
                    </div>
                </span>
            </a>
            <a href="#trois" class="border">
                <span class="thumbs">
                    <div class="articles">
                        <article class="date">
                            date
                        </article>
                        <article class="nom_article">
                            titre de l'article
                        </article>
                    </div>
                </span>
            </a>
            <a href="#quatre" class="border">
                <span class="thumbs">
                    <div class="articles">
                        <article class="date">
                            date
                        </article>
                        <article class="nom_article">
                            titre de l'article
                        </article>
                    </div>
                </span>
            </a>
        </nav>

    </div>
    <!-- fleche bleu entre les parties -->
    <div class="suivant">
        <a href="#actu">
            <img src="../wp-content/themes/crespa/assets/images/arrow_bottom.svg" alt="flèche du bas" />
        </a>
    </div>
    <!-- boutton voir plus -->
    <div> 
        <button onclick="window.location.href = '../acceuil/contact/'" ; class="plus">voir plus</button>
    </div>
    <h2 id="artistes">Artistes</h2>
    <!-- les artistes -->
    <section class="artistes">
        <!-- tous les artistes -->
        


        <?php

// The Query
$args = array(
    'post_type' => 'artiste',
    'posts_per_page' => -1
);
$artits = new WP_Query($args);

?>

<!-- The Loop -->
<? if ($artits->have_posts()) : ?>
    <div class="all">
        <? while ($artits->have_posts()) : ?>
            <?php $artits->the_post(); 
            $image = get_field('img_artiste');?>
            <div class="one">
            <img class="background_image" src="../wp-content/themes/crespa/assets/images/background_artiste<?php $min=1;$max=3; echo rand($min,$max);?>.svg" alt="" >
                <div class="photo_artiste" style="background-image: url(<?php echo $image['url'] ?>);background-repeat: no-repeat;background-size: cover;">
                </div>
                <div class="name">
                    <?php the_field('name') ?>
                </div>
                <div class="courte_description">
                    <?php the_field('text') ?>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>
            <!-- boutton voir plus  -->
            <button onclick="window.location.href = '../accueil/contact/'" ; class="plus">voir plus</button>
    </section>
    <!-- boutton entre les parties -->
    <div class="suivant">
        <a href="#actu">
            <img src="../wp-content/themes/crespa/assets/images/arrow_bottom.svg" alt="flèche du bas" />
        </a>
    </div>
    <h2 id="galerie">Galerie</h2>
    <section class="oeuvres">
        <!-- tous les articles  -->
        <div class="all_oeuvre">
            <!-- chaque article -->
            <div class="one_oeuvre">
                <div>
                    image
                </div>
                <div>
                    name
                </div>
                <div>
                    texte
                </div>
            </div>
            <div class="one_oeuvre">
                <div>
                    image
                </div>
                <div>
                    name
                </div>
                <div>
                    texte
                </div>
            </div>
            <!-- boutton plus -->
            <button onclick="window.location.href = '../acceuil/contact/'" ; class="plus_oeuvres">voir plus</button>
    </section>
    <div class="suivant">
        <!-- boutton entre les parties -->
        <a href="#actu">
            <img src="../wp-content/themes/crespa/assets/images/arrow_bottom.svg" alt="flèche du bas" />
        </a>
    </div>



    <h2>L'Histoire de delphine</h2>
    <section>
        <div class="story">
            <div>
                <?php the_field('story'); ?>
            </div>
            <div>
                <button onclick="window.location.href = '../contact/'" ; class="plus">Voir plus</button>
            </div>
        </div>
        <div class="video">
            <?php
            echo do_shortcode('[smartslider3 slider="3"]');
            ?>
        </div>
    </section>
    <h2>L'Histoire de delphine</h2>
    <section class="atelier">
        <div class="video">
            <?php
            echo do_shortcode('[smartslider3 slider="4"]');
            ?>
        </div>
        <div class="story">
            <div>
                <?php the_field('story'); ?>
            </div>
            <div>
                <button onclick="window.location.href = '../contact/'" ; class="plus">Voir plus</button>
            </div>
        </div>

    </section>
    <h2>L'Histoire de delphine</h2>
    <section class="formation">
        <div class="story">
            <div>
                <?php the_field('story'); ?>
            </div>
            <div>
                <button onclick="window.location.href = '../contact/'" ; class="plus">Voir plus</button>
            </div>
        </div>
        <div class="video">
            <iframe <?php the_field('lien'); ?>></iframe>
        </div>
    </section>
    <h2>L'Histoire de delphine</h2>
    <section class="entreprise">
        <div class="video">
            <iframe <?php the_field('lien'); ?>></iframe>
        </div>
        <div class="story">
            <div>
                <?php the_field('story'); ?>
            </div>
            <div>
                <button onclick="window.location.href = '../contact/'" ; class="plus">Voir plus</button>
            </div>
        </div>

    </section>
    <section class="mail">

        <form action="" method="post" class="form">

            <div>
                <label for="firstname">Nom</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="name">prénom</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">e-mail</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg">Message</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div>
                <button onclick="window.location.href = '../contact/'" ; class="send">envoyer</button>
            </div>
            <article>
                En envoyant je sais pas quoi
            </article>
        </form>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.1392009935175!2d4.895699815420589!3d45.527404279101745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4df2247e88dcf%3A0xa78db9478c3d63ba!2s93%20Rue%20Lafayette%2C%2038200%20Vienne%2C%20France!5e0!3m2!1sfr!2sus!4v1673705030709!5m2!1sfr!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
            <div>
                <div>
                    <img src="" alt="adresse de la galerie">
                    <p></p>
                </div>
                <div>
                    <img src="" alt="numéro de téléphone">
                    <p></p>
                </div>
                <div>
                    <img src="" alt="horaires">
                    <p></p>
                </div>
            </div>
        </div>

    </section>

    <?php
    //footer
    get_footer();
    ?>
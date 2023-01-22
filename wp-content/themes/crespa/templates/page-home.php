<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/css" href="<?php echo (get_template_directory_uri()); ?>/assets/images/logo_fav.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php
    // template Name: Accueil
    wp_head(); ?>
    <title>Cre'spa</title>
</head>

<body>

    <div class="welcome"> <img src="<?php $image = get_field('background_img');
                                    echo ($image['sizes']['medium_large']) ?>" />
        <div class="filtre_noire"></div>

    </div>
    <div class="presentation">

        <div class="welcome_logo">
            <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/logo_white.svg" alt="logo">
        </div>
        <div>
            <?php the_field('slogan') ?>
        </div>
        <div class="animation">
            <a class="onclick" onclick=" $(window).scrollTop(700);">
                <div><img class="souris" src="<?php echo (get_template_directory_uri()); ?>/assets/images/fleche_accueil.svg" alt="souris incitation a cliquer"></div>

            </a>
        </div>

    </div>
    <!-- header fixe -->
    <header>
        <nav>
            <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox" />
            <label class="m-menu__toggle" for="menu">

                <div class="header">
                    <svg width="40" height="33" viewBox="0 0 40 33" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <rect width="40" height="5" fill="#F40044" />
                        <rect y="14" width="40" height="5" fill="#F40044" />
                        <rect y="28" width="40" height="5" fill="#F40044" />
                    </svg>
                </div>
            </label>



            <div class="header_2">
                <a href="https://creespa.fr" class="logo_header">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/logo.svg" alt="logo" />
                </a>
                <div class="contactez-nous">
                    <a href="/wordpress_crespa/contact/" class="button">Contactez-nous</a>
                </div>
            </div>



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
                <?php wp_nav_menu(array('menu' => 'menu_princ')); ?>
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/logo_simple_white.svg" alt="" class="logo_nav" />
                <!-- <ul>
          <li><a href="../acceuil/artistes/">Les artistes</a></li>
          <li><a href="../accueil/oeuvres/">La galerie</a></li>
          <li><a href="../acceuil/ateliers/">Les ateliers</a></li>
          <li><a href="../acceuil/formations/">Les formations</a></li>
          <li><a href="../acceuil/entreprise/">Les services & modalités d'achat</a></li>
          <li><a href="../acceuil/contact/">Nous contacter</a></li>
          <li><a href="../acceuil/">Nous contacter</a></li>
          <img src="/assets/images/logo_simple_white.svg" alt="" class="logo_nav" />
        </ul> -->
            </div>
        </nav>
    </header>
    <!-- deuxieme page présentation + réseaux  -->
    <div>
        <img class="point_rouge" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_rouge.svg" alt="" />
        <img class="point_jaune" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_jaune.svg" alt="" />
        <img class="point_bleu" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_bleu.svg" alt="" />
        <img class="tache_jaune" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_jaune.svg" alt="" />
        <img class="tache_rouge" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_rouge.svg" alt="" />
        <img class="tache_bleu" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_bleu.svg" alt="" />
        <img class="tache_rouge_jaune" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_rouge_jaune.svg" alt="" />
        <img class="point_rouge-2" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_rouge.svg" alt="" />
        <img class="point_jaune-2" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_jaune.svg" alt="" />
        <img class="tache_rouge-2" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_rouge.svg" alt="" />
        <img class="point_bleu-2" src="<?php echo (get_template_directory_uri()); ?>/assets/images/point_bleu.svg" alt="" />
        <img class="tache_jaune-2" src="<?php echo (get_template_directory_uri()); ?>/assets/images/tache_jaune.svg" alt="" />
    </div>
    <div class="asso">
        <article>
            <p> <?php the_field('storytelling'); ?></p>
        </article>
        <div>
            <!-- réseaux sociaux  -->
            <div class="reseaux">
                <a href="">

                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/red_insta.svg" alt="instagram" />
                </a>
                <a href="">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/red_linkedin.svg" alt="linkedin" />
                </a>
                <a href="">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/red_facebook.svg" alt="facebook" />
                </a>
            </div>
            <div class="suivant">
                <a class="onclick" onclick="
      $(window).scrollTop(1310);">

                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
                </a>
            </div>
        </div>
    </div>
    <h2 id="actu">Actualités</h2>

    <!-- ancre -->

    <!-- slider Actualités -->
    <section class="carrousel">
        <div class="slider">
            <!-- conteneur ou est affiche les infos -->
            <div class="wrapper">

                <div class=" margin item min-with-400 slide sliderDate-1 un"><?php the_field('article_1') ?></div>
                <div class="button_accueil_actu  margin item min-with-400 slide sliderDate-1 un">
                    <a href="/<?php the_field("href_1") ?>" class="button">Voir</a>
                </div>
                <div class=" margin item min-with-400 hide-on-load slide sliderDate-2 deux"><?php the_field('article_2') ?></div>
                <div class="button_accueil_actu  margin item min-with-400 hide-on-load slide sliderDate-2 un">
                    <a href="/<?php the_field("href_2") ?>" class="button">Voir</a>
                </div>
                <div class=" margin item min-with-400 hide-on-load slide sliderDate-3 trois"><?php the_field('article_3') ?></div>
                <div class="button_accueil_actu  margin item min-with-400 hide-on-load slide sliderDate-3 un">
                    <a href="/<?php the_field("href_3") ?>" class="button">Voir</a>
                </div>
                <div class=" margin item min-with-400 hide-on-load slide sliderDate-4 quatre"><?php the_field('article_4') ?></div>
                <div class="button_accueil_actu  margin item min-with-400 hide-on-load slide sliderDate-4 un">
                    <a href="/<?php the_field("href_4") ?>" class="button">Voir</a>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
            <script>
                jQuery(document).ready(function() {
                    jQuery('.hide-on-load').hide();

                    jQuery('.sliderDate').on('click', function() {
                        $(".enter span").even().removeClass("show");
                        $(".show").removeClass("show");
                        jQuery('.slide').hide();
                        var linkimg = jQuery(this).data('date');
                        console.log(linkimg);

                        jQuery(`.sliderDate-${linkimg}`).show();
                        jQuery(`.active-${linkimg}`).addClass("show");
                    });
                });
            </script>
            <!-- partie ou tu selection les articles -->
            <nav class="enter">
                <span class="sliderDate border show active-1" data-date="1">
                    <span class="thumbs">
                        <span class="articles">
                            <article class="date">
                                <?php the_field('date_1') ?>
                            </article>
                            <article class="nom_article">
                                <?php the_field('title_1') ?>
                            </article>
                        </span>
                    </span>
                </span>
                <span class="sliderDate border active-2" data-date="2">
                    <span class="thumbs">
                        <div class="articles">
                            <article class="date">
                                <?php the_field('date_2') ?>
                            </article>
                            <article class="nom_article">
                                <?php the_field('title_2') ?>
                            </article>
                        </div>
                    </span>
                </span>
                <span class="sliderDate border active-3" data-date="3">
                    <span class="thumbs">
                        <div class="articles">
                            <article class="date">
                                <?php the_field('date_3') ?>
                            </article>
                            <article class="nom_article">
                                <?php the_field('title_3') ?>
                            </article>
                        </div>
                    </span>
                </span>
                <span class="sliderDate border active-4" data-date="4">
                    <span class="thumbs">
                        <div class="articles">
                            <article class="date">
                                <?php the_field('date_4') ?>
                            </article>
                            <article class="nom_article">
                                <?php the_field('title_4') ?>
                            </article>
                        </div>
                    </span>
                </span>
            </nav>
        </div>

        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(1923);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>
    </section>

    <!-- fleche bleu entre les parties -->

    <!-- boutton voir plus -->

    <h2 id="artistes">Artistes</h2>
    <!-- les artistes -->
    <section class="artistes">
        <!-- tous les artistes -->
        <div class="contenu"> <?php

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
                        $image = get_field('img_artiste'); ?>
                        <div class="one_page_accueil">
                            <img class="background_image" src="<?php echo (get_template_directory_uri()); ?>/assets/images/background_artiste<?php $min = 1;
                                                                                                                                                $max = 3;
                                                                                                                                                echo rand($min, $max); ?>.svg" alt="">
                            <div class="photo_artiste" style="background-image: url(<?php echo $image['url'] ?>);background-repeat: no-repeat;background-size: cover;">
                            </div>
                            <div class="name">
                                <?php echo (get_the_title()); ?>
                            </div>
                            <div class="courte_description">
                                <?php the_field('small_text') ?>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            <?php else : ?>
                <p>Aucune oeuvre trouvée.</p>
            <?php endif ?>
            <!-- boutton voir plus  -->
        </div>
        <div class="button_accueil_artistes">
            <a href="/artiste/" class="button">Voir plus</a>
        </div>
        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(2535);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>

    </section>
    <!-- boutton entre les parties -->

    <h2 id="galerie">Galerie</h2>
    <section class="oeuvres">
        <!-- tous les articles  -->

        <?php
        // The Query
        $args = array(
            'post_type' => 'oeuvre',
            'posts_per_page' => 3
        );
        $art = new WP_Query($args);
        ?>

        <?php if ($art->have_posts()) : ?>
            <div class="all_oeuvre_page_accueil">
                <?php while ($art->have_posts()) : ?>
                    <?php $art->the_post();
                    $image = get_field('img');
                    // var_dump($art)
                    ?>
                    <div class="one_oeuvre_page_accueil ">
                        <div class="image" style="background-image:url(<?php echo $image['url'] ?>);background-size:contain;
background-repeat: no-repeat;background-position: 50% 100%;">
                        </div>
                        <div class="after">
                            <div class="titre_oeuvre">
                                <?php echo (get_the_title()); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Aucune oeuvre trouvée.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="button_accueil_oeuvre">
            <a href="/oeuvre/" class="button">Voir plus</a>
        </div>
        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(3150);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>
    </section>




    <h2><?php the_field('title_atelier') ?></h2>
    <section class="ateliers">
        <div class="contenu">
            <div class="story">
                <div>
                    <?php echo (get_field('text_atelier')); ?>
                </div>
                <div class="button_accueil_atelier">
                    <a href="/atelier/" class="button">Voir plus</a>
                </div>
            </div>
            <div class="video">
                <?php
                echo do_shortcode('[smartslider3 slider="3"]');
                ?>
            </div>
        </div>
        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(3760);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>
    </section>
    <h2><?php the_field('title_formation') ?></h2>
    <section class="formations">
        <div class="contenu">
            <div class="video">
                <?php
                echo do_shortcode('[smartslider3 slider="4"]');
                ?>
            </div>
            <div class="story">
                <div>
                    <?php the_field('text_formation'); ?>
                </div>
                <div class="button_accueil_formation">
                    <a href="/formation/" class="button">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(4365);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>
    </section>
    <h2><?php the_field('title_entreprise'); ?></h2>
    <section class="entreprise">
        <div class="partie_entreprise">
            <div class="image_page_accueil" style="background-image: url(<?php $entreprise = get_field('img_entreprise');
                                                                            echo $entreprise['url'] ?>);background-repeat: no-repeat;background-size:cover;">
                <div class="filtre_noir_page_accueil">
                    <div class="text_page_accueil_entreprise">
                        <?php the_field('subtitle_entreprise'); ?>
                    </div>
                </div>
            </div>
            <div class="story">
                <article>
                    <?php the_field('text_entreprise'); ?>
                </article>
                <div class="button_accueil_entreprise">
                    <a href="/services/" class="button">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(5025);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>
        </div>
    </section>
    <h2><?php the_field('title_histoire') ?></h2>
    <section class="histoire">
        <div class="contenu_histoire">
            <div class="video">

                <iframe <?php the_field('yt_video'); ?>></iframe>

            </div>
            <div class="story">
                <div>
                    <?php the_field('text_histoire'); ?>
                </div>

            </div>

        </div>
        <div class="suivant">
            <a class="onclick" onclick="
      $(window).scrollTop(5600);">

                <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/arrow_bottom.svg" alt="flèche du bas" />
            </a>

        </div>
    </section>
    <h2>Contactez-nous</h2>
    <section class="mail">
        <form>
            <?php
            echo do_shortcode('[wpforms id="244" title="false"]');
            ?></form>

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
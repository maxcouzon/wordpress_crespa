    <?php
    // template Name: services
    //header
    get_header();

    ?>
    <!-- barre bleu en dessous du menu -->
    <div class="blue_barre">
        <!-- barre de chargement -->
        <div class="search_barre">
            <h1>
                <?php echo (get_the_title()); ?>
            </h1>
        </div>
    </div>
    <!-- partie article de la page -->

    
    <section class="entreprise">
<h2><?php the_field('title_achat') ?></h2>
        <div class="partie_entreprise">
            <div class="image_page_accueil" style="background-image: url(<?php $achat = get_field('img_achat');
                                                                            echo $achat['url'] ?>);background-repeat: no-repeat;background-size:cover;">
                <div class="filtre_noir_page_accueil">
                    <div class="text_page_accueil_entreprise">
                        <?php the_field('subtitle_achat'); ?>
                    </div>
                </div>
            </div>
            <div class="story">
                <article class="service">
                    <?php the_field('text_achat'); ?>
                </article>
            </div>
        </div>
    </section>
        
        <section class="entreprise">
<h2><?php the_field('title_location') ?></h2>
            <div class="partie_entreprise">
                <div class="story">
                    <article class="service">
                        <?php the_field('text_location'); ?>
                    </article>

                </div>
                <div class="image_page_accueil" style="background-image: url(<?php $location = get_field('img_location');
                                                                                echo $location['url'] ?>);background-repeat: no-repeat;background-size:cover;">
                    <div class="filtre_noir_page_accueil">
                        <div class="text_page_accueil_entreprise">
                            <?php the_field('subtitle_location'); ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        <section class="entreprise">
<h2><?php the_field('title_event') ?></h2>
            <div class="partie_entreprise">
                <div class="image_page_accueil" style="background-image: url(<?php $event = get_field('img_event');
                                                                                echo $event['url'] ?>);background-repeat: no-repeat;background-size:cover;">
                </div>
                <div class="story">
                    <article class="service">
                        <?php the_field('text_event'); ?>
                    </article>
                </div>
            </div>
        </section>
        
        <section class="entreprise">
<h2>
            <?php the_field('title_pro') ?>
        </h2>
            <div>

                <article class="service">
                    <?php the_field('text_pro') ?>
                </article>
            </div>
        </section>
        <?php
        //footer
        get_footer();
        ?>
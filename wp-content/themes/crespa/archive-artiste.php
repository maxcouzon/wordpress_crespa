<?php
//header
get_header();
?>
<!-- barre de bleu en dessous du menu -->
<div class="blue_barre">
    <div class="search_barre">
        <h1>
            <?php post_type_archive_title(); ?>
        </h1>
         <?php echo do_shortcode('[ivory-search id="301" title="Custom Search Form"]')?>
    </div>
</div>
<!-- paragraphe d'intro de la page artiste -->
<!-- tous les artistes -->

<?php if (have_posts()) : ?>
    <div class="all">
        <? while (have_posts()) : ?>
            <?php the_post();
            $image = get_field('img_artiste'); ?>
            <div class="one">
                <img class="background_image" src="<?php echo(get_template_directory_uri());?>/assets/images/background_artiste<?php $min = 1;
                                                                                                                $max = 3;
                                                                                                                echo rand($min, $max); ?>.svg" alt="">
                <div class="photo_artiste" style="background-image: url(<?php echo $image['url'] ?>);background-repeat: no-repeat;background-size: cover;">
                </div>
                <div class="name">
                   <?php echo(get_the_title()); ?>
                </div>
                <div class="courte_description">
                    <?php the_field('small_text') ?>
                </div>
<div class="button_accueil_artistes">
                            <a href= "/<?php $post_slug = $post->post_name; echo($post_slug)?>/" class="button_oeuvre">Voir</a>

                        </div>

            </div>
        <?php endwhile ?>
        
    </div>
<?php the_posts_pagination(); ?>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>
<?php
//footer
get_footer();
?>

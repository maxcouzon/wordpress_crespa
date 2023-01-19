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
        <form action="" method="get"><input id="searchbar" onkeyup="artiste()" type="text" name="search" placeholder="chercher .." class="search" />
            <img src="" alt="recherche">
        </form>
    </div>
</div>
<!-- paragraphe d'intro de la page artiste -->
<article>
    <?php the_field('texzfeqfdt'); ?>
</article>
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
 <div>
                        <a class="button" href="<?php echo (get_permalink($post->ID)); ?>">Voir plus</a>
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

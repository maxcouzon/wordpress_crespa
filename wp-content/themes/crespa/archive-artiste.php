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
                <img class="background_image" src="../wp-content/themes/crespa/assets/images/background_artiste<?php $min = 1;
                                                                                                                $max = 3;
                                                                                                                echo rand($min, $max); ?>.svg" alt="">
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
<?php the_posts_pagination(); ?>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>
<?php
//footer
get_footer();
?>

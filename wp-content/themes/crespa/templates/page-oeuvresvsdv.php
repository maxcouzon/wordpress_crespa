<?php
// template Name: oeuvres 
//header
get_header();
?>
<!-- barre bleu en dessous du menu -->
<div class="blue_barre">
    <!-- barre de recherche -->
    <div class="search_barre">
        <h1>
            <?php echo (get_the_title()); ?>
        </h1>
        <div>
            <input id="searchbar" onkeyup="artiste()" type="text" name="search" placeholder="chercher .." class="search" />
            <img src="" alt="rechercher">
            <img src="../wp-content/themes/crespa/templates/assets/images/setting.svg" alt="paramètre">
        </div>
    </div>
</div>
<!-- toutes les oeuvres du site -->
<?php
// The Query

$art = new WP_Query($args);
?>

<?php if (have_posts()) : ?>
    <div class="all_oeuvre">
        <?php while (have_posts()) : ?>
            <?php the_post();
            $image = get_field('img'); ?>

            <div class="one_oeuvre">
                <div class="image" style="background-image:url(<?php echo $image['url']?>);background-size:contain;
background-repeat: no-repeat;background-position: 50% 100%;">
                </div>
                <div class="after">
                    <div>
                        <?php the_field('small_text'); ?>
                    </div>
                    <div>
                        <a class="button" href="<?php echo (get_permalink($post->ID)); ?>">Voir plus</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php the_posts_pagination();?>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif; ?>
<?php
//footer
get_footer();
?>
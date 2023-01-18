<?php
//header
get_header();
?>
<!-- barre bleu en dessous du menu -->
<div class="blue_barre">
    <!-- barre de recherche -->
    <div class="search_barre">
        <h1>
            <?php post_type_archive_title(); ?>
        </h1>
        <div>
<form action="" method="get">
 <input id="searchbar" onkeyup="artiste()" type="text" name="s" placeholder="chercher .." class="search" />
            <img src="" alt="rechercher"></form>
           
            <img src="../wp-content/themes/crespa/templates/assets/images/setting.svg" alt="paramètre">
        </div>
    </div>
</div>
<!-- toutes les oeuvres du site -->


<?php 
// echo(wp_count_posts('oeuvre'));

if (have_posts()) : ?>
    <div class="all_oeuvre">
        <?php
        while (have_posts()) : the_post();
            $image = get_field('img'); ?>

            <div class="one_oeuvre">
                <div class="image" style="background-image:url(<?php echo $image['url'] ?>);background-size:contain;
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
<?php the_posts_pagination(); ?>
    
    
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif; ?>
<?php
//footer
get_footer();
?>
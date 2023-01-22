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
        <?php echo do_shortcode('[ivory-search id="301" title="Custom Search Form"]') ?>

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
                    <div class="titre_oeuvre">
                        <?php echo (get_the_title()); ?>
                    </div>
                    <div class="button_accueil_artistes">
                            <a href= "/<?php $post_slug = $post->post_name; echo($post_slug)?>/" class="button_oeuvre">Voir</a>

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

<?php

//header
get_header();

?>
<div>

<img class="point_jaune_autre" src="<?php echo(get_template_directory_uri()); ?>/assets/images/point_jaune.svg" alt="" />
<img class="tache_rouge_jaune_autre" src="<?php echo(get_template_directory_uri()); ?>/assets/images/point_bleu.svg" alt="" />

<img class="tache_rouge_service" src="<?php echo(get_template_directory_uri()); ?>/assets/images/tache_rouge.svg" alt="" />
</div>
<div class="blue_barre">
<div class="search_barre">
<h1><?php post_type_archive_title(); ?></h1>
</div>
</div>

<!-- The Loop -->
<? if (have_posts()) : ?>

    <?php while (have_posts()) : ?>
        <?php the_post();
        $image1 = get_field('img1');
        ?>
        <div class="conteneur">
            <div class="image" style="background-image: url(<?php echo $image1['url'] ?>);background-repeat: no-repeat;background-size:cover;">
                <div class="filtre_noir">
                    <div class="titre">
                        <?php the_field('title') ?>
                    </div>
                    <div>
                        <?php the_field('theme') ?>
                    </div>
                </div>
            </div>

            <div class="text">
                <div><?php the_field('text') ?></div>
                <div>
                    <?php the_field('training_duration') ?> min
                </div>

            </div>
        </div>


    <?php endwhile ?>
<?php the_posts_pagination(); ?>
    </div>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>

<?php
//footer
get_footer();
?>
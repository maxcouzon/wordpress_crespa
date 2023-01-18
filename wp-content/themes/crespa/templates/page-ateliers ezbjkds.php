<?php
// template Name: ateliers
//header
get_header();

?>
<h1><?php echo (get_the_title()); ?></h1>
<?php

// The Query
$args = array(
    'post_type' => 'atelier',
    'posts_per_page' => -1
);
$workshop = new WP_Query($args);

?>
<?php

?>
<!-- The Loop -->
<? if ($workshop->have_posts()) : ?>

    <?php while ($workshop->have_posts()):?>
        <?php $workshop->the_post();
        $image = get_field('img1');
    
        ?>
        <div class="conteneur">
            <div class="image" style="background-image: url(<?php echo $image['url'] ?>);background-repeat: no-repeat;">
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
    </div>
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>

<?php
//footer
get_footer();
?>
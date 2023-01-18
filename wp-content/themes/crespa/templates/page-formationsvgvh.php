<?php
// template Name: formations
//header
get_header();

?>
<h1><?php echo (get_the_title()); ?></h1>
<?php

// The Query
$args = array(
    'post_type' => 'formation',
    'posts_per_page' => -1
);
$work = new WP_Query($args);
//var_dump($work);
?>
<?php

?>
<!-- The Loop -->
<? if ($work->have_posts()) : ?>

    <?php while ($work->have_posts()) : ?>
        <?php $work->the_post();
        $image1 = get_field('img');
     
        ?>
        <div class="conteneur">
            <div class="image" style="background-image: url(<?php echo $image1['url'] ?>);background-repeat: no-repeat;">
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
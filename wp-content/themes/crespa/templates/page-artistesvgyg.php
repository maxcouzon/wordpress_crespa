<?php
// template Name: artistes  
//header
get_header();
$artiste = get_pages(array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order',
    'post_status' => 'publish',
    'parent' => $post->ID,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/page-artiste.php'
));
?>
<!-- barre de bleu en dessous du menu -->
<div class="blue_barre">
    <div class="search_barre">
        <h1>
            <?php echo (get_the_title()); ?>
        </h1>
        <div>
            <input id="searchbar" onkeyup="artiste()" type="text" name="search" placeholder="chercher .." class="search" />
            <img src="" alt="recherche">
        </div>
    </div>
</div>
<!-- paragraphe d'intro de la page artiste -->
<article>
    <?php the_field('text'); ?>
</article>
<!-- tous les artistes -->
<?php

// The Query
$args = array(
    'post_type' => 'artiste',
    'posts_per_page' => -1
);
$artits = new WP_Query($args);

?>

<!-- The Loop -->
<? if ($artits->have_posts()) : ?>
    <div class="all">
        <? while ($artits->have_posts()) : ?>
            <?php $artits->the_post(); 
            $image = get_field('img_artiste');?>
            <div class="one">
            <img class="background_image" src="../wp-content/themes/crespa/assets/images/background_artiste<?php $min=1;$max=3; echo rand($min,$max);?>.svg" alt="" >
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
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif ?>
<?php
//footer
get_footer();
?>
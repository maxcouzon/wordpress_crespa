<?php
//header
get_header();
?>
<?php $image = get_field('img');?>
<?php $artist = get_field('artiste'); ?>


<diV class="contenu_oeuvre">
    <div class="oeuvre">
        <div class="gauche">
            <div class="titre_price">

                <div class="titre">
                    <div><?php echo (get_the_title()) ?></div>
                    <div>
                        <?php var_dump($artist["post_title"]) ?>
                    </div>
                </div>
                <div class="price">
                    <?php $prix = get_field('price');
                    echo ($prix); ?>€</div>
            </div>
            <div class="image_oeuvre_simple" style="background-image:url(<?php echo $image['url'] ?>);background-size:contain;
background-repeat: no-repeat;background-position: 50% 100%;">
            </div>
        </div>
        <div class="description"> <?php the_field('text') ?>

        </div>
    </div>
    <?php


    // The Query
    $args = array(
        'post_type' => 'oeuvre',
        'posts_per_page' => -1,
        'post__not_in' => array($post->ID), 
        'meta_query'    => (array(
            'key'       => 'artiste',
            'value'     => '"' . $artist[0]->ID . '"',
            'compare'   => 'LIKE'
        )
        )
    );
    $art = new WP_Query($args);
    ?>

    <?php if ($art->have_posts()) : ?>
        <h2>Oeuvres du même artiste</h2>
        <div class="autre_oeuvre">
            <?php while ($art->have_posts()) : ?>
                <?php $art->the_post();
                $image = get_field('img');
                ?>
                <div class="one_oeuvre">
                    <div class="image_other" style="background-image:url(<?php echo $image['url'] ?>);background-size:contain;
background-repeat: no-repeat;background-position: 50% 100%;">
                    </div>
                    <div class="after">
                        <div>
                            <?php the_field('small_text'); ?>
                        </div>
                        <div class="button_accueil_artistes">
                            <a href= "<?php get_permalink($the_post)?>" class="button_oeuvre">Voir</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>

    <?php else : ?>

    <?php endif; ?>


</diV>


<?php
get_footer();
?>
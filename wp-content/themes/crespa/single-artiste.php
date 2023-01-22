<?php
//header
get_header();
?>
<?php the_post();
$image = get_field('img_artiste'); ?>
<div class="contenu_single">
    <div class="artiste">
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
                <?php the_field('text') ?>
            </div>


<div>
                <a href="<?php the_field('web_site') ?>" class="lien"><?php  the_field('web_site') ?></a>
            </div>


        </div>
    </div>

        <?php
        

        // The Query
        $args = array(
            'post_type' => 'oeuvre',
            'posts_per_page' => -1,
            'post__not_in' => array($post->ID),
            'meta_query'    => array(
                array(
                    'key'       => 'artiste',
                    'value'     => '"' . get_the_ID(). '"',
                    'compare'   => 'LIKE'
                )
            )
        );
$artist = get_field('artiste');
        $art = new WP_Query($args);
        ?>

        <?php if ($art->have_posts()) : 
        ?>
<h2>Oeuvres de l'artiste</h2>
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
                      
<div class="titre_oeuvre">
                           <?php echo (get_the_title()); ?>
                        </div>
 <div>
                        <a class="button_art" href="<?php echo (get_permalink($post->ID)); ?>">Voir</a>
                    </div>
                    </div>
                </div>
            <?php endwhile; ?>

    
<?php else : ?>

<?php endif; ?>
</div>
</div>

<?php
get_footer();
?>
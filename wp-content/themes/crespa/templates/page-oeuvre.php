<?php
// template Name: oeuvres 
//header
get_header();
?>
<section>

<?php
// The Query
$args = array(
    'post_type' => 'oeuvre',
    'posts_per_page' => -1
);
$art = new WP_Query($args);
?>

<?php if ($art->have_posts()) : ?>
    <div class="all_oeuvre">
        <?php while ($art->have_posts()) : ?>
            <?php $art->the_post();
            $image = get_field('img'); 
var_dump($art)?>


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
<?php else : ?>
    <p>Aucune oeuvre trouvée.</p>
<?php endif; ?>
</section>
<?php
//footer
get_footer();
?>
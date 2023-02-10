<?php
// template Name: Contact
//header
get_header();
?>



<section class="mail">
<h2 class="contact_form">Nous contactez</h2>
<div class="home_form">
<form>
<?php
                echo do_shortcode('[wpforms id="244" title="false"]');
                ?></form>
    <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.1392009935175!2d4.895699815420589!3d45.527404279101745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4df2247e88dcf%3A0xa78db9478c3d63ba!2s93%20Rue%20Lafayette%2C%2038200%20Vienne%2C%20France!5e0!3m2!1sfr!2sus!4v1673705030709!5m2!1sfr!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
            <div class=" coordonnees">
                <div class="coordonnee">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/maps.svg" alt="adresse de la galerie">
                    <p><?php the_field('adress'); ?></p>
                </div>
                <div class="coordonnee">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/tel.svg" alt="numéro de téléphone">
                    <p><?php the_field('num'); ?></p>
                </div>
                <div class="coordonnee">
                    <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/horaire.svg" alt="horaires">
                    <p><?php the_field('horaire'); ?></p>
                </div>
            </div>
        </div>
</div>
</section>
<?php
//footer
get_footer();
?>
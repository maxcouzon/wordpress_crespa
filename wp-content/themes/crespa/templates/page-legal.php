<?php
// template Name: legal
//header
get_header();
?><h1>Mentions légales</h1>

    <section>
        <article style="margin-top: 50px;">
        <h2>Éditeur</h2>
        <p>Département MMI de l’IUT de Chambéry</p>
        <p>Réalisé dans le cadre du projet étudiant “La semaine du web”</p>
        </article>
        <article style="margin-top: 50px;">
            <h2>Conception du site ainsi que du contenu</h2>
            <p>BEAUCHEF Lucas</p>
            <p>BRUCHET Lucas</p>
            <p>VADEBOIN Bastien</p>
            <p>COUZON Max</p>
        </article>
        <article style="margin-top: 50px;">
            <h2>Crédits photographiques</h2>
            <p>BRUCHET Lucas</p>
        </article>
        <article style="margin-top: 50px;">
            <h2>Crédits vidéographiques</h2>
            <p>BRUCHET Lucas</p>
        </article>
        <article style="margin-top: 50px;">
            <h2>Illustrations et logo</h2>
            <p>BEAUCHEF Lucas</p>
            <p>VADEBOIN Bastien</p>
        </article>
        <article style="margin-top: 50px;">
            <h2>Développement</h2>
            <p>COUZON max</p>
            
        </article>
        <article style="margin-top: 50px;">
            <h2>ADRESSE</h2> 
            <p>93 Rue Lafayette, 38200 Vienne</p>
        </article>
    </section>

    <div class="mention_legal"style="display: flex;">
       <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/usmb.png" alt="logo" width="150px"
height="50px">
        <img src="<?php echo (get_template_directory_uri()); ?>/assets/images/mmi.svg" alt="logo MMI" width="100px"
height="50px">
    </div>
<?php

get_footer();
?>
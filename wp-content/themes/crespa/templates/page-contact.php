<?php
// template Name: contact
//header
get_header();
?>
<h2>Nous contactez</h2>
<section class="mail">

    <form action="" method="post" class="form">
        
        <div>
            <label for="firstname">Nom</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="name">prénom</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div>
            <button onclick="window.location.href = '../contact/'" ; class="send">envoyer</button>
        </div>
        <article>
            En envoyant je sais pas quoi
        </article>
    </form>

    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.1392009935175!2d4.895699815420589!3d45.527404279101745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4df2247e88dcf%3A0xa78db9478c3d63ba!2s93%20Rue%20Lafayette%2C%2038200%20Vienne%2C%20France!5e0!3m2!1sfr!2sus!4v1673705030709!5m2!1sfr!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
        <div>
            <div>
                <img src="" alt="adresse de la galerie">
                <p></p>
            </div>
            <div>
                <img src="" alt="numéro de téléphone">
                <p></p>
            </div>
            <div>
                <img src="" alt="horaires">
                <p></p>
            </div>
        </div>
    </div>

</section>
<?php
//footer
get_footer();
?>
    <?php
    // template Name: services
    //header
    get_header();
    $services = get_pages(array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'post_status' => 'publish',
        'parent' => $post->ID,
        'meta_key' => '_wp_page_template',
        'meta_value' => 'templates/page-artiste.php'
    ));
    ?>
    <!-- barre bleu en dessous du menu -->
    <div class="blue_barre">
        <!-- barre de chargement -->
        <div class="search_barre">
            <h1>
                <?php echo (get_the_title()); ?>
            </h1>
        </div>
    </div>
<!-- partie article de la page -->
    <article>
        <h2>
            Acheter une oeuvre
        </h2>
        <div>
            <div class="welcome_logo">
                <img src="../wp-content/themes/crespa/assets/images/logo_white.svg" alt="logo">
            </div>
            <div>
                <?php the_field('texte_1') ?>
            </div>
        </div>
    </article>
    <article>
        <h2>
            Louer une oeuvre
        </h2>
        <div>
            <div>
                <?php the_field('texte_2') ?>
            </div>
            <div class="welcome_logo">
                <img src="../wp-content/themes/crespa/assets/images/logo_white.svg" alt="logo">
            </div>
        </div>
    </article>
    <article>
        <h2>
            Vos événements chez nous !
        </h2>
        <div>
            <div class="welcome_logo">
                <img src="../wp-content/themes/crespa/assets/images/logo_white.svg" alt="logo">
            </div>
            <div>
                <?php the_field('texte_3') ?>
            </div>
        </div>
    </article>
    <article>
        <h2>
            <?php the_field('texte_4') ?>
        </h2>
    </article>
    <?php
    //footer
    get_footer();
    ?>
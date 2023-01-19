<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/css" href="<?php echo (get_template_directory_uri()); ?>/assets/images/logo_fav.svg" />
  <?php wp_head(); ?>
  <title>Cre'espa</title>
</head>

<body>


  <header>
    <nav>
      <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox" />
      <label class="m-menu__toggle" for="menu">
        <div class="header">
          <svg width="40" height="33" viewBox="0 0 40 33" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
            <rect width="40" height="5" fill="#F40044" />
            <rect y="14" width="40" height="5" fill="#F40044" />
            <rect y="28" width="40" height="5" fill="#F40044" />
          </svg>
          <img src="<?php echo(get_template_directory_uri());?>/assets/images/logo_complet.svg" alt="logo" class="logo" />
          
        </div>
      </label>
<div class="contactez-nous">
                    <a href="/wordpress_crespa/contact/" class="button">Contactez-nous</a>
                </div>
      <label class="m-menu__overlay" for="menu"></label>

      <div class="m-menu">
        <div class="m-menu__header">
          <label class="m-menu__toggl" for="menu">
            <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="40.2514" height="5.03142" transform="matrix(0.707174 -0.707039 0.707174 0.707039 0.541016 29.2573)" fill="#F40044" />
              <rect width="40.2514" height="5.03142" transform="matrix(0.707174 0.707039 -0.707174 0.707039 4.09863 0.204224)" fill="#F40044" />
            </svg>
          </label>
        </div>
        <?php wp_nav_menu(array('menu' => 'menu_princ')); ?>
        <img src="<?php echo(get_template_directory_uri());?>/assets/images/logo_simple_white.svg" alt="" class="logo_nav" />
        <!-- <ul>
          <li><a href="../acceuil/artistes/">Les artistes</a></li>
          <li><a href="../wordpress_crespa/accueil/oeuvres/">La galerie</a></li>
          <li><a href="../acceuil/ateliers/">Les ateliers</a></li>
          <li><a href="../acceuil/formations/">Les formations</a></li>
          <li><a href="../acceuil/entreprise/">Les services & modalités d'achat</a></li>
          <li><a href="../acceuil/contact/">Nous contacter</a></li>
          <li><a href="../acceuil/">Nous contacter</a></li>
          <img src="/assets/images/logo_simple_white.svg" alt="" class="logo_nav" />
        </ul> -->
      </div>
    </nav>
  </header>

  
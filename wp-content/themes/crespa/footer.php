<footer>
    <div class="info_footer">
        <div class="rs">
            <a href="">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/insta.svg" alt="instagram"/>
            </a>
            <a href="">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/linkedin.svg" alt="linkedin"/>
            </a>
            <a href="">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/facebook.svg" alt="facebook"/>
            </a>
        </div>
        <div class="logo">
            <img src="<?php echo(get_template_directory_uri());?>/assets/images/logo_black.svg" alt="logo">
        </div>
        <div class="adresse">
            <article>
            <?php the_field('adress', 'option'); ?>
            </article>
            <br>
            <article>
            06 51 60 58 51
            </article>
        </div>
    </div>
    <div class="end_footer">
    
        <div class="ligne">

        </div>
        <div>
    <p class="copyright">@ 2023-2028 Lucas Beauchef | Bastien | Max Couzon.Tous droits réservés</p>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
<footer>
    <div class="info_footer">
        <div class="rs">
            <a target="_blank" href="<?php the_field('insta','option'); ?>">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/insta.svg" alt="instagram"/>
            </a>
            <a target="_blank"href="<?php the_field('facebook','option'); ?>">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/linkedin.svg" alt="linkedin"/>
            </a>
            <a target="_blank" href="<?php the_field('linkedin','option'); ?>">
                <img src="<?php echo(get_template_directory_uri());?>/assets/images/facebook.svg" alt="facebook"/>
            </a>
        </div>
        <div class="logo">
            <img src="<?php echo(get_template_directory_uri());?>/assets/images/logo_black.svg" alt="logo">
        </div>
        <div class="adresse">
            <article>
            93 Rue Lafayette <br />
38200, Vienne
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
            <article>&copy; 2023-2028 Tous droits réservés.<a href="/legal/"><p class="copyright">Mentions légales</p></a></article>
    
    
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
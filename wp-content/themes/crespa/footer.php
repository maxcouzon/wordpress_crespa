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
            <?php the_field('adress', 'option'); ?>
            </article>
            <br>
            <article>
            <?php the_field('num','option'); ?>
            </article>
        </div>
    </div>
    <div class="end_footer">
    
        <div class="ligne">

        </div>
        <div>
<a href="/legal/"><p class="copyright" >Mentions légales</p></a>
    
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
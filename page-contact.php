<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
				<?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <form id="form" action="<?php bloginfo('template_url'); ?>/contact-sent.php" method="post">
                     <fieldset>
                         <label for="nom"><span class="contact-infos"></span><input type="text" id="nom" placeholder="Votre nom" name="nom" autofocus /></label>
                     </fieldset>
                     <fieldset>
                         <label for="email"><span class="contact-infos"></span><input type="email" id="email" placeholder="Votre email" name="email" autofocus /></label>
                     </fieldset>
                     <fieldset>
                         <label for="message"><span class="contact-infos"></span><textarea id="message" type="text" autofocus name="message">Votre message</textarea></label>
                     </fieldset>
                     <fieldset>
                           <input type="submit" value="Envoyer">
                     </fieldset>                   
                 </form>
                <p id="status">
                    
                </p>
                <div class="push"></div>

<?php get_footer(); ?>
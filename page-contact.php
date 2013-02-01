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
                         <label for="nom"><span class="contact-infos">Nom</span><input type="text" id="nom" placeholder="Votre nom" name="nom" /></label>
                         <label for="email"><span class="contact-infos">Email</span><input type="email" id="email" placeholder="Votre email" name="email" /></label>
                         <label for="message"><span class="contact-infos">Message</span><textarea id="message" type="text" placeholder="Votre message" name="message"></textarea></label>
                         <input type="submit" value="Envoyer" class="btn">
                     </fieldset>                   
                 </form>
                <p id="status">
                    
                </p>
                <div class="push"></div>

<?php get_footer(); ?>
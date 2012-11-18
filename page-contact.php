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
                <form id="form" action="#" method="post">
                     <fieldset id="name">
                         <label for="name"><span class="contact-infos"></span><input type="text" placeholder="Votre nom" autofocus /></label>
                     </fieldset>
                     <fieldset id="email">
                         <label for="email"><span class="contact-infos"></span><input type="email" placeholder="Votre email" autofocus /></label>
                     </fieldset>
                     <fieldset id="message">
                         <label for="message"><span class="contact-infos"></span><textarea type="text" autofocus>Votre message</textarea></label>
                     </fieldset>
                     <fieldset>
                           <input type="submit" value="Envoyer">
                     </fieldset>                   
                 </form>
                <article id="status">
                    
                </article>

<?php get_footer(); ?>
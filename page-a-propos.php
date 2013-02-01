<?php
/*
Template Name: A propos
*/
?>
<?php get_header(); ?>
        <div class="about-container">
                <article id="didz" itemscope itemtype="http://schema.org/blogPost">
                            <?php if(have_posts()): ?>
                                <?php while(have_posts()): the_post();?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                </article>
                <aside id="social">
                    <ul>
                        <li><a id="twitter" href="http://www.twitter.com/diempidezign" title="Suivez-moi sur twitter">Mon compte Twitter</a></li>
                        <li><a id="gplus" href="http://gplus.to/diempi" title="Ajoutez-moi sur Google Plus">Mon compte GPlus</a></li>
                        <li><a id="lkn" href="http://be.linkedin.com/in/didierg" title="Mon compte LinkedIn">Mon compte LinkedIn</a></li>
                    </ul>
                </aside>                
        </div>
        <div class="push"></div>
<?php get_footer(); ?>
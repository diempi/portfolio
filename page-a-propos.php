<?php
/*
Template Name: A propos
*/
?>
<?php get_header(); ?>
        <div class="container">
                <article id="didz">
                    <section>
                        <p class="legende">
                            <?php if(have_posts()): ?>
                                <?php while(have_posts()): the_post();?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </p>
                    </section>
                </article>
        </div>
<?php get_footer(); ?>
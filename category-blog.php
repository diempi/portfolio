<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <article class="post">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                     <p class="pubdate"><?php _e('Posté le '); ?> <?php echo get_the_date('j F Y'); ?></p>
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>       
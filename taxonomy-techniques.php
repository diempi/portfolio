<?php get_header(); ?>
    <h2> Projets cree avec : </h2>
    <div class="container">
        <article <?php post_class(); ?>>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <hr>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
    </div>    
<?php dynamic_sidebar('projects'); ?>
<div class="push"></div>
<?php get_footer(); ?>
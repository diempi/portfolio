<!-- error_reporting(0); -->
<?php get_header(); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <h3></h3> <?php _e('Poste le '); ?><?php echo get_the_date(); ?>
                     <?php the_terms($post->ID,'techniques','Crée avec ',' - ',''); ?>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
<?php dynamic_sidebar('primary'); ?>
<div class="push"></div>
<?php get_footer(); ?>
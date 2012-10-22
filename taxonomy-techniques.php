<?php get_header(); ?>
    <article <?php post_class(); ?>>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
               <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>
                <h3><?php _e('Poste par ').' '. the_author(); ?></h3> <?php _e('le '); ?><?php echo get_the_date(); ?>
                 <?php the_terms($post->ID,'techniques','cree avec ',' - ',''); ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
<?php dynamic_sidebar('primary'); ?>
<?php get_footer(); ?>
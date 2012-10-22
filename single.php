<?php get_header(); ?>
    <div class="container">

            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <article <?php post_class(); ?>>
                        <h2><?php the_title(); ?></h2>
                       <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
<?php dynamic_sidebar('primary'); ?>
<?php get_footer(); ?>
<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php dynamic_sidebar('primary'); ?>   
    <div id="main" class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <article class="post" itemscope itemtype="http://schema.org/blogPost">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url" itemprop="name"><?php the_title(); ?></a> </h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                     <p class="pubdate" itemprop="datePublished"><?php _e('Posté le '); ?> <?php echo get_the_date('j F Y'); ?></p>
                    <div class="content" itemprop="blog">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>       
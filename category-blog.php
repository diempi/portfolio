<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
    
    <div id="main" class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <article class="post" itemscope itemtype="http://schema.org/Blog">
                    <h2 itemprop="name"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url"><?php the_title(); ?></a> </h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                     <p class="pubdate" itemprop="datePublished"><?php _e('Posté le '); ?> <?php echo get_the_date('j F Y'); ?></p>
                    <div class="content" itemprop="blogPost">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="sidebar">
        <?php dynamic_sidebar('primary'); ?>
    </div>
<?php get_footer(); ?>       
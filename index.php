<!-- error_reporting(0); -->
<?php get_header(); ?>
    <div id="main">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Blog">
                    <h2 itemprop="name"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url"><?php the_title(); ?></a></h2>
                   <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <h3 itemprop="datePublished"> <?php _e('Poste le '); ?><?php echo get_the_date(); ?></h3>
                     <?php the_terms($post->ID,'techniques','Crée avec ',' - ',''); ?>
                    <div class="content" itemprop="blogPost">
                        <?php the_content(); ?>
                    </div>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="sidebar">
        <?php dynamic_sidebar('primary'); ?>
    </div>
<?php get_footer(); ?>
<?php get_header(); ?>
    <div id="main" class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Blog">
                        <h2 itemprop="name"><?php the_title(); ?></h2>
                       <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <div class="content" itemprop="blogPost">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- Commentaires -->
            <div id="comments" itemscope itemtype="http://schema.org/UserComments">
                <?php comments_template(); ?>
            </div>              
    </div>
    <div id="sidebar">
        <?php dynamic_sidebar('primary'); ?>
    </div>
<?php get_footer(); ?>
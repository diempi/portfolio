<?php get_header(); ?>
    <div id="main" class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Blog">
                        <h2 itemprop="name"><?php the_title(); ?></h2>
                        <div class="content" itemprop="blogPost">
                            <?php the_content(); ?>
                        </div>
                        <?php
                            $url_container = get_post_custom();
                            $url = $url_container['URL du site'];
                        ; ?>
                            <a href="<?php echo $url[0] ; ?>"  title="<?php the_title(); ?>" target="_new">Visitez le site</a>
                        <p><?php the_terms($post->ID,'techniques','Crée avec ',' - ',''); ?></p>
                         <p><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p>                        
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
    <div id="sidebar">
        <?php dynamic_sidebar('projects'); ?>
    </div>
<?php get_footer(); ?>
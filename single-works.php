<?php get_header(); ?>
    <div class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <article <?php post_class(); ?>>
                        <h2><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <?php
                            $url_container = get_post_custom();
                            $url = $url_container['URL du site'];
                        ; ?>
                            <a href="<?php echo $url[0] ; ?>"  title="<?php the_title(); ?>" target="_new">Visitez le site</a>
                        <p><?php the_terms($post->ID,'techniques','Cree avec ',' - ',''); ?></p>
                         <p><?php the_terms($post->ID,'annees','Annees: ',' - ',' '); ?></p>                        
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
<?php dynamic_sidebar('primary'); ?>
<?php get_footer(); ?>
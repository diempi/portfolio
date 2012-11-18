<?php get_header(); ?>
    <div id="slideshow">
        
    </div>
    <div class="container">
        <ul class="work">
            <?php 
                $arg = array('post_type' => 'works');
                $loop = new WP_Query($arg);
            ;?>
            <?php if(have_posts()): ?>
                <?php while($loop->have_posts()): $loop->the_post();?>
                                 <li>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
                                        <?php the_post_thumbnail(); ?>
                                        <h2 class="title"><?php the_title(); ?></h2>
                                        <p itemprop="description"><?php the_terms($post->ID,'annees','Annees: ',' - ',' '); ?></p>
                                        <p><?php the_terms($post->ID,'techniques','cree avec ',' - ',' '); ?></p>
                                    </a>
                                </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <?php dynamic_sidebar('primary'); ?>
    </div>
<?php get_footer(); ?>
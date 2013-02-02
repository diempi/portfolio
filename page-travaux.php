<?php
/*
Template Name: Projets
*/
?>
<?php get_header(); ?>
    <div id="home-main">
            <ul class="work" itemscope itemtype="http://schema.org/blogPost">
                <?php 
                    $arg = array('post_type' => 'works');
                    $loop = new WP_Query($arg);
                ;?>
                <?php if(have_posts()): ?>
                    <?php while($loop->have_posts()): $loop->the_post();?>
                                     <li>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
                                            <?php the_post_thumbnail(); ?>
                                            <h2 class="title" itemprop="name"><?php the_title(); ?></h2>
                                            <p itemprop="description"><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p>
                                            <p><?php the_terms($post->ID,'techniques','Crée avec ',' - ',' '); ?></p>
                                        </a>
                                    </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
    </div>
<?php get_footer(); ?>
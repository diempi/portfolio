<?php get_header(); ?>
    <h1 id="main-title">
       <a href="<?php bloginfo('wpurl'); ?>" title="" ><?php bloginfo('name'); ?></a>
    </h1>
    
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>
        <h2><?php the_title(); ?></h2>
        <h3><?php _e('Poste par ').' '. the_author(); ?></h3> <?php _e('le '); ?><?php echo get_the_date(); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <hr>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
<?php
add_action('widgets_init','inwebitrust_sidebars');
add_action('after_setup_theme','inwebitrust_setup');
add_action('init','create_post_type');
add_action('init','add_taxonomies');
add_action('init','add_year');

if(! function_exists('add_taxonomies'))
{
    function add_taxonomies()
    {
        register_taxonomy('techniques','works',array(
            "label"=>"Techniques utilisees",
            "hierarchical" => true,
            "query_var" => true,
            "rewrite" => true
            ));
        {

        }
    }
}

if(! function_exists('add_year'))
{
    function add_year()
    {
        register_taxonomy('annees','works',array(
            "label"=>"Annees du projet",
            "hierarchical" => true,
            "query_var" => true,
            "rewrite" => true
            ));
        {

        }
    }
}

if(! function_exists('inwebitrust_setup'))
{
    function inwebitrust_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-formats',array('aside','gallery','link','image'));
        set_post_thumbnail_size( 450, 144,true );
        add_image_size('folio-work',640,480);
        register_nav_menu('mon-menu',__('Menu'),'inwebitrust');
    }
}
if(! function_exists('inwebitrust_sidebars'))
{
    function inwebitrust_sidebars()
    {
            register_sidebar(
                     
                     array(
                        'id'=>'primary',
                        'name'=>'Primary',
                        'Description'=>'Premiere sidebar',
                        'before_widget'=>'<div id="%1$s" class="%2$s">',
                        'after_widget'=>'</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        )
                     );
            register_sidebar(
                     
                     array(
                        'id'=>'home',
                        'name'=>'Home',
                        'Description'=>'Home Sidebar',
                        'before_widget'=>'<div id="%1$s" class="%2$s">',
                        'after_widget'=>'</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        )
                     );            
    }
}


if(! function_exists('create_post_type'))
{
    function create_post_type()
    {
        register_post_type('works',array(
                                         'labels' => array(
                                            'name' => __('Travaux'),
                                            'singular_name'=>__('Travail')
                                            ),
                                         'public'=>true,
                                         'has_archive'=>true,
                                         'supports'=>array('title','editor','thumbnail','post-formats','custom-fields')
                                        )
                           );
    }
}

function portfolio_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'portfolio_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function portfolio_continue_reading_link() {
    return ' <a href="'. esc_url( get_permalink() ) . '">' . __( '... <span class="meta-nav">Lire la suite </span>', 'portfolio' ) . '</a>';
}
add_filter( 'excerpt_more', 'portfolio_continue_reading_link' );



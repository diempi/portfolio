<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php wp_head(); ?>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/less.js"></script>        
        <!--script src="http://static.diempi.be/modernizr.min.js" type="text/javascript"></script-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" ><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> <span><?php bloginfo( 'description' ); ?></span></a></h1>
				<?php wp_nav_menu(array('container' => 'ul', 'menu_id'=>'nav')); ?>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

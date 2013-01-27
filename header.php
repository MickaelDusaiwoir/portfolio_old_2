<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> lang="<?php bloginfo('language');?>" <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language');?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php bloginfo('language');?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language');?>"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description');?>">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--<link rel="stylesheet" type="text/css" href="<?php //bloginfo(stylesheet_url ); ?>" /> -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/style.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/style.css" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
       <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div id="header">
            <?php wp_nav_menu(array('container' => 'nav')); ?> 
        </div>
         

       
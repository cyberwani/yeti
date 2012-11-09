<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  
  <!-- Meta Tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="ModLearning Team">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="yeti, zurb, foundation, modlearning, modular learning, wordpress">
  
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">

  <!-- Humans.txt -->
  <link type="text/plain" rel="author" href="<?php echo THEME_DIR; ?>/humans.txt" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/favicon.ico" />
  
  <?php //TODO: Add additional favicons for mobilde devices ?>
  
  <!-- Title -->
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo THEME_DIR; ?>/css/foundation.min.css" />
    
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  
  <!-- RSS & Pingbacks -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <!-- Required header hook -->
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

  <header>
    <!-- Fixed topbar -->  
    <nav class="top-bar">
      <div class="row">
        <div class="twelve columns">
          <section>
            <a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo THEME_DIR; ?>/images/yeti-header.png" /></a>
        
            <ul class="right y-nav">
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </ul>
          </section>
        </div>
      </div>
    </nav>
    <!-- End topbar -->
  </header>
  
  <div class="row"><!-- Main row -->

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package anthonyjones
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html id="skrollr-body" <?php language_attributes(); ?>>
<head>
  <!-- Meta -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="" />
  <meta name="author" content="Anthony Jones - @iamtonybagels">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">
  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop 
   page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
  -->
  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- External Styles  -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
  <span id="back-to-top" class="section scrollspy"></span>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'anthonyjones' ); ?></a>
  
	<!-- Desktop Navigation -->
  <header role="banner" class="hide-on-small-only">
    <div id="toolbar" class="navbar-fixed">
      <nav id="banner" data-0="height:130px" data-128="height: 64px" class="uva-blue headroom" role="navigation">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" aria-controls="primary-menu" aria-expanded="false" data-activates="mobile-demo" style="background: rgba(255, 255, 255, 0.97); box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);" class="hide-on-large-only sidenav_button btn-floating waves-effect clear-icon">
              <i style="line-height: 39px; color: #383838" class="mdi-navigation-menu"></i>
            </a>
            <ul id="nav-mobile" class="right">    
              <!-- <a style="background: rgba(255, 255, 255, 0.97); box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);" class="btn-floating waves-effect grey clear-icon"><i style="line-height: 39px; color:#383838" class="mdi-action-search"></i></a> -->
              <!-- <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
              </li> -->
            </ul>
            <div class="right" style="width:350px;">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'hide-on-med-and-down' ) ); ?>     
            </div>
          </div>
          <div id="title" data-0="font-size: 45px; padding: 0 0 24px 35px;" data-128="font-size: 26px; padding: 0 0 15px 50px;">
            <a id="home-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?><span class="orange-text text-darken-2">.</span>
            </a>           
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Mobile Device Navigation For CSS FIXED BUGS-->
  <div id="toolbar" class="navbar-fixed hide-on-med-and-up">
    <nav id="banner" class="uva-blue" role="navigation">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" aria-controls="primary-menu" aria-expanded="false" data-activates="mobile-demo" style="background: rgba(255, 255, 255, 0.97); box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);" class="hide-on-large-only sidenav_button btn-floating waves-effect clear-icon">
            <i style="line-height: 39px; color:#383838" class="mdi-navigation-menu"></i>
          </a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-0="opacity: 1;" data-128="opacity: 0;" class="">
            <img class="logo" src="/wp-content/uploads/2015/05/logo.png">
          </a>
          <ul id="nav-mobile" class="right">
          <!-- <li>
            <a style="background: rgba(255, 255, 255, 0.97); box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);" class="btn-floating waves-effect grey clear-icon"><i style="line-height: 39px; color:#383838" class="mdi-action-search"></i></a>
          </li> -->
            <!-- <li class="collection-item avatar">
              <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
            </li> -->
          </ul>
          <div class="right" style="width:450px;">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'tabs hide-on-med-and-down' ) ); ?>     
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Navigation -->
  <nav class="orange white">
    <ul class="side-nav" id="mobile-demo">
      <div class="sidenav-logo grey lighten-3">
        <a href="#" style="font-size: 2rem; padding: 0 18px;"class="waves-effect close-arrow">
          <i class="mdi-navigation-arrow-back"></i>
        </a>   
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
    </ul>
  </nav>
  <div class="animsition">
	<div id="content" class="site-content">

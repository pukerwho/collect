<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="header_top hidden md:block bg-gray-900 text-white py-3">
      <div class="container flex justify-end mx-auto">
        <div class="flex align-center mr-6">
          <div class="flex align-center">
            <img src="<?php bloginfo('template_url') ?>/img/email-header.svg" alt="" width="25px" class="opacity-50 mr-3">
            <div class="mr-2">Email: </div>  
          </div>
          <div>
            <?php echo carbon_get_theme_option( 'crb_email' ); ?>
          </div>
        </div>
        <div class="flex align-center">
          <div class="flex align-center">
            <img src="<?php bloginfo('template_url') ?>/img/address-header.svg" alt="" width="25px" class="opacity-50 mr-3">
            <div class="mr-2">Адреса: </div>  
          </div>
          <div>
            <?php echo carbon_get_theme_option( 'crb_address' ); ?>
          </div>
        </div>
      </div>
      
    </div>
    <div class="header_bottom collect-animate px-5 py-3 md:px-5">
      <div class="container flex justify-between items-center mx-auto">
        <div class="text-xl md:text-2xl">
          <?php echo carbon_get_theme_option( 'crb_namesite' ); ?>
        </div>
        <div class="hidden md:flex">
          <?php wp_nav_menu([
            'theme_location' => 'head_menu',
            'container' => 'nav',
            'menu_id' => 'head_menu',
          ]); ?>  
        </div>
        <div class="mobile_menu flex relative md:hidden cursor-pointer">
          <span class="mobile_menu_span"></span>
          <span class="mobile_menu_span"></span>
          <span class="mobile_menu_span"></span>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile_cover block md:hidden px-5 py-3">
    <?php wp_nav_menu([
      'theme_location' => 'head_menu',
      'container' => 'nav',
      'menu_id' => 'head_menu',
    ]); ?>
  </div>
  <section id="content" role="main">
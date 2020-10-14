<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--
**********************************************
* Project: Atomiv WordPress Starter Theme
**********************************************
* Developed by: Nebojsa Bojanic and Stefan Loncaric
+ e-mail: nebojsa.bojanic92@yahoo.com, loncaric.stefan@gmail.com
+ html, css, vanilla js & php
+ responsive page
*********************************************
-->
<head>

<!-- Basic Page Needs
	================================================== -->
	<title><?php echo bloginfo('name')?> - <?php the_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Apple Devices Settings
	================================================== -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-touch-fullscreen" content="yes" />

<!-- Remove all auto-formatting for telephone number -->
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no"/> 

<!-- Fonts
	================================================== -->
	<!-- Add fonts here (like Google Fonts link) -->

<!-- Styles
	================================================== -->
	<!-- Link css file with Version Control to solve the cache problem - cachebusting -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?ver=' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

<!-- Favicons
	================================================= -->
	<!-- This code is generated through favicon generator. I am using https://realfavicongenerator.net/ -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/site.webmanifest">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<div class="body-wrapper"><!-- Closing in the footer.php -->


	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<header>

		<!-- <a href="<?php echo get_home_url(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>" title="<?php echo $logo['title'];?>">
		</a> -->
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		} ?>


		<?php
		$mainNav = array(
			'theme_location'	=> 'mainNav',
			'container'			=> 'ul',
			'menu_class'		=> 'nav'
		);
		wp_nav_menu($mainNav); ?><!-- End: main navigation -->

	</header>
	<!-- ##################################################
		End: header
	################################################## -->


	<div class="main-content"><!-- Closing in the footer.php -->

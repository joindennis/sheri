<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1200" /> 
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="favicon_shlaw.ico" rel="shortcut icon" type="image/x-icon" />


	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/drop_down_menu.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<!-- <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<!-- <script src="<?php bloginfo('template_directory'); ?>/js/slider2.js" type="text/javascript"></script> -->
	


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56245551-1', 'auto');
  ga('send', 'pageview');

</script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dist/css/style.css">

		<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/css/dist/jquery.glide.js"></script>
		
		
 

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header>
		
		<hgroup class="header_top">
			
	<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/></a>
	<? include 'menu.php'; ?>
	
	<? include 'social_top.php'; ?>
	
	

	
		</hgroup>



	</header><!-- #masthead -->	
	
	
	

	<div class="wrapper">
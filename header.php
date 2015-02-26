<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wrigley
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<link href='http://fonts.googleapis.com/css?family=Muli:300,400|Special+Elite|Merriweather:400,300' rel='stylesheet' type='text/css'>  <!-- google fonts -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  <!-- font awesome -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>  <!-- modernizr -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wrigley' ); ?></a>

	<!-- start of nav -->
<nav id="site-navigation" class="main-navigation" role="navigation">

<div class="container">
	<div class="row">
	   <div class="col-xs-2">
		  <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="image_logo">
	   </div>
	   <div class="col-xs-10">
            <ul id="menu">
            	<li><a href="#landing">Home</a></li>
	            <li><a href="#menu">Menu</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	            <li><a href="wrigley/events">Events</a></li>
        	</ul>
        </div>
    </div>
</div>

</nav>

<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>


<!-- end of nav -->

	<div id="content" class="site-content">

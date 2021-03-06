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
	   <div class="col-xs-12 col-md-8 col-md-offset-2">
            <ul id="menu">
            	<li><a href="#about">About</a></li>
	            <li><a href="#menu_main">Menu</a></li>
	            <li class="logo_header"><a href="home"><img class="logo_a" src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="image_logo"></a></li>
	            <li><a href="#contact">Contact</a></li>
	            <li><a href="/events">Events</a></li>
			</ul>
		</div>

			<div class="col-xs-12 col-md-2">
				<div class="plain_container">
						<a class="plain" href="https://www.facebook.com/pages/The-Wrigley-Taproom-and-Brewery/577571682341250" target="_blank">
				  			<i class="fa fa-facebook"></i>
						</a>
						<a class="plain" href="https://twitter.com/the_wrigley" target="_blank">
							  <i class="fa fa-twitter"></i>
						</a>
						<a class="plain" href="https://instagram.com/thewrigleytaproom/" target="_blank">
							  <i class="fa fa-instagram"></i>
						</a>
				</div>
			</div>

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

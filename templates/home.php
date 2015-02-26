<?php
/**
 * Template Name: Home
 *
 *
 *
 *
 * @package wrigley
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


<div id="landing" style="background-image: url(<?php the_field('landing_bg'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<img src="<?php the_field('home_logo'); ?>" class="home_logo">
				<h1><?php the_field('home_header'); ?></h1>
				<a href="#about"><i class="fa fa-angle-double-down fa-4x"></i></a>
			</div>
		</div>
	</div>
</div>


<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2 class="center"><?php the_field('about_header'); ?></h2>
				<p><?php the_field('about_text'); ?></p>
				<button class="button_flat">Meet Us</button>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img src="<?php the_field('about_image'); ?>" class="image_full">
			</div>
		</div>
	</div>
</div>

<div class="break" style="background-image: url(<?php the_field('break_bg'); ?>);">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 center">
	      <h1><?php the_field('break_header'); ?></h1>
	    </div>
	  </div>
	</div>
</div>


<div id="menu_main" style="background-image: url(<?php the_field('menu_bg'); ?>);">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<?php the_field('menu_intro'); ?>
			<br>
			<br>
			<br>
		</div>
	</div>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">

<!-- START OF FIRST REPEATER -->
<?php

// check if the repeater field has rows of data
if( have_rows('menu') ):
  // loop through the rows of data
    while ( have_rows('menu') ) : the_row(); ?>
		<h4><?php the_sub_field('menu_header'); ?></h4>
			<ul class="menu_list">
	        <!-- START OF SECOND REPEATER FOR LIST -->
	        	<?php
	        		if( have_rows('menu_items') ):
						while ( have_rows('menu_items') ) : the_row(); ?>
	          <!-- // display a sub field value -->

							<li>
	              				<p><b><?php the_sub_field('item'); ?></b><?php the_sub_field('description'); ?><?php the_sub_field('price'); ?></p>
							</li>

	          			<?php endwhile;
	          		else :
	          // no rows found
	        	endif; ?>
	        <!-- END OF SECOND LIST REPEATER <-->
			</ul>
    <?php endwhile;
else :
    // no rows found
endif; ?>

<!-- END OF FIRST REPEATER -->

			</div>
		</div>
	</div>
</div>  <!-- end of =menu section -->


<div id="contact">
	<div class="contact_top">
		<div class="container">
			<div class="row">
				<div class="main_header">
					<h2>Come say hi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<h3 class="center">Location</h3>
					<p><?php the_field('about_address_desc'); ?></p>
					<p class="center"><?php the_field('about_address'); ?></p>
					<hr>
					<h3 class="center">Contact Us</h3>
					<p class="center"><i class="fa fa-phone"></i><?php the_field('about_phone'); ?></p>
					<p class="center"><i class="fa fa-envelope-o"></i><?php the_field('about_email'); ?></p>
				</div>
				<div class="col-xs-12 col-sm-6 center">
					<h3>Hours</h3>
					<p><i class="fa fa-times"></i><b><?php the_field('hours_intro'); ?></b><i class="fa fa-times"></i></p>

	<!-- start of =hours repeater -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('hours') ):
	 	// loop through the rows of data
	    while ( have_rows('hours') ) : the_row(); ?>

		<!-- display sub fields -->

	        <p class="small_margin"><b><?php the_sub_field('day'); ?></b></p>
	        <p class="bottom_margin"><?php the_sub_field('hours'); ?></p>
		
		<!-- end of sub fields -->

	    <?php endwhile;
	else :
	    // no rows found
	endif; ?>
	<!-- end of =hours repeater -->

				</div>	<!-- end of column -->
			</div>	<!-- end of row -->
		</div>	<!-- end of container -->
	</div>	<!-- end of contact_top -->  

	<div class="map_container">
		<?php echo do_shortcode('[wpgmza id="1"]') ; ?>
	</div>
</div>	<!-- end of =contact section-->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

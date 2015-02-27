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
			<div class="col-xs-12 col-sm-5">
				<h2 class="center"><?php the_field('about_header'); ?></h2>
				<p><?php the_field('about_text'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-7">
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
			<div class="col-xs-12">
			<div class="row">
			<div class="col-xs-12 col-sm-2">
				<h1 class="center ">MENUS</h1>
			</div>
			<div class="col-xs-12 col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1">
				<p class="outlined"><?php the_field('menu_intro'); ?></p>
			</div>
			</div>
			<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12">

<!-- START OF FIRST REPEATER -->
<?php

// check if the repeater field has rows of data
if( have_rows('menu') ):
  // loop through the rows of data
    while ( have_rows('menu') ) : the_row(); ?>
		<p class="menu_class"><b><?php the_sub_field('menu_header'); ?></b></p>
		<hr class="left_small">
			<ul class="menu_list">
	        <!-- START OF SECOND REPEATER FOR LIST -->
	        	<?php
	        		if( have_rows('menu_items') ):
						while ( have_rows('menu_items') ) : the_row(); ?>
	          <!-- // display a sub field value -->

							<li>
	              				<p><b><?php the_sub_field('item'); ?></b><?php the_sub_field('description'); ?>  <?php the_sub_field('price'); ?></p>
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

			</div>	<!-- end of col -->
		</div>	<!-- end of row -->


<br>
<br>
<p class="menu_class">beers</p>
<hr class="left_small">

		

<!-- begin beer menu repeater -->
<?php

// check if the repeater field has rows of data

$i = 1;

// open first column
echo '<div class="row">';

if( have_rows('beer_menu') ):

 	// <!-- // // loop through the rows of data -->
    while ( have_rows('beer_menu') ) : the_row(); ?>

       <!-- show each repeater item -->
		<div class="col-xs-12 col-sm-6">
        <p class="beer_p"><b><?php the_sub_field('beer'); ?></b></p>  <p class="beer_p"><?php the_sub_field('beer_desc'); ?></p>
		</div>
<!-- // if multiple of 3 close div and open a new div -->
     <?php if($i % 2 == 0) {echo '</div><div class="row">'; }

     $i++;
		//make sure open div is closed
		
    endwhile;

else :

    // no rows found

endif;
echo '</div>';
?>
<!-- end of beer menu repeater -->

		
	</div>	<!-- end of container -->
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
				<div class="col-xs-12 col-sm-5 col-sm-offset-1">
					<h3 class="center">Location</h3>
					<p><?php the_field('about_address_desc'); ?></p>
					<p class="center"><?php the_field('about_address'); ?></p>

					<hr class="no_small">

					<h3 class="center">Contact Us</h3>
					<p class="center small_margin"><i class="fa fa-phone reduce_margin"></i><?php the_field('about_phone'); ?></p>
					<p class="center small_margin"><i class="fa fa-envelope-o reduce_margin"></i><a href="mailto:kslarson1@gmail.com"><?php the_field('about_email'); ?></a></p>
					<div class="social_container">
						<span class="fa-stack fa-lg">
							<a href="https://www.facebook.com/pages/The-Wrigley-Taproom-and-Brewery/577571682341250" target="_blank">
	  							<i class="fa fa-circle fa-stack-2x"></i>
	  							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</a>
						</span>
						<span class="fa-stack fa-lg">
							<a href="https://www.linkedin.com/pub/emily-parsons/1b/870/178" target="_blank">
				  				<i class="fa fa-circle fa-stack-2x"></i>
				  				<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</a>
						</span>
						<span class="fa-stack fa-lg">
							<a href="https://www.linkedin.com/pub/emily-parsons/1b/870/178" target="_blank">
				  				<i class="fa fa-circle fa-stack-2x"></i>
				  				<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
							</a>
						</span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 center">
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

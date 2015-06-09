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


<div class="landing" style="background-image: url(<?php the_field('landing_bg'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<img src="<?php the_field('home_logo'); ?>" class="home_logo">
					<h1><?php the_field('home_header'); ?></h1>
			</div>
		</div>
	</div>
</div>


<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="box_out">
					<div class="box_thin">
						<h2 class="center"><?php the_field('about_header'); ?></h2>
						<div class="center">
							<i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i><i class="fa fa-asterisk"></i>
						</div>
						<br>
						<p><?php the_field('about_text'); ?></p>
						<a href="/events"><button class="button_ghost" style="margin-top: 1em">Events</button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="center">
					<img src="<?php the_field('about_image1'); ?>" class="image_rect">
					<img src="<?php the_field('about_image2'); ?>" class="image_rect">
				</div>
			</div>
		</div>

		<div class="reviews">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h3 class="center"><?php the_field('review_intro'); ?></h3>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="review_container">
						<a href="http://www.yelp.com/biz/the-wrigley-taproom-and-brewery-corbin" target="blank"><img src="<?php the_field('yelp_logo'); ?>" class="review_logo"></a>
						<a href="http://www.tripadvisor.com/Restaurant_Review-g39295-d7674793-Reviews-The_Wrigley_Taproom_and_Brewery-Corbin_Kentucky.html" target="blank"><img src="<?php the_field('trip_logo'); ?>" class="review_logo"></a>
						<a href="http://www.urbanspoon.com/r/183/1934836/restaurant/Kentucky/The-Wrigley-Taproom-and-Brewery-Corbin" target="blank"><img src="<?php the_field('urban_logo'); ?>" class="review_logo"></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>  <!-- end of =about -->

<!-- start of break -->
<div class="break" style="background-image: url(<?php the_field('break_bg'); ?>);">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 center">
	      <h1><?php the_field('break_header'); ?></h1>
	    </div>
	  </div>
	</div>
</div>  <!-- end of =break -->

<div id="menu_main" style="background-image: url(<?php the_field('menu_bg'); ?>);">
	<div id="menu_small">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
					<hr class="gray">
						<div class="col-xs-12">
							<h1 class="center">MENU</h1>	
						</div>
					<hr class="gray">
					</div>
				<br>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">

<!-- START OF FIRST REPEATER -->
<?php

// check if the repeater field has rows of data
if( have_rows('menu') ):
  // loop through the rows of data
    while ( have_rows('menu') ) : the_row(); ?>
		<p class="menu_class"><b><?php the_sub_field('menu_header'); ?></b><p class="margin_min"><?php the_field('menu_update'); ?></p>
		<hr class="left_small">
			<ul class="menu_list">
	        <!-- START OF SECOND REPEATER FOR LIST -->
	        	<?php
	        		if( have_rows('menu_items') ):
						while ( have_rows('menu_items') ) : the_row(); ?>
	          <!-- // display a sub field value -->

							<li>
	              				<p class="right_pad"><b><?php the_sub_field('item'); ?></b><?php the_sub_field('description'); ?>  <?php the_sub_field('price'); ?></p>
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
<div class="row">
	<div class="col-xs-12">
<p class="menu_class"><b>beer</b></p><p class="margin_min"><?php the_field('beer_update'); ?></p>
<hr class="left_small">
</div>
</div>


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

<br>
<br>

<div class="row">
	<div class="col-xs-12">
		<p class="menu_class"><b>bourbon</b></p><p class="margin_min"><?php the_field('bourbon_text'); ?></p>
		<hr class="left_small">
	</div> <!-- end of bourbon col -->
</div>

<!-- begin bourbon menu repeater -->
<?php

// check if the repeater field has rows of data

$i = 1;

// open first column
echo '<div class="row">';

if( have_rows('bourbon_menu') ):

 	// <!-- // // loop through the rows of data -->
    while ( have_rows('bourbon_menu') ) : the_row(); ?>

       <!-- show each repeater item -->
		<div class="col-xs-12 col-sm-6">
        <p class="beer_p"><b><?php the_sub_field('bourbon_name'); ?></b></p>  <p class="beer_p"><?php the_sub_field('bourbon_desc'); ?></p>
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
<!-- end of bourbon menu repeater -->




<div class="row">
	<div class="col-xs-12">
	<p class="menu_class"><b>wine</b></p><p class="margin_min"><?php the_field('wine_text'); ?></p>
		<hr class="left_small">
	</div> <!-- end of bourbon col -->
</div>

<!-- begin wine menu repeater -->
<?php

// check if the repeater field has rows of data

$i = 1;

// open first column
echo '<div class="row">';

if( have_rows('wine_menu') ):

 	// <!-- // // loop through the rows of data -->
    while ( have_rows('wine_menu') ) : the_row(); ?>

       <!-- show each repeater item -->
		<div class="col-xs-12 col-sm-6">
        <p class="beer_p"><b><?php the_sub_field('name'); ?></b></p>  <p class="beer_p"><?php the_sub_field('description'); ?></p>
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
<!-- end of bourbon menu repeater -->

	</div> <!-- end of wine col -->
</div> <!-- end of row -->


		
	</div>	<!-- end of container -->
</div>  <!-- end of =menu_small section -->
</div>  <!-- end of =menu_main section -->


<div class="break" style="background-image: url(<?php the_field('break_bg'); ?>);">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 center">
				<h1><?php the_field('about_intro'); ?></h1>
			</div>
		</div>
	</div>
</div>

<div id="contact">
	<div class="contact_top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="box_out">
					<div class="box_thin">
						<h3 class="center">Location</h3>
						<hr>
						<p><?php the_field('about_address_desc'); ?></p>
						<p class="center"><?php the_field('about_address'); ?></p>
					</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4">
					<div class="box_out">
					<div class="box_thin">
						<h3 class="center">Contact Us</h3>
						<hr>
						<p class="center small_margin"><i class="fa fa-phone reduce_margin"></i><?php the_field('about_phone'); ?></p>
						<p class="center small_margin"><i class="fa fa-envelope-o reduce_margin"></i><a href="mailto:<?php the_field('about_email_1'); ?>"><?php the_field('about_email_1'); ?></a></p>
						<p class="center small_margin"><i class="fa fa-envelope-o reduce_margin"></i><a href="mailto:<?php the_field('about_email_2'); ?>"><?php the_field('about_email_2'); ?></a></p>
						<p class="center small_margin"><i class="fa fa-envelope-o reduce_margin"></i><a href="mailto:<?php the_field('about_email_3'); ?>"><?php the_field('about_email_3'); ?></a></p>
						<br>
						<div class="social_container">
							<span class="fa-stack fa-lg">
								<a href="https://www.facebook.com/pages/The-Wrigley-Taproom-and-Brewery/577571682341250" target="_blank">
		  							<i class="fa fa-circle fa-stack-2x"></i>
		  							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="https://twitter.com/the_wrigley" target="_blank">
					  				<i class="fa fa-circle fa-stack-2x"></i>
					  				<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="https://instagram.com/thewrigleytaproom/" target="_blank">
					  				<i class="fa fa-circle fa-stack-2x"></i>
					  				<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</a>
							</span>
						</div>
					</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 center">
					<div class="box_out">
					<div class="box_thin">
						<h3>Hours</h3>
						<hr>
						<p><i class="fa fa-times"></i><?php the_field('hours_intro'); ?><i class="fa fa-times"></i></p>

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
					</div>
					</div>
						</div>	<!-- end of column -->
				</div>	<!-- end of row -->
		</div>  <!-- end of container -->
	</div>	<!-- end of contact_top -->  



	<div class="map_container">
		<?php echo do_shortcode('[wpgmza id="1"]') ; ?>
	</div>
</div>	<!-- end of =contact section-->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * Template Name: About
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

<div id="about_us">

		
	<div class="landing2" style="background-image: url(<?php the_field('aboutus_image1'); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h1 class="center"><?php the_field('aboutus_header'); ?></h1>
				</div>
			</div>
		</div>
	</div>



	<!-- START OF Founders -->	
	<div id="founders">
		<div class="container">
			<div class="row">
				<ul class="ch-grid">
				<!-- BEGIN REPEATER -->
			<?php
			// check if the repeater field has rows of data
			if( have_rows('aboutus_founders') ):
			 	// loop through the rows of data
			    while ( have_rows('aboutus_founders') ) : the_row(); ?>
			      <!--   // display a sub field value -->
			      	
			     	<div class="col-xs-12 col-sm-6 col-md-4">
			     		<div class="aboutus_item">
				     		<li>
					     		<div class="ch-item" style="background-image: url(<?php the_sub_field('aboutus_founder_image'); ?>)">
							      	<div class="ch-info" >
							      		<h3><?php the_sub_field('aboutus_founder_name'); ?></h3>
							      		<p><?php the_sub_field('aboutus_founder_fact'); ?></p>
							      	</div>
						      	</div>
					      	</li>
					      	<!-- END OF CIRCLE IMAGE -->
					      	<div class="aboutus_item_container">
					      		<h3 class="center" style="margin: 0"><?php the_sub_field('aboutus_founder_name'); ?></h3>
					        	<p style="margin-top: 0"><?php the_sub_field('aboutus_founder_text'); ?></p>
					        </div>
				        </div>
				    </div>
			       <?php 
			    endwhile;
			else :
			    // no rows found
			endif;
			?>
				<!-- END OF REPEATER -->
				</ul>
			</div>
		</div>
	</div>  <!-- end of founders -->

	<div class="about_top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<div class="box_out">
						<div class="box_thin2">
							<h2 class="center"><?php the_field('aboutus_intro'); ?></h2>
							<p><?php the_field('aboutus_text'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- end of about_top -->


<div class="landing2" style="background-image: url(<?php the_field('aboutus_image2'); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h1 class="center"><?php the_field('sources_header'); ?></h1>
				</div>
			</div>
		</div>
	</div>


	<div class="sources">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<p><?php the_field('sources_text'); ?></p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 center">
					<a href="/events"><button class="button_ghost" style="margin-top: 1em">Visit</button></a>
				</div>
			</div>
		</div>
	</div>


</div> <!-- end of about -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

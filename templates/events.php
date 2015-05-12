<?php
/**
 * Template Name: Events
 *
 * @package wrigley
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


<div id="events_bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Event Calendar</h1>
				<p><?php the_field('events_header'); ?></p>
				<hr	class="event_line">
				<br>
				<br>
			</div>
		</div>

		<div class="calender_g">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
						<?php echo do_shortcode('[gcal id="89"]'); ?>  <!-- google calendar -->
				</div>
				<div class="col-xs-12 col-sm-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

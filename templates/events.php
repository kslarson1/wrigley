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


<div id="blog_roll">
	<div class="container">
		<div class="row">
				<div class="col-xs-12 col-sm-8">
					<?php get_template_part( 'content', 'page' ); ?>

						<?php $my_query = new WP_Query('showposts=2'); ?>
						<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<h1 class="center"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
						<?php endwhile; ?>

				</div>
			<div class="col-xs-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

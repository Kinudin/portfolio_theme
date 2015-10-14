<!-- 
	Template name: About	
 -->
<?php get_header(); ?>
<!-- ##About -->
	<main role="main">
		<!-- section -->
		
		<section id="about-me">
	
			<!-- <h1><?php the_title(); ?></h1> -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<div class="small-6 medium-6 large-6 columns">
				<?php the_post_thumbnail('large'); ?>			
			</div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="small-6 medium-6 large-6 columns about-me">
				<h1>
					A little about me...
				</h1>
				<?php the_content(); ?>
			</div>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php // edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>

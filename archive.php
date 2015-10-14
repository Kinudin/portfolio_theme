<!-- 
	Template Name: BLog
 -->

<?php get_header(); ?>
<!-- ##THings -->
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quas quod placeat soluta. Iure quasi inventore quas in deserunt, quae minima asperiores, nam, quidem, vel error laborum officiis nobis voluptates! Sed animi illo, unde iste error et? Perspiciatis, asperiores, id rem dignissimos, provident, maxime culpa in laboriosam architecto repellat totam?
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

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

<?php get_sidebar(); ?>

<?php get_footer(); ?>

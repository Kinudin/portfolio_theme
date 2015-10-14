<!-- 
	Template name: Projects	
 -->
<?php $projects = new WP_Query(array('post_type' => 'project')); ?>
<?php get_header(); ?>
<!-- ##Projects -->
	<main role="main">
		<!-- section -->
		<div class="large-12">
		<section>
	
			 <h1><?php //the_title(); ?></h1>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<!-- article -->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php // edit_post_link(); ?>
			</article>
			<!-- /article -->
		</div>
		
		<?php endwhile; ?>

		
		<?php else: ?>

			
			<!-- /article -->

		<?php endif; ?>


		</section>
		<!-- /section -->
		
			<div class="large-12 columns">	
				<?php while($projects->have_posts()) : $projects->the_post(); ?> <?php //Loop for projects ?>
					<?php $skills = get_field('technology_used'); ?>
				<div class="project small-12 medium-6 large-12 columns">	
					<div class="row">
						<a href="<?php the_permalink(); ?>">
						<div class="large-6"><?php the_post_thumbnail('full'); ?></div>
						<div class="large-4 columns project-description">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
						</div>
						<div class="large-2 large-pull-1 columns">
								<h2>Skills Used</h2>
								<ul>
									<?php 
									foreach($skills as $skill){
										echo('<li>'.$skill.'</li>');
									} ?>
								</ul>
							</div>

						</a>
						
					</div> <!-- End Row Div -->
				</div> <!-- End Project Div -->
						<?php endwhile; ?>
			</div><!-- /large 12-->
	</main>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>

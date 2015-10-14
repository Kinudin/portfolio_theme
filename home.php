<!-- 
	Template name: Home	
 -->
<?php get_header(); ?>
<?php $about_me = new WP_Query(array('post_type' => 'about_me')); ?>
<!-- ##Home -->
</div> <!-- End the wrapper for only the first page to make this section full screen-->
		<section class="hero-intro">
			<!-- <h1><?php the_title(); ?></h1>-->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?> about-hero" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php // edit_post_link(); ?>

			</article>
			<!-- /article -->
		<?php endwhile; ?>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
<div class="wrapper">
	<main role="main">
		<!-- section -->

		<!-- About Me Section -->
		<div class="row">
			<?php while($about_me->have_posts()) : $about_me->the_post(); ?>
				<div class="about-me small-12 medium-6 large-6 columns">	
					
						<?php the_post_thumbnail('full'); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
					
				</div> <!-- End About Loop -->
			<?php endwhile; ?>
		</div> <!-- End About Row --> 
		
		<section>
		<div class="row" id="contact-section"> <!-- Contact Form -->
			<div class="large-12 collapse columns"> 
				<div class="large-7 columns collapse" id="contact-text-box">
					<h2>Let's Chat!</h2>
					<span><p>I would love to hear about your next project! I’m currently available to go over what projects you may be interested in producing.</p> 

						<p>
							Just fill out the form to the right, and I will get back to you as soon as possible to talk about your inquiry!
						</p>
					</span>
				</div>
				<div class="large-5 columns collapse" id="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="71" title="Contact Form" html_class="contact-form"]' ); ?>
				</div>
			</div>
		</div>
		</section>
	</main>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>

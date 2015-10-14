<!-- 
	Template name: Single Project	-->
<?php get_header(); ?>
<?php 	
	$externallink = "<a href='".get_field('external_link')."'> Check It Out! </a>";
	$skillsused = get_field('technology_used');
	$gallery = get_field('gallery_shortcode');
	$file = get_field('file');
	$backgroundimg = get_field('image');
	$yt_link = get_field('youtube_link');
	?>
<?php if(get_field('image')): ?>
<style type="text/css">
	.background-img{
		background-image: url("<?php echo $backgroundimg['url']; ?>");
		height: 20vh;
		background-size: contain;
		background-attachment: fixed;
		margin-top: 79px;
		background-repeat: no-repeat;
	}
</style>
<?php else: ?>
	<style>
		#project-details{
			border-top: 5px solid black;
			margin-top: 79px;
		}
	</style>
<?php endif ?>
<!-- ##Single Project -->
</div>
<?php if(get_field('image')): ?>
	<!-- This is where you're going to place the big hero image on the top. Neato. -->
	<div class="background-img hide-for-small"> </div> 
<?php endif ?>
<div class="wrapper">
	<main role="main">
	<!-- section -->
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php 
		// 
		?>
<!-- 		<div id="directions">
			<span class="arrow_box_prev" id="previous-post"><?php previous_post('%', 'Prev ', 'no'); ?></span>
			<span class="arrow_box_next" id="next-post"><?php next_post('%', 'Next', 'no'); ?></span> 
		</div> -->



		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>>

			<!-- post title -->
			<div class="small-12 medium-12 large-12 columns" id="project-details">
				<div class="medium-12 large-3 columns" id="project-title"> <!-- Project Title -->
					<div class="row"> 
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h1>
					</div>
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<?php if(get_field('external_link')): ?>
						<div class="large button external-button">
							<button> <?php echo $externallink; ?></button>
						</div>
					<?php endif ?>
					<?php if(get_field('file')): ?>
						<div class="large button external-button">
							<button><a href="<?php the_field('file');?>">Download Example</a></button>
						</div>
					<?php endif ?>
					<?php if(get_field('youtube_link')): ?>		
						<div class="large button external-button">
							<button><a href="<?php echo $yt_link ?>" target="_blank">Watch Video</a></button>
						</div> 
					<?php endif ?>
				</div> <!-- End project title-->
			<!-- /post title -->

			<!-- post details -->
					<article class="large-6 medium-9 columns">
						<?php the_content(); // Dynamic Content ?>

					</article>
					<div class="large-3 medium-3 columns">
							<aside>
								<h3>Technology Used</h3>
								<ul>
								<?php foreach($skillsused as $skill){
										echo('<li>'.$skill.'</li>');
									} ?>
								</ul>
							</aside>
					</div>  <!-- End Technology Used-->
				</div> <!-- End project details -->

			</div> <!-- End Project Description Content -->
			<?php if(get_field('gallery_shortcode')): ?>


				<div class="row"> <!-- Product Gallery Thumbnail going into Lightbox -->
						<div class="project-images">
							<!-- post thumbnail -->
								<?php echo(do_shortcode($gallery)); ?>
							<!-- /post thumbnail -->
						</div>
			<?php endif ?>

					<div class="small-12 medium-12 large-12 columns">
	
				</div>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
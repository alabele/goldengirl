<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content container">
		<div id="content" class="row case-study-row" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$client = get_field('client');
				$skills = get_field('skills');
				$project = get_field('project_type');
				$link = get_field('site_link');
				$image1 = get_field('image_1');
				$image2 = get_field('image_2');
				$image3 = get_field('image_3');
				$size = "large";
			?>
				
			<div class="case-study-sidebar col-lg-6 col-md-6">
				<div class="case-study-overview">
					<h2><?php the_title(); ?></h2>
					<div class="dark">
						<h5>PROJECT TYPE: <?php echo $project; ?>  </h5>
						<h5>SKILLS: <?php echo $skills; ?> </h5>
					</div>	
					<div class="gold-bar"></div>
					<p><?php the_content(); ?></p>
					<?php if($link) { ?>
						<a href="<?php echo $link; ?>">Visit Live Site</a>
					<?php } ?>
				</div>
			</div>	
			<div class="case-study-images col-lg-6 col-md-6">		
				<?php if($image1) { ?>
					<?php echo wp_get_attachment_image( $image1, $size ); ?>
				<?php } ?>
				<br>
				<br>
				<?php if($image2) { ?>
					<?php echo wp_get_attachment_image( $image2, $size ); ?>
				<?php } ?>
				<br>
				<br>
				<?php if($image3) { ?>
					<?php echo wp_get_attachment_image( $image3, $size ); ?>
				<?php } ?>			
			</div>
			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
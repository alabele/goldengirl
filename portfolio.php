<?php
/**
 * The template for displaying case studies
 *
 * @package goldengirl
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image1 = get_field('image_1');
				$image2 = get_field('image_2');
				$image3 = get_field('image_3');
				$size = "full";
			?>
				
		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $services; ?>  </h5>
			<h6><?php echo $client; ?></h6>

			<p><?php the_content(); ?></p>

			<h4><a href="<?php echo $link; ?>">Visit Live Site</a></h4>

		</aside>

		<div class="case-study-images">	
			<?php if($image1) { ?>
				<?php echo wp_get_attachment_image( $image1, $size ); ?>
			<?php } ?>
			<br>
			<?php if($image2) { ?>
				<?php echo wp_get_attachment_image( $image2, $size ); ?>
			<?php } ?>
			<br>
			<?php if($image3) { ?>
			<br>
				<?php echo wp_get_attachment_image( $image3, $size ); ?>
			<?php } ?>			
		</div>
<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
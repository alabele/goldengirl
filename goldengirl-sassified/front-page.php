<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content container">
		<div class="row home-main-row">
			<div class="home-main-image col-sm-5 col-md-5 col-lg-5">
				<img src="<?php echo get_field("page_main_image"); ?>"/>
			</div> <!-- .home-main-image -->	
			<div class="home-content col-sm-7 col-md-7 col-lg-7">
				<div class="home-overview">
					<h1>Howdy! </h1>
					<?php the_content(); ?>
					<!--<section class="ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large"></section>  -->
				</div><!-- .home-overview -->	
			</div><!-- .content-container-->
		</div><!-- .row -->
		<div class="row">
			<div class="gold-bar col-md-12 col-sm-12 col-xs-12 col-lg-12"></div>
			<div class="main-featured-title">
				<h1>My Work</h1>
			</div>
		</div>
		<div class="row">
			<div class="main-featured">
				<?php query_posts('posts_per_page=3&post_type=portfolio&cat=5'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image = get_field("image_1");
					?>
					 <div class="col-md-4 col-lg-4 homepage-portfolio-tile">
			            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>"/></a>
			            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			        </div><!-- .col-lg-4-->		
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>		
			</div><!-- .main-featured-->	
		</div><!--.row-->	
		<div class="row">
			<div class="main-featured">
				<?php query_posts('posts_per_page=3&post_type=portfolio&cat=6'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image = get_field("image_1");
					?>
					 <div class="col-md-4 col-lg-4 homepage-portfolio-tile">
			            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>"/></a>
			            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			        </div><!-- .col-lg-4-->		
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>		
			</div><!-- .main-featured-->	
		</div><!--.row-->	
		<div class="row">
			<div class="main-featured">
				<?php query_posts('posts_per_page=3&post_type=portfolio&cat=7'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image = get_field("image_1");
					?>
					 <div class="col-md-4 col-lg-4 homepage-portfolio-tile">
			            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>"/></a>
			            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			        </div><!-- .col-lg-4-->		
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>		
			</div><!-- .main-featured-->	
		</div><!--.row-->	
	</div><!-- #primary -->
<?php get_footer(); ?>


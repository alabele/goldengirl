<?php
/**
*Template Name: Contact Page
 * The template for the contact page
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
					<h1><?php echo get_field("page_subtitle"); ?></h1>
					<?php the_content(); ?>
					<?php get_sidebar(); ?>
				</div><!-- .home-overview -->	
			</div><!-- .content-container-->
		</div><!-- .row -->
	</div><!-- #primary -->
<?php get_footer(); ?>


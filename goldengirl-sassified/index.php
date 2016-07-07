<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package goldengirl-sassified
 */

get_header('blog'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<div class="row">
				<div class="index-page-content col-md-9">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- . index-page-content -->	
				<div class="index-page-sidebar col-md-3 page-sidebar-static" id="page-sidebar">
					<div class="sidebar-wrapper">
						<img class="img-responsive animated bounceIn" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/bouganvilla.png"/>
						<img class="img-responsive animated bounceIn" id="index-sidebar-headshot" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/mommy-and-maeve1.png"/>
						<!--<img class="img-responsive animated bounceIn" id="index-sidebar-headshot" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/blue-gummy-bear.png"/>
						<img class="img-responsive animated bounceIn" id="index-sidebar-headshot" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/volvo.png"/>-->
            <section class="ha-waypoint-sidebar" data-animate-down="page-sidebar-fixed" data-animate-up="page-sidebar-static"></section>
						<?php dynamic_sidebar( 'index-page-sidebar' ); ?>
					</div>	 
				</div><!-- .index-page-sidebar -->
			</div><!-- .row -->		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

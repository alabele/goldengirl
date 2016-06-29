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
				<div class="col-md-9">
					<?php
					if ( have_posts() ) :

						 ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
				</div><!-- .col-md-9 -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-lg-12">
					<select name="cars">
					
					<?php $terms = get_terms( array(
					    'taxonomy' => 'tech_category',
					    'hide_empty' => false,
					) ); ?>
					    <?php foreach ( $terms as $term ) {
					        echo '<option value="'. $term->slug.'">' . $term->name . '</option>';
					    }
					?>
					</select>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
			<div class="row">
				<div class="index-page-content col-md-9">				
						<?php
						

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
			</div><!-- .row -->		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

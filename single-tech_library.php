<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package goldengirl-sassified
 */

get_header('blog'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<div class="row">
				<div class="col-md-9 single-post-content">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div><!-- .single-post-content -->
				<div class="col-md-3 single-post-sidebar">
				<h3 class="recent-posts-header">More Good Stuff</h3>
					<?php
					    $recentPosts = new WP_Query();
					    $recentPosts->query('showposts=5');
					?>
					<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
					    <div class="recent-post-container">
					    	<?php the_post_thumbnail() ?>
					    	<?php the_title('<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>'); ?></a>
					    </div>
					<?php endwhile; ?>
				</div><!-- .single-post-sidebar -->	
			</div><!-- .row-->	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
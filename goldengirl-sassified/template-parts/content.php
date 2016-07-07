<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package goldengirl-sassified
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) { ?>
				<h3 class="entry-category">
					<?php the_category(' | '); ?>
				</h3>	
				<?php the_title( '<h1 class="entry-title">', '</h1>' );
			} else { ?>
				<h3 class="entry-category">
					<?php the_category(' | '); ?>
				</h3>	
				<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<ul>
				<li><?php the_time( 'l, F jS, Y'); ?></li>
				<li><span>By: </span><?php the_author(); ?></li>
			</ul>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Keep reading %s <span class="meta-nav"></span>', 'goldengirl-sassified' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goldengirl-sassified' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //goldengirl_sassified_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

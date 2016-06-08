<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldengirl-sassified
 */

?>

	</div><!-- #content -->
	<div class="container site-footer">
		<footer id="colophon" role="contentinfo">
			<div class="row">
				<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-sidebar footer-left">
					<?php dynamic_sidebar( 'footer-left' ); ?>
				</div>
				<div  class="col-xs-12 col-sm-8 col-md-8 col-lg-8 footer-sidebar footer-right">
					<?php dynamic_sidebar( 'footer-right' ); ?>
				</div>
			</div><!--row -->	
				<div class="row" id="website-info">
					<p>Goldengirl Theme by @laurenabele </p>
				</div><!-- .site-info -->
			</div><!-- .row -->	
		</footer><!-- #colophon -->
	</div><!-- .container-fluid-->	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
	<div class="container-fluid site-footer">
		<footer id="colophon" role="contentinfo">
			<div class="row">
				<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-sidebar footer-left">
					<?php dynamic_sidebar( 'footer-left' ); ?>
				</div>
				<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-sidebar footer-center">
					<?php dynamic_sidebar( 'footer-center' ); ?>
				</div>
				<div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-sidebar footer-right">
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
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5MVQB2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MVQB2');</script>
<!-- End Google Tag Manager -->
<?php wp_footer(); ?>

</body>
</html>

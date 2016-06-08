<?php
/**
*Template Name: About Page
 * The template for the About Page.
 *
 * @package goldengirl
 */

get_header(); ?>
<body onload="initMap();">
	<div id="primary" class="site-content container">
		<div class="row">
			<div id="content" role="main" class="about-page">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="content-side-header about-content-container col-lg-4 col-md-4">
						<!--<h1><?php the_title(); ?></h1> -->
						<img src="<?php echo get_field("page_main_image"); ?>"/>
					</div>	
					<div class="content col-lg-8 col-md-8">
						
						<?php the_content(); ?>
					</div>		
				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- .row -->
		<div class="row map-section">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 map-title">
					<img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/about-austin.png'>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 hidden-xs map-description">
					<p><?php echo get_field("map_description"); ?></p>
				</div>	
			</div><!-- .row-->
			<!--Start Map -->
	      	<div class="row map-row">
	      		<div class="col-lg-4 col-md-4">
	      			<table>
	      				<tbody>
		      				<tr>
		      					<td><img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus1.png'></td>
		      					<td><a href="http://www.joscoffee.com/" target="_blank">Jo's Coffee Downtown</td>
		      				</tr>
		      				<tr>
		      					<td><img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus2.png'></td>
		      					<td><a href="http://www.muelleraustin.com/thinking-green/parks/" target="_blank">Mueller Greenway</a></td>
		      				</tr>
		      				<tr>
		      					<td><img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus3.png'></td>
		      					<td><a href="http://www.elixercoffee.com/" target="_blank">Elixir Coffee Truck</a></td>
		      				</tr>
		      				<tr>
		      					<td><img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus4.png'></td>
		      					<td><a href="http://www.supatx.com/rentals/" target="_blank">SUP ATX Paddleboard Rentals</a></td>
		      				</tr>
		      				<tr>
		      					<td><img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus5.png'></td>
		      					<td><a href="https://drafthouse.com/austin" target="_blank">Alamo Drafthouse</a></td>
		      				</tr>
	      				</tbody>	
	      			</table>	
	      		</div>	
	    		<div class="map-canvas col-lg-8 col-md-8">
	          		<div id="map"></div>
	        	</div>
	      	</div><!--End Map .row-->
	    </div><!--end .map-section -->  		
	</div><!-- #primary .container-->
</body>        	
<?php get_footer(); ?>
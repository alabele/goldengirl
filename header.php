<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldengirl-sassified
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
//Google Maps Script
   function initMap() {
  var customMapType = new google.maps.StyledMapType([
      {
        stylers: [
          {hue: 'ffff00'},
          {visibility: 'simplified'},
          {"saturation": -90},
          {gamma: 0.5},
          {weight: 0.5}
        ]
      },
      {
        featureType: "poi.business",
        elementType: 'labels',
        stylers: [{visibility: 'off'}]
      },
    ], {
      name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
     center: {lat: 30.282006, lng: -97.742136}, 
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
    }
  });
  var image = '<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus1.png';
  var marker = new google.maps.Marker({
    position: {lat: <?php echo get_field("latitude"); ?>, lng: <?php echo get_field("longitude"); ?>},
    map: map,
    icon:image,
  });
  var image1 = '<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus2.png';
  var marker1 = new google.maps.Marker({
    position: {lat: 30.288441, lng:  -97.701140 },
    map: map,
    icon:image1,
  });
  var image2 = '<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus3.png';
  var marker2 = new google.maps.Marker({
    position: {lat: 30.296590, lng:  -97.708091 },
    map: map,
    icon:image2,
  });
  var image3 = '<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus4.png';
  var marker3 = new google.maps.Marker({
    position: {lat: 30.272261, lng:  -97.768852 },
    map: map,
    icon:image3,
  });
  var image4 = '<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/cactus5.png';
  var marker4 = new google.maps.Marker({
    position: {lat: 30.255795, lng:  -97.763280 },
    map: map,
    icon:image4,
  });

  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);
}

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'goldengirl' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!--NEW NAV -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
      <div class="clearfix"></div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php dynamic_sidebar( 'header_widget' ); ?>
        </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
          <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav navbar-center',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'link_before' => '<span class="link-hover">', 
                    'link_after' => '</span>',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
      </div><!-- .container-->
    </nav>
    <!-- END BOOTSTRAP NAV-->
		<div class="main-hero">
			<div class="title-banner">
					<h1><?php bloginfo( 'name' ); ?></h1>
			</div>	
			<!--<div class="content">
				<?php while ( have_posts() ): the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
				<?php endwhile; ?> 
			</div>-->
			<div class="main-hero-fade"></div>
		</div><!-- END MAIN HERO-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

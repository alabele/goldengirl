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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzqZ7nKDFcOe4-1ajTv2qNb9Yo5mLi8wE&callback=initMap"
  type="text/javascript"></script> 
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, -78.5463),
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
  }
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'goldengirl' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

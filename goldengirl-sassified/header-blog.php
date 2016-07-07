<?php
/**
 * The header for the single blog page.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
// Animated Navigation Script - 100% offset
$(document).ready(function () {
      var $head = $( '#ha-header' );
      $( '.ha-waypoint' ).each( function(i) {
        var $el = $( this ),
          animClassDown = $el.data( 'animateDown' ),
          animClassUp = $el.data( 'animateUp' );

        $el.waypoint( function( direction ) {
          if( direction === 'down' && animClassDown ) {
            $head.attr('class', 'ha-header ' + animClassDown);
          }
          else if( direction === 'up' && animClassUp ){
            $head.attr('class', 'ha-header ' + animClassUp);
          }
        }, { offset: '100%' } );
      } );

        });

// Animated Navigation Script - 50% offset
$(document).ready(function () {
      var $head = $( '#ha-header' );
      $( '.ha-waypoint-half' ).each( function(i) {
        var $el = $( this ),
          animClassDown = $el.data( 'animateDown' ),
          animClassUp = $el.data( 'animateUp' );

        $el.waypoint( function( direction ) {
          if( direction === 'down' && animClassDown ) {
            $head.attr('class', 'ha-header ' + animClassDown);
          }
          else if( direction === 'up' && animClassUp ){
            $head.attr('class', 'ha-header ' + animClassUp);
          }
        }, { offset: '300px' } );
      } );

        });

// Animated Navigation Script - 480px offset
$(document).ready(function () {
      var $sidebar = $( '#page-sidebar' );
      $( '.ha-waypoint-sidebar' ).each( function(i) {
        var $el = $( this ),
          animClassDown = $el.data( 'animateDown' ),
          animClassUp = $el.data( 'animateUp' );

        $el.waypoint( function( direction ) {
          if( direction === 'down' && animClassDown ) {
            $sidebar.attr('class', 'index-page-sidebar col-md-3 ' + animClassDown);
          }
          else if( direction === 'up' && animClassUp ){
            $sidebar.attr('class', 'index-page-sidebar col-md-3 ' + animClassUp);
          }
        }, { offset: '450px' } );
      } );

        });

// Animated Navigation Script - 480px offset
$(document).ready(function () {
      var $sidebar = $( '#single-page-sidebar' );
      $( '.ha-waypoint-single-sidebar' ).each( function(i) {
        var $el = $( this ),
          animClassDown = $el.data( 'animateDown' ),
          animClassUp = $el.data( 'animateUp' );

        $el.waypoint( function( direction ) {
          if( direction === 'down' && animClassDown ) {
            $sidebar.attr('class', 'index-page-sidebar col-md-3 ' + animClassDown);
          }
          else if( direction === 'up' && animClassUp ){
            $sidebar.attr('class', 'index-page-sidebar col-md-3 ' + animClassUp);
          }
        }, { offset: '436px' } );
      } );

        });
    </script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'goldengirl' ); ?></a>

  <header id="ha-header" class="ha-header ha-header-large">
    <!--NEW NAV -->
    <div class="ha-header-top">
      <nav class="navbar navbar-default">
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
     </div><!--.ha-headero-top--> 
  </header><!-- #masthead -->
      <div class="blog-hero">

      <?php if( 'tech_library' == get_post_type() ) { 
        //do other stuff
        ?>
    
        <img class="img-responsive" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/tech-library-hero2.png"/>
      
      <?php } elseif( 'design_library' == get_post_type() ) {
          //do other stuff
          ?>
          <img class="img-responsive" src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/images/design-library-hero2.png"/>
          <?php } else {
          //do other stuff
          ?>

          <img class="img-responsive" src="<?php echo esc_url( site_url( '/' ) ); ?>/wp-content/themes/goldengirl-sassified/images/blog-header-laurenabele.png"/>
        <?php } ?>
      
    </div><!-- .blog-hero -->
    <div class="clear-fix"></div>
  <div id="blog-content" class="site-content">
 <section class="ha-waypoint-half" data-animate-down="ha-header-small" data-animate-up="ha-header-large"></section> 
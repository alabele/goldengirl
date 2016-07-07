<?php
/**
*Template Name: Ebook Landing Page
 * The template for the Ebook Landing Page.
 *
 * @package goldengirl
 */

get_header('landing-page'); ?>
<?php while ( have_posts() ) : the_post(); 
        $heroimage = get_field('hero_image');
        $heroheadline = get_field('hero_headline');
        $herosubtitle = get_field('hero_subtitle');
        $section1image = get_field('section_1_image');
        $section5image = get_field('section_5_image');
        $authorimage = get_field('author_image');
        $size = "full";
        $sectionsize ="section_image";
      ?>



<!--START HERO CONTAINER-->
<div class="lp-full-width lp-hero" id="lp-hero-image">
  <div class="container">
    <!--START HERO SECTION-->
    <div class="step-1-row row" id="vapolli-hero">
      <div class="col-md-7 col-lg-7 col-xl-7 col-sm-7 col-xs-7 pull-right" id="hero-headline">
        <img id="lp-brand-logo" src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/vapolli-orange-logo.png'>
        <h1 class="step"><?php echo $heroheadline; ?> </h1>
        <h3 id="step-2-tagline" class="hidden-xs"><?php echo $herosubtitle; ?> </h3>
        <a name="mailchimp">
          <div id="hero-button">
            <a href="#mailchimp"><label>Get the FREE eBook!</label></a>
          </div> 
        </a> 
      </div>
     </div><!--End row--> 
  </div><!--end .container -->
</div><!-- end .lp-full-width -->
<!--END HERO CONTAINER-->
<!--START STEP 2 CONTAINER -->
<div class="lp-full-width">
  <div class="container"> 
    <!--START STEP 2  SECTION-->
    <div class="row step-row" id="step-2-row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="step" id="step-2-title"><?php echo get_field('step_2_headline')?></h2>
        <p><?php echo get_field('step_2_text')?></p> 
      </div>
    </div>
    <!--START MAILCHIMP ROW -->
    <div class="row step-row form-row">
      <div class="col-sm-2 col-md-2 col-lg-2"> 
        <img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/vapolli-mc-logo2.png'>
      </div> 
      <div class="col-sm-10 col-md-10 col-lg-10">
        <div class="mailchimp-form-container">
          <a name="mailchimp"></a>
          <?php echo get_field('mailchimp_embed_code')?>
          <div class="clear"></div>
         </div> 
      </div>  
    </div><!-- END MAILCHIMP ROW-->
  </div><!--end .container-->
</div><!-- end .lp-full-width     
<!--END STEP 2 CONTAINER-->
<!--START BANNER CONTAINER-->
<div class="lp-full-width" id="lp-banner-image">
  <div class="container">
    <div class="banner-row row">
      <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 banner-headline">
        <h1 class="step"><?php echo get_field('banner_headline')?> </h1>
      </div>
     </div><!--End row--> 
  </div><!--end .container -->
</div><!-- end .lp-full-width -->
<!--END BANNER CONTAINER-->
<!--START STEP 3  CONTAINER-->
<div class="lp-full-width background-light-grey">
  <div class="container">
    <div class="row step-row step-3-row">
      <div class="col-sm-5 col-md-5 col-lg-5">
        <?php echo wp_get_attachment_image( $section1image, $sectionsize ); ?>  
      </div> 
      <div class="col-sm-7 col-md-7 col-lg-7 lp-text-col">
        <h3><?php echo get_field('list_headline')?></h3>
        <ul class="step-list">
          <li><?php echo get_field('lp_bullet_1')?></li>
          <li><?php echo get_field('lp_bullet_2')?></li>
          <li><?php echo get_field('lp_bullet_3')?></li>
        </ul>   
      </div>    
    </div>
  </div><!-- end .container-->
</div><!--end .lp-full-width-->    
<!--END STEP 3 CONTAINER-->
<!--START BANNER 2 CONTAINER-->
<div class="lp-full-width" id="bio-banner-image">
  <div class="container">
    <div class="banner-row row">
      <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 banner-headline">
        <h1 class="step"><?php echo get_field('bio_banner_headline')?> </h1>
      </div>
     </div><!--End row--> 
  </div><!--end .container -->
</div><!-- end .lp-full-width -->
<!--END BANNER 2 CONTAINER-->
<!--START STEP 4  CONTAINER-->
<div class="lp-full-width">
  <div class="container">
    <div class="row step-row step-4-row">
      <div class="col-sm-7 col-md-7 col-lg-7 step-4-text">
        <h3><?php echo get_field('bio_headline')?></h3>
        <p><?php echo get_field('bio_text')?></p>
        <!--<a href="#mailchimp">
          <button class="lp-button"><?php echo get_field('step_2_cta')?></button>
        </a>--> 
      </div>    
      <div class="col-sm-5 col-md-5 col-lg-5" id="bio-image">
        <?php echo wp_get_attachment_image( $authorimage, $sectionsize ); ?>  
      </div> 
    </div>
    <!--START MAILCHIMP ROW -->
    <div class="row step-row form-row">
      <div class="col-sm-2 col-md-2 col-lg-2"> 
        <img src='<?php echo site_url(); ?>/wp-content/themes/goldengirl-sassified/images/vapolli-mc-logo2.png'>
      </div> 
      <div class="col-sm-10 col-md-10 col-lg-10">
        <div class="mailchimp-form-container">
          <?php echo get_field('mailchimp_embed_code')?>
          <div class="clear"></div>
         </div> 
      </div>  
    </div><!-- END MAILCHIMP ROW-->  
  </div><!-- end .container-->
</div><!--end .lp-full-width-->

<!--END STEP 4 CONTAINER-->
<!--START BANNER CONTAINER
<div class="lp-full-width" id="ebook-banner-image">
  <div class="container">
    <div class="banner-row row">
      <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 banner-headline" id="ebook-banner-headline">
        <h1 class="step"><?php echo get_field('ebook_banner_headline')?> </h1>
      </div>
     </div>End row
  </div>end .container
</div>end .lp-full-width -->
<!--END BANNER CONTAINER-->
<!--START STEP 5  CONTAINER-->
<!--COMMENTING OUT FOR VAPOLLI <div class="lp-full-width background-light-grey">
  <div class="container">
    <div class="row step-row step-5-row">
      <div class="col-sm-5 col-md-5 col-lg-5">
        <?php echo wp_get_attachment_image( $section5image, $sectionsize ); ?>  
      </div> 
      <div class="col-sm-7 col-md-7 col-lg-7 lp-text-col">
        <h3><?php echo get_field('step_5_header')?></h3>
        <p><?php echo get_field('step_5_text')?></p> 
        <a href="<?php echo get_field('lp_button_url')?>"> 
          <button class="lp-button"><?php echo get_field('lp_button_text')?></button>
        </a>   
      </div>    
    </div>
  </div> end .container
</div> end .lp-full-width-->    
<!--END STEP 5 CONTAINER-->
      
        
      <?php endwhile; // end of the loop. ?>

<?php get_footer('landing-page'); ?>
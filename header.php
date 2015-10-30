<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 

	<?php wp_head(); ?>
</head>

<div class="loading">
  <div class="table">
    <div class="inner">
      <h5>LOADING</h5>
      <svg class="spinner" width="26px" height="26px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
      <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
  	</div>
  </div>
</div>

<div class="transition-overlay"></div>

<div class="map-container">
  <div id="map-placeholder"></div>
  <span class="close-btn"><i class="ion-close"></i></span>
</div>

<header>
  <nav class="navbar navbar-default" role="navigation">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h5>Building spectacular structures</h5>
            <span class="phone"><i class="ion-android-call"></i> 1-904-276-1145</span> <a href="#" class="map"><i class="ion-ios-location"></i> SEE ON MAPS</a> <a href="#" class="language"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag-en.jpg" alt="Image"> ENGLISH</a> </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="inner-header gradient">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#nav"> <i class="ion ion-navicon"></i> </button>
          <a class="navbar-brand transition" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Image"></a>
      	</div>
        <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="nav">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url() ?>" class="transition">HOME</a><span></span></li>
            <li><a href="/about" class="transition">ABOUT</a><span></span></li>
            <li><a href="/contact" class="transition">CONTACT</a><span></span></li>
            <li><a href="/subcontractors-and-vendors" class="transition">SUBCONTRACTORS & VENDORS</a><span></span></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="ion-social-google plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<body <?php body_class(); ?>>
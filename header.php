<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-wpgulp
 */

?>
<!doctype html>
<?php if(is_front_page()) { ?>
  <html class="homepagebodyclass" <?php language_attributes(); ?>>
<?php } else { ?>
  <html class="auto" <?php language_attributes(); ?>>
<?php } ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preload" href="http://thibautverrue.com/wp-content/themes/custom-wp-thibaut/dist/fonts/BentonSans-Regular.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="http://thibautverrue.com/wp-content/themes/custom-wp-thibaut/dist/fonts/PlantinMTProLight.woff" as="font" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="cursors">
		<div class="arrow"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
		<div class="cursor"></div>
  </div>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php echo home_url(); ?>">
        <svg id="logo1" width="236" height="16" viewBox="0 0 236 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.01145 2.68325C3.20496 2.59359 3.20457 2.31838 3.01081 2.22928L0.354454 1.00767C0.188829 0.931504 0 1.05251 0 1.2348V3.68713C0 3.86974 0.189409 3.99073 0.355096 3.91397L3.01145 2.68325Z" fill="#00180C"/>
          <path d="M6.7109 1.68622V3.22499L6.69861 15.4149H8.52994V3.22499H14.9457V1.68622H6.7109Z" fill="#00180C"/>
          <path d="M31.9807 1.68622V7.44458H20.9927V1.68622H19.2474V15.4029H20.9927V8.95931H31.9807V15.4029H33.726V1.68622H31.9807Z" fill="#00180C"/>
          <path d="M39.2939 1.68622V15.4029H41.0392V1.68622H39.2939Z" fill="#00180C"/>
          <path d="M57.5948 8.29812C58.7625 7.97353 60.1759 7.07191 60.1759 5.11238C60.1759 2.34741 58.0127 1.67419 55.1121 1.67419H46.6315V3.11679H55.0015C57.3613 3.11679 58.4798 3.75394 58.4798 5.42495C58.4798 6.92765 57.2507 7.68501 55.2842 7.68501H46.6315V15.4029H55.825C58.615 15.4029 60.7167 14.2609 60.7167 11.7604C60.7044 9.24783 58.8362 8.55057 57.5948 8.29812ZM55.616 13.9964H48.3399V9.10357H55.2965C57.7055 9.10357 58.9837 9.93306 58.9837 11.592C58.9837 13.0827 57.8775 13.9964 55.616 13.9964Z" fill="#00180C"/>
          <path d="M73.3024 1.54193H71.3727L63.986 15.4029H65.7436L67.833 11.5199H76.7192L78.8087 15.4029H80.7014L73.3024 1.54193ZM68.5581 10.1013L72.2577 3.1889L75.9818 10.1013H68.5581Z" fill="#00180C"/>
          <path d="M97.1588 1.68622V10.6063C97.1588 12.9625 94.9342 14.1166 91.5911 14.1166C88.2603 14.1166 86.0726 12.9385 86.0726 10.5101V1.68622H84.3273V10.5462C84.3273 13.8401 87.0804 15.6554 91.5911 15.6554C96.1018 15.6554 98.8673 13.8401 98.8673 10.6183V1.68622H97.1588Z" fill="#00180C"/>
          <path d="M109.241 1.68622V3.22499L109.229 15.4149H111.06V3.22499H117.476V1.68622H109.241Z" fill="#00180C"/>
          <path d="M141.651 1.68622L135.174 13.8281L128.66 1.68622H126.743L134.117 15.5351H136.084L143.458 1.68622H141.651Z" fill="#00180C"/>
          <path d="M149.149 13.9122V8.97133H158.097V7.50469H149.149V3.20094H159.891V1.68622H147.391V15.4029H160.1V13.9122H149.149Z" fill="#00180C"/>
          <path d="M216.441 1.68622V10.6063C216.441 12.9625 214.192 14.1166 210.861 14.1166C207.53 14.1166 205.342 12.9385 205.342 10.5101V1.68622H203.609V10.5462C203.609 13.8401 206.35 15.6554 210.861 15.6554C215.384 15.6554 218.137 13.8401 218.137 10.6183V1.68622H216.441Z" fill="#00180C"/>
          <path d="M225.032 13.9122V8.97133H233.98V7.50469H225.032V3.20094H235.775V1.68622H223.25V15.4029H235.984V13.9122H225.032Z" fill="#00180C"/>
          <path d="M176.127 9.25979C178.425 8.91116 179.605 7.58878 179.605 5.62926C179.605 3.05663 177.799 1.69818 174.468 1.69818H165.262V3.20089H174.431C176.729 3.20089 177.872 4.12655 177.872 5.66532C177.872 7.18005 176.729 8.05763 174.431 8.05763H165.262V9.51225H174.345L177.799 15.4149H179.704L176.127 9.25979Z" fill="#00180C"/>
          <path d="M195.596 9.25979C197.894 8.91116 199.074 7.58878 199.074 5.62926C199.074 3.05663 197.267 1.69818 193.936 1.69818H184.73V3.20089H193.899C196.198 3.20089 197.341 4.12655 197.341 5.66532C197.341 7.18005 196.198 8.05763 193.899 8.05763H184.73V9.51225H193.813L197.267 15.4149H199.172L195.596 9.25979Z" fill="#00180C"/>
          <path d="M105.55 2.68353C105.744 2.59413 105.743 2.31785 105.549 2.229L102.871 1.00626C102.706 0.93065 102.518 1.05166 102.518 1.23367V3.68828C102.518 3.87059 102.706 3.99159 102.872 3.91539L105.55 2.68353Z" fill="#00180C"/>
          <path d="M165.483 12.681C165.389 12.504 165.135 12.504 165.041 12.681L163.81 14.9995C163.722 15.166 163.842 15.3668 164.031 15.3668H166.493C166.682 15.3668 166.802 15.166 166.714 14.9995L165.483 12.681Z" fill="#00180C"/>
          <path d="M184.963 12.6795C184.869 12.5028 184.616 12.5024 184.521 12.6788L183.28 14.9989C183.191 15.1654 183.312 15.3668 183.501 15.3668H185.974C186.162 15.3668 186.283 15.166 186.195 14.9995L184.963 12.6795Z" fill="#00180C"/>
          </svg>
      </a>
      <a href="<?php echo home_url(); ?>">
        <svg id="logo2" width="18" height="19" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.01145 1.83858C3.20496 1.74893 3.20457 1.47372 3.01081 1.38461L0.354454 0.163006C0.188829 0.0868385 0 0.207839 0 0.390139V2.84246C0 3.02507 0.189409 3.14606 0.355096 3.0693L3.01145 1.83858Z" fill="#00180C"/>
          <path d="M6.71096 0.841522V2.38029L6.69867 14.5702H8.53V2.38029H14.9458V0.841522H6.71096Z" fill="#00180C"/>
        </svg>
      </a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
		<div id="menu-overlay">
          <?php 
          wp_nav_menu(
            array(
              'menu' => 'menu-1',
              'container' => '',
              'theme_location' => 'Primary',
              'items_wrap' => '<ul id="" class="menu-nav nav-links">%3$s</ul>'
            )
            );
          ?>
        </div>
		<div id="toggleIcon" class="nav-btn">
			<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect x="6" y="10" width="23" height="2" fill="black" class="burger-top"></rect>
			<rect x="6" y="18" width="23" height="2" fill="black" class="burger-mid"></rect>
			<rect x="6" y="26" width="23" height="2" fill="black" class="burger-bottom"></rect>
			</svg>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
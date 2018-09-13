<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	<div id="searchme">
		<form id="vasearch" method="get" action="http://search.vaheritage.org/vivaxtf/search" enctype="application/x-www-form-urlencoded">
			<label for="text">BASIC SEARCH</label>
			<input type="text" id="text" name="text" size="40" value="" style="margin-right: 18px;" />
			<label for="publisher"> REPOSITORY</label>
			<select id="publisher" name="f1-publisher" style="margin-right: 18px;">
				<option value="">All Repositories</option>
				<option>Alexandria Library</option>
				<option>Averett University</option>
				<option>Bridgewater College</option>
				<option>College of William and Mary</option>
				<option>Colonial Williamsburg</option>
				<option>Fairfax County Public Library</option>
				<option>George Mason University</option>
				<option>Gunston Hall</option>
				<option>Handley Regional Library</option>
				<option>Hollins University</option>
				<option>James Madison University</option>
				<option>Library of Virginia</option>
				<option>Longwood University</option>
				<option>Montgomery County Circuit Court</option>
				<option>Old Dominion University</option>
				<option>Roanoke College</option>
				<option>Roanoke Public Libraries</option>
				<option>Radford University</option>
				<option>Randolph-Macon College</option>
				<option>Shenandoah County Library</option>
				<option>Thomas Balch Library</option>
				<option>University of Mary Washington</option>
				<option>University of Richmond</option>
				<option>University of Virginia, The Center for Nursing Historical Inquiry</option>
				<option>University of Virginia, Health Sciences Library</option>
				<option>University of Virginia, Law Library</option>
				<option>University of Virginia, Music Library</option>
				<option>University of Virginia, Special Collections Dept.</option>
				<option>Virginia Commonwealth University, Cabell Library</option>
				<option>Virginia Commonwealth University, Tompkins-McCaw Library</option>
				<option>Virginia Historical Society</option>
				<option>Virginia Military Institute</option>
				<option>Virginia Museum of Fine Arts</option>
				<option>Virginia Polytechnic Institute and State University</option>
				<option>Virginia State Law Library, Supreme Court of Virginia</option>
				<option>Virginia State University</option>
				<option>Virginia Union University</option>
				<option>Washington and Lee University, Law School</option>
				<option>Washington and Lee University, Leyburn Library</option>
				<option>Wytheville Community College</option>
			</select>
			<input type="submit" value="Search" id="basicSubmit" />
		</form>
	</div>
	

	<div id="main" class="wrapper">

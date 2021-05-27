<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<a href="/wordpress-fazanerija" class="navbar-brand"><img class="img-responsive">
		
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
		 
		if ( has_custom_logo() ) {
			echo '<img src="' . esc_url( $logo[0] ) .  '" alt="' . get_bloginfo( 'name' ) . '">' .  get_bloginfo('name') ;
		} else {
			echo '<p>' . get_bloginfo('name') . '</p>';
		}
		?> 
		</a>
	      
		<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Izbornik
	      </button>

		
		<?php
			wp_nav_menu( array(
			'menu'  		  => '5',
			'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'bs-example-navbar-collapse-1',
			'menu_class'      => 'navbar-nav nav ml-auto',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker(),
		) );
			?>
	    </div>
	  </nav>


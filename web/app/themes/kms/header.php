<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );	
$container = get_theme_mod( 'understrap_container_type' );
$header_logo = get_field('kms_header_logo','option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="icon" type="image/png" href="/favicon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="site-header wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<nav class="navbar navbar-expand-md">
			<div class="container">
			<?php if ( is_front_page() && is_home() ) : ?>
				<div class="header-logo">
				<?php?>
					<a class="navbar-brand logo-white" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo $image[0]; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
					<a class="navbar-brand logo-color" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?=$header_logo['url']?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				</div>
			<?php else : ?>
				<div class="header-logo">
					<a class="navbar-brand logo-white" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo $image[0]; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
					<a class="navbar-brand logo-color" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?=$header_logo['url']?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				</div>
			<?php endif; ?>

			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse main-menu',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			<?php wp_nav_menu(
					array(
						'theme_location'  => 'social-menu',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'social-menu-icons',
						'fallback_cb'     => '',
						'menu_id'         => 'social-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<div class="navbar-toggler" id="toggle">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
				
			</div>
		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kento-blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- header -->
	<header class="header">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<!-- Header Top -->
					<div class="col-md-4">
						<div class="logo">
							<h3 class="logo-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</h3>
							<span class="logo-description"><?php bloginfo( 'description' ); ?></span>
						</div>
					</div><!-- End Header Top -->
					<!-- Start Menu-->
					<div class="col-md-8">
						<div class="mainmenu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only"><?php echo __( 'Toggle navigation', 'kento-blog' );?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<?php
								wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav navbar-right',
									'fallback_cb'       => 'kento_blog_navwalker::fallback',
									'walker'            => new kento_blog_navwalker())
								);
							?>						
						</div>
					</div><!-- End Menu -->
				</div>
			</div>
		</div>
	</header><!-- End header -->	
	

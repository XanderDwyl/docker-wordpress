<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Listify
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.async=true;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

    </script>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="primary-header">
			<div class="container">
				<div class="primary-header-inner">
					<div class="site-branding">
						<?php $header_image = get_header_image(); ?>
						<?php if ( ! empty( $header_image ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="custom-header"><img src="<?php echo esc_url( $header_image ); ?>" alt=""></a>
						<?php endif; ?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div>
				</div>
			</div>
		</div> -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container-fluid">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo logo-light logo-wide pull-left" src="<?php bloginfo('stylesheet_directory'); ?>/img/bestloansolutionsph.svg" alt="Loan Solutions Phillipines"></a>
				<div data-href="https://www.facebook.com/LoanSolutionsPH" data-width="130px" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" class="fb-like hidden-xs" style="margin:24px 0 0 20px; float:left"></div>
				<a href="#" class="navigation-bar-toggle">
					<i class="ion-navicon-round"></i>
					<?php echo listify_get_theme_menu_name( 'primary' ); ?>
				</a>

				<div class="navigation-bar-wrapper">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'secondary',
							'container_class' => 'secondary nav-menu',
							'menu_class' => 'secondary nav-menu'
						) );
					?>
				</div>

				<?php if ( ! listify_has_integration( 'facetwp' ) && listify_theme_mod( 'nav-search' ) ) : ?>
					<a href="#search-navigation" data-toggle="#search-navigation" class="ion-search search-overlay-toggle"></a>

					<div id="search-navigation" class="search-overlay">
						<?php locate_template( array( 'searchform-header.php', 'searchform.php' ), true, false ); ?>
						<a href="#search-navigation" data-toggle="#search-navigation" class="ion-close search-overlay-toggle"></a>
					</div>
				<?php endif; ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php do_action( 'listify_content_before' ); ?>

	<div id="content" class="site-content">

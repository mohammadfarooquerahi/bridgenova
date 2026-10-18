<?php
/**
 * The header for our theme
 *
 * @package BridgeNova
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bridgenova' ); ?></a>

	<header class="bridge-custom-header" id="bridgeHeader">
		<div class="header-container">

			<!-- Logo -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo-link">
				<?php if ( has_custom_logo() ) :
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
				?>
					<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="header-logo-image">
				<?php else : ?>
					<span class="site-title-text"><?php bloginfo( 'name' ); ?></span>
				<?php endif; ?>
			</a>

			<!-- Off-Canvas Responsive Navigation -->
			<nav class="main-navigation" id="mainNav">
				<!-- Mobile Drawer Header -->
				<div class="mobile-menu-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo-link">
						<?php if ( has_custom_logo() ) : ?>
							<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="header-logo-image">
						<?php else : ?>
							<span class="site-title-text"><?php bloginfo( 'name' ); ?></span>
						<?php endif; ?>
					</a>
					<button type="button" class="mobile-close-btn" id="menuCloseBtn" aria-label="<?php esc_attr_e( 'Close menu', 'bridgenova' ); ?>">
						CLOSE ✕
					</button>
				</div>

				<!-- Main Menu -->
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'nav-menu-list',
							'container'      => false,
							'walker'         => new BridgeNova_Walker(),
							'fallback_cb'    => 'bridgenova_fallback_menu',
						)
					);
				} else {
					bridgenova_fallback_menu();
				}
				?>

				<!-- Mobile Menu Footer -->
				<div class="mobile-menu-footer">
					<span class="mobile-menu-footer-label">FOLLOW US</span>
					<div class="mobile-menu-social-row">
						<?php
						$social_links = array(
							'facebook'  => get_theme_mod( 'bridgenova_social_facebook', 'https://www.facebook.com/' ),
							'instagram' => get_theme_mod( 'bridgenova_social_instagram', 'https://www.instagram.com/' ),
							'linkedin'  => get_theme_mod( 'bridgenova_social_linkedin', 'https://www.linkedin.com/company/bridgeglobalnetwork/' ),
							'youtube'   => get_theme_mod( 'bridgenova_social_youtube', 'https://www.youtube.com/' ),
						);
						?>
						<a href="<?php echo esc_url( $social_links['facebook'] ); ?>" target="_blank" rel="noopener" aria-label="Facebook" class="mobile-menu-social-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['instagram'] ); ?>" target="_blank" rel="noopener" aria-label="Instagram" class="mobile-menu-social-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1"></circle></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['linkedin'] ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn" class="mobile-menu-social-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['youtube'] ); ?>" target="_blank" rel="noopener" aria-label="YouTube" class="mobile-menu-social-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.5 6.2a2.8 2.8 0 00-2-2C18.9 3.7 12 3.7 12 3.7s-6.9 0-8.5.5a2.8 2.8 0 00-2 2A29 29 0 001 12a29 29 0 00.5 5.8 2.8 2.8 0 002 2c1.6.5 8.5.5 8.5.5s6.9 0 8.5-.5a2.8 2.8 0 002-2A29 29 0 0023 12a29 29 0 00-.5-5.8z"></path><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"></polygon></svg>
						</a>
					</div>
					<div class="mobile-menu-legal">
						<span>&copy; <span class="mobile-menu-year"></span> BRIDGE. All Rights Reserved.</span>
						<span class="mobile-menu-legal-links">
							<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>&nbsp;|&nbsp;<a href="<?php echo esc_url( home_url( '/term-and-conditions/' ) ); ?>">Terms &amp; Conditions</a>
						</span>
					</div>
				</div>
			</nav>

			<!-- Header Actions -->
			<div class="header-action-group">
				<div class="header-cta-wrapper">
					<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="cta-button">Join Us</a>
				</div>
				<!-- Mobile Hamburger -->
				<button type="button" class="mobile-hamburger-trigger" id="menuOpenBtn" aria-label="<?php esc_attr_e( 'Open menu', 'bridgenova' ); ?>">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</div>
	</header>

	<main id="primary" class="site-main">

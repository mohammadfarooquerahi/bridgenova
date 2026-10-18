<?php
/**
 * The template for displaying the footer
 *
 * @package BridgeNova
 */

$social_links = array(
	'facebook'  => get_theme_mod( 'bridgenova_social_facebook', 'https://www.facebook.com/' ),
	'instagram' => get_theme_mod( 'bridgenova_social_instagram', 'https://www.instagram.com/' ),
	'linkedin'  => get_theme_mod( 'bridgenova_social_linkedin', 'https://www.linkedin.com/company/bridgeglobalnetwork/' ),
	'youtube'   => get_theme_mod( 'bridgenova_social_youtube', 'https://www.youtube.com/' ),
);
$contact_email    = get_theme_mod( 'bridgenova_contact_email', 'info@bridgenova.info' );
$contact_location = get_theme_mod( 'bridgenova_contact_location', 'Islamabad, Pakistan' );
$footer_desc      = get_theme_mod( 'bridgenova_footer_description', 'Building Relationships for International Dialogue and Global Engagement. Empowering young leaders through global exchange, leadership development, innovation, and community impact.' );
?>

	</main><!-- #primary -->

	<footer class="hp-footer" id="colophon">
		<div class="hp-inner">
			<div class="hp-footer-top-grid">
				<!-- Brand Column -->
				<div class="hp-footer-col">
					<div class="hp-footer-brand">BRIDGE</div>
					<p class="hp-footer-tag"><?php echo esc_html( $footer_desc ); ?></p>
					<div class="hp-footer-social">
						<a href="<?php echo esc_url( $social_links['facebook'] ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['instagram'] ); ?>" target="_blank" rel="noopener" aria-label="Instagram">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1"></circle></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['linkedin'] ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
						</a>
						<a href="<?php echo esc_url( $social_links['youtube'] ); ?>" target="_blank" rel="noopener" aria-label="YouTube">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22.5 6.2a2.8 2.8 0 00-2-2C18.9 3.7 12 3.7 12 3.7s-6.9 0-8.5.5a2.8 2.8 0 00-2 2A29 29 0 001 12a29 29 0 00.5 5.8 2.8 2.8 0 002 2c1.6.5 8.5.5 8.5.5s6.9 0 8.5-.5a2.8 2.8 0 002-2A29 29 0 0023 12a29 29 0 00-.5-5.8z"></path><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"></polygon></svg>
						</a>
					</div>
				</div>

				<!-- Quick Links Column -->
				<div class="hp-footer-col">
					<h4 class="hp-footer-heading">Quick Links</h4>
					<ul class="hp-footer-links">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
						<li><a href="<?php echo esc_url( home_url( '/events-bridge/' ) ); ?>">Events</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
					</ul>
				</div>

				<!-- Programs Column -->
				<div class="hp-footer-col">
					<h4 class="hp-footer-heading">Programs</h4>
					<ul class="hp-footer-links">
						<li><a href="<?php echo esc_url( home_url( '/services/#svc-pillar-1' ) ); ?>">Leadership Development</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/#svc-pillar-2' ) ); ?>">International Exchange</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/#svc-pillar-3' ) ); ?>">Global Dialogue</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/#svc-pillar-4' ) ); ?>">Innovation & Entrepreneurship</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/#svc-pillar-6' ) ); ?>">Community Development</a></li>
					</ul>
				</div>

				<!-- Contact Column -->
				<div class="hp-footer-col">
					<h4 class="hp-footer-heading">Contact</h4>
					<ul class="hp-footer-links hp-footer-contact-list">
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
							<?php echo esc_html( $contact_location ); ?>
						</li>
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							<a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
						</li>
					</ul>
					<div class="hp-footer-newsletter">
						<h4 class="hp-footer-heading">Get Involved</h4>
						<a href="<?php echo esc_url( home_url( '/registration/' ) ); ?>" class="hp-btn hp-btn--gold" style="font-size:13px;padding:12px 24px;">Join BRIDGE</a>
					</div>
				</div>
			</div>

			<!-- Footer Bottom -->
			<div class="hp-footer-bottom">
				<p class="hp-footer-copy">&copy; <span class="footer-year"><?php echo esc_html( date( 'Y' ) ); ?></span> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
				<div class="hp-footer-bottom-links">
					<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
					<span class="hp-footer-sep">|</span>
					<a href="<?php echo esc_url( home_url( '/term-and-conditions/' ) ); ?>">Terms &amp; Conditions</a>
				</div>
				<div class="hp-footer-dev-credit" style="width:100%; text-align:center; margin-top:12px; font-size:11px; line-height:1.2;">
					<a href="https://www.linkedin.com/in/mohammadfarooque/" target="_blank" rel="noopener noreferrer" style="color:#ffffff; opacity:0.10; text-decoration:none; transition:opacity 0.3s ease; display:inline-block; font-size:11px;" onmouseover="this.style.opacity='0.20'" onmouseout="this.style.opacity='0.10'">Developed by Mohammad Farooque</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<!-- Scroll to Top -->
	<button class="scroll-to-top" aria-label="<?php esc_attr_e( 'Scroll to top', 'bridgenova' ); ?>">
		<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
	</button>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Template Name: Contact Page
 *
 * Contact Us - BridgeNova
 *
 * @package BridgeNova
 */

get_header();

$contact_email    = get_theme_mod( 'bridgenova_contact_email', 'info@bridgenova.info' );
$contact_location = get_theme_mod( 'bridgenova_contact_location', 'Islamabad, Pakistan' );
$social_links = array(
	'facebook'  => get_theme_mod( 'bridgenova_social_facebook', 'https://www.facebook.com/' ),
	'instagram' => get_theme_mod( 'bridgenova_social_instagram', 'https://www.instagram.com/' ),
	'linkedin'  => get_theme_mod( 'bridgenova_social_linkedin', 'https://www.linkedin.com/company/bridgeglobalnetwork/' ),
	'youtube'   => get_theme_mod( 'bridgenova_social_youtube', 'https://www.youtube.com/' ),
);
?>

<div class="ctc-page">
  <!-- Hero Section -->
  <section class="ctc-hero">
    <div class="ctc-hero-inner hp-reveal">
      <span class="ctc-eyebrow">Contact Us</span>
      <h1 class="ctc-hero-h1">Get In Touch</h1>
      <p>We welcome your questions, feedback, and inquiries. Connect with us today.</p>
      <div style="margin-top: 20px;">
        <span class="ctc-hero-tagline">Connecting People. Inspiring Leaders. Transforming Communities.</span>
      </div>
    </div>
  </section>

  <!-- Content Grid -->
  <div class="ctc-container">
    <!-- Left Column: Contact Information & Interactive Map -->
    <div class="ctc-info-card hp-reveal">
      <h2>Contact Information</h2>
      <p>Have questions about joining BRIDGE, attending events, or forming partnerships? Reach out to our central team directly.</p>

      <div class="ctc-info-list">
        <div class="ctc-info-item">
          <div class="ctc-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.1 7-11.5A7 7 0 0 0 5 9.5C5 14.9 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
          </div>
          <div>
            <strong style="display:block; color:#fff; font-size:15px; margin-bottom:4px;">Location</strong>
            <span style="color:#cfdcea;"><?php echo esc_html( $contact_location ); ?></span>
          </div>
        </div>

        <div class="ctc-info-item">
          <div class="ctc-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18v12H3z"/><path d="m3 7 9 6 9-6"/></svg>
          </div>
          <div>
            <strong style="display:block; color:#fff; font-size:15px; margin-bottom:4px;">Email</strong>
            <a href="mailto:<?php echo esc_attr( $contact_email ); ?>" style="color:var(--bridge-gold); text-decoration:none;"><?php echo esc_html( $contact_email ); ?></a>
          </div>
        </div>

        <div class="ctc-info-item">
          <div class="ctc-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"/></svg>
          </div>
          <div>
            <strong style="display:block; color:#fff; font-size:15px; margin-bottom:8px;">Follow BRIDGE</strong>
            <div style="display:flex; gap:10px; flex-wrap:wrap;">
              <a href="<?php echo esc_url( $social_links['facebook'] ); ?>" target="_blank" rel="noopener" style="width:38px; height:38px; border-radius:50%; background:#0a1c33; border:1px solid rgba(202,162,86,0.3); display:inline-flex; align-items:center; justify-content:center; color:#caa256;" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
              </a>
              <a href="<?php echo esc_url( $social_links['instagram'] ); ?>" target="_blank" rel="noopener" style="width:38px; height:38px; border-radius:50%; background:#0a1c33; border:1px solid rgba(202,162,86,0.3); display:inline-flex; align-items:center; justify-content:center; color:#caa256;" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
              </a>
              <a href="<?php echo esc_url( $social_links['linkedin'] ); ?>" target="_blank" rel="noopener" style="width:38px; height:38px; border-radius:50%; background:#0a1c33; border:1px solid rgba(202,162,86,0.3); display:inline-flex; align-items:center; justify-content:center; color:#caa256;" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
              </a>
              <a href="<?php echo esc_url( $social_links['youtube'] ); ?>" target="_blank" rel="noopener" style="width:38px; height:38px; border-radius:50%; background:#0a1c33; border:1px solid rgba(202,162,86,0.3); display:inline-flex; align-items:center; justify-content:center; color:#caa256;" aria-label="YouTube">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M22.5 6.2a2.8 2.8 0 00-2-2C18.9 3.7 12 3.7 12 3.7s-6.9 0-8.5.5a2.8 2.8 0 00-2 2A29 29 0 001 12a29 29 0 00.5 5.8 2.8 2.8 0 002 2c1.6.5 8.5.5 8.5.5s6.9 0 8.5-.5a2.8 2.8 0 002-2A29 29 0 0023 12a29 29 0 00-.5-5.8z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Clean Map Embed of Islamabad -->
      <iframe class="ctc-map-iframe" src="https://maps.google.com/maps?q=Islamabad,%20Pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed" title="Islamabad, Pakistan Location" loading="lazy"></iframe>
    </div>

    <!-- Right Column: Message Form -->
    <div class="ctc-form-card hp-reveal" data-hp-delay="1">
      <h2>Send Us a Message</h2>
      <p>Complete the form below and our team will get back to you within 24–48 hours.</p>

      <form id="contactForm" method="post" action="">
        <div class="ctc-form-group">
          <label class="ctc-label">Full Name *</label>
          <input type="text" name="name" class="ctc-input" required placeholder="Your full name">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Email Address *</label>
          <input type="email" name="email" class="ctc-input" required placeholder="your.email@example.com">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Subject</label>
          <input type="text" name="subject" class="ctc-input" placeholder="Inquiry about programs, partnerships, etc.">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Message *</label>
          <textarea name="message" class="ctc-textarea" required placeholder="How can we help you?"></textarea>
        </div>

        <button type="submit" class="hp-btn hp-btn--gold" style="width:100%; justify-content:center; font-size:15px; padding:15px 24px;">Send Message &rarr;</button>
        <div id="contactFormMessage" style="margin-top:16px; font-size:14px; text-align:center; display:none;"></div>
      </form>
    </div>
  </div>
</div>

<!-- WordPress Page Editor Content (Client Editable) -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php if ( ! empty( trim( get_the_content() ) ) ) : ?>
    <section class="hp-panel-section hp-custom-page-content" style="background:#0a1c33; padding: 40px 24px 60px; color: #ffffff;">
      <div class="hp-inner" style="max-width:1200px; margin:0 auto;">
        <?php the_content(); ?>
      </div>
    </section>
  <?php endif; ?>
<?php endwhile; endif; ?>

<?php
get_footer();

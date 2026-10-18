<?php
/**
 * Template Name: Event Registration Page
 *
 * Registration for specific events - BridgeNova
 *
 * @package BridgeNova
 */

get_header();
?>

<div class="ctc-page">
  <!-- Hero Section -->
  <section class="ctc-hero">
    <div class="ctc-hero-inner hp-reveal">
      <span class="ctc-eyebrow">Participation</span>
      <h1 class="ctc-hero-h1">Event Registration</h1>
      <p>Reserve your place at upcoming BRIDGE conferences, summits, and delegations worldwide.</p>
    </div>
  </section>

  <!-- Centered Form Container -->
  <div class="ctc-container--single">
    <div class="ctc-form-card hp-reveal">
      <h2>Delegate Registration Form</h2>
      <p>Please complete your details below to confirm attendance. Our delegation team will review your registration and issue an official confirmation badge via email.</p>

      <form id="eventRegistrationForm" method="post" action="">
        <div class="ctc-form-group">
          <label class="ctc-label">Select Event *</label>
          <select name="event_name" class="ctc-select" required>
            <option value="Global Youth Leadership Summit 2026 (Islamabad)">Global Youth Leadership Summit 2026 (Islamabad)</option>
            <option value="International Peace & Dialogue Forum (Lahore)">International Peace &amp; Dialogue Forum (Lahore)</option>
            <option value="Social Innovation & Entrepreneurship Expo (Karachi)">Social Innovation &amp; Entrepreneurship Expo (Karachi)</option>
            <option value="Global Climate & Sustainability Delegation">Global Climate &amp; Sustainability Delegation</option>
            <option value="General Delegate Application">Other Confirmed Gathering</option>
          </select>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
          <div class="ctc-form-group">
            <label class="ctc-label">Full Name *</label>
            <input type="text" name="name" class="ctc-input" required placeholder="Your full name">
          </div>

          <div class="ctc-form-group">
            <label class="ctc-label">Email Address *</label>
            <input type="email" name="email" class="ctc-input" required placeholder="your.email@example.com">
          </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
          <div class="ctc-form-group">
            <label class="ctc-label">Phone / WhatsApp *</label>
            <input type="tel" name="phone" class="ctc-input" required placeholder="+92 300 1234567">
          </div>

          <div class="ctc-form-group">
            <label class="ctc-label">Organization / University *</label>
            <input type="text" name="organization" class="ctc-input" required placeholder="University or Institution name">
          </div>
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Motivation &amp; Objectives *</label>
          <textarea name="message" class="ctc-textarea" required placeholder="Briefly state your purpose for attending this event and what you hope to contribute..."></textarea>
        </div>

        <button type="submit" class="hp-btn hp-btn--gold" style="width:100%; justify-content:center; font-size:15px; padding:15px 24px;">Complete Registration &rarr;</button>
        <div id="eventFormMessage" style="margin-top:16px; font-size:14px; text-align:center; display:none;"></div>
      </form>
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

</div>

<?php
get_footer();

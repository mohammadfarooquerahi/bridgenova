<?php
/**
 * Template Name: Registration Page
 *
 * Membership Registration Template - BridgeNova
 *
 * @package BridgeNova
 */

get_header();
?>

<div class="ctc-page">
  <!-- Hero Section -->
  <section class="ctc-hero">
    <div class="ctc-hero-inner hp-reveal">
      <span class="ctc-eyebrow">Get Involved</span>
      <h1 class="ctc-hero-h1">Join BRIDGE Network</h1>
      <p>Become part of an international community empowering leaders through global exchange, diplomacy, and community development.</p>
    </div>
  </section>

  <!-- Content Grid -->
  <div class="ctc-container">
    <!-- Left Column: Membership Tiers Card -->
    <div class="ctc-info-card hp-reveal">
      <h2 style="color:var(--bridge-gold); font-size:24px; margin-bottom:12px;">Membership Tiers</h2>
      <p>Select the membership tier that aligns with your background, experience, and goals:</p>

      <div style="display:flex; flex-direction:column; gap:16px;">
        <div style="background:#0a1c33; padding:18px; border-radius:12px; border-left:3px solid var(--bridge-gold); border:1px solid rgba(255,255,255,0.06); border-left-width:3px;">
          <strong style="color:#ffffff; font-size:16px; display:block; margin-bottom:4px;">Explorer (Ages 15–18)</strong>
          <span style="color:#9fb3c9; font-size:13.5px; line-height:1.5; display:block;">For secondary school students starting their global leadership and international dialogue path.</span>
        </div>

        <div style="background:#0a1c33; padding:18px; border-radius:12px; border-left:3px solid var(--bridge-gold); border:1px solid rgba(255,255,255,0.06); border-left-width:3px;">
          <strong style="color:#ffffff; font-size:16px; display:block; margin-bottom:4px;">Member (Ages 18–30)</strong>
          <span style="color:#9fb3c9; font-size:13.5px; line-height:1.5; display:block;">For university students, researchers, and emerging young professionals seeking global network opportunities.</span>
        </div>

        <div style="background:#0a1c33; padding:18px; border-radius:12px; border-left:3px solid var(--bridge-gold); border:1px solid rgba(255,255,255,0.06); border-left-width:3px;">
          <strong style="color:#ffffff; font-size:16px; display:block; margin-bottom:4px;">Professional Member (Ages 25–40)</strong>
          <span style="color:#9fb3c9; font-size:13.5px; line-height:1.5; display:block;">For established professionals, diplomats, and innovators leading strategic social projects.</span>
        </div>

        <div style="background:#0a1c33; padding:18px; border-radius:12px; border-left:3px solid var(--bridge-gold); border:1px solid rgba(255,255,255,0.06); border-left-width:3px;">
          <strong style="color:#ffffff; font-size:16px; display:block; margin-bottom:4px;">Institutional Member</strong>
          <span style="color:#9fb3c9; font-size:13.5px; line-height:1.5; display:block;">For academic institutions, NGOs, corporations, and international delegations.</span>
        </div>
      </div>
    </div>

    <!-- Right Column: Membership Application Form Card -->
    <div class="ctc-form-card hp-reveal" data-hp-delay="1">
      <h2>Membership Application</h2>
      <p>Submit your application details below. Our membership admissions team will review and reply via email.</p>

      <form id="membershipForm" method="post" action="">
        <div class="ctc-form-group">
          <label class="ctc-label">Full Name *</label>
          <input type="text" name="name" class="ctc-input" required placeholder="John Doe">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Email Address *</label>
          <input type="email" name="email" class="ctc-input" required placeholder="john@example.com">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Country of Residence *</label>
          <input type="text" name="country" class="ctc-input" required placeholder="Pakistan, USA, United Kingdom, etc.">
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Preferred Tier *</label>
          <select name="tier" class="ctc-select" required>
            <option value="Explorer (Ages 15-18)">Explorer (Ages 15–18)</option>
            <option value="Member (Ages 18-30)" selected>Member (Ages 18–30)</option>
            <option value="Professional Member (Ages 25-40)">Professional Member (Ages 25–40)</option>
            <option value="Institutional Member">Institutional Member</option>
          </select>
        </div>

        <div class="ctc-form-group">
          <label class="ctc-label">Tell Us About Yourself *</label>
          <textarea name="message" class="ctc-textarea" required placeholder="Share your academic/professional background and what you hope to achieve with BRIDGE..."></textarea>
        </div>

        <button type="submit" class="hp-btn hp-btn--gold" style="width:100%; justify-content:center; font-size:15px; padding:15px 24px;">Submit Application &rarr;</button>
        <div id="membershipFormMessage" style="margin-top:16px; font-size:14px; text-align:center; display:none;"></div>
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

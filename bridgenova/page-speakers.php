<?php
/**
 * Template Name: Speakers Page
 *
 * Exact replication of bridgenova.info with dark navy theme and high-res assets
 *
 * @package BridgeNova
 */

get_header();
?>

<style>
  .sp-page, .sp-page *, .sp-page *::before, .sp-page *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .sp-page {
    background: #0a1c33;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
    color: #ffffff;
  }

  .sp-page section { padding: 96px 24px; }
  .sp-inner { max-width: 1200px; margin: 0 auto; }
  .sp-page a { color: inherit; }

  .sp-eyebrow {
    display: inline-block; color: #caa256; font-size: 13px; font-weight: 700;
    letter-spacing: 2.6px; text-transform: uppercase; margin-bottom: 16px;
  }
  .sp-h2 { font-size: 36px; line-height: 1.18; font-weight: 700; letter-spacing: -0.5px; margin-bottom: 16px; color: #ffffff; }
  .sp-lede { font-size: 16.5px; line-height: 1.75; color: #b9cbc9; max-width: 640px; }
  .sp-section-head { margin-bottom: 48px; max-width: 720px; }
  .sp-section-head.sp-center { margin-left: auto; margin-right: auto; text-align: center; }

  .sp-btn {
    display: inline-flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 700;
    padding: 16px 32px; border-radius: 999px; border: none; cursor: pointer; text-decoration: none;
    transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease, color 300ms ease;
  }
  .sp-btn--gold { background: #caa256; color: #0a1c33; font-weight: 800; }
  .sp-btn--gold:hover { transform: translateY(-3px); box-shadow: 0 10px 24px rgba(202,162,86,0.35); background: #dfb76c; }
  .sp-btn--outline { background: transparent; color: #ffffff; border: 1px solid rgba(255,255,255,0.4); }
  .sp-btn--outline:hover { transform: translateY(-3px); border-color: #caa256; color: #caa256; }
  .sp-btn svg { width: 16px; height: 16px; }

  /* Hero */
  .sp-hero { padding: 160px 24px 80px 24px !important; position: relative; overflow: hidden; }
  .sp-hero-bg {
    position: absolute; inset: 0; z-index: 0; background-size: cover; background-position: center;
    background-image: url('https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=1600&auto=format&fit=crop');
  }
  .sp-hero-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(180deg, rgba(10,28,51,0.78) 0%, rgba(10,28,51,0.95) 100%);
  }
  .sp-hero .sp-inner { position: relative; z-index: 2; }
  .sp-breadcrumb { display: flex; align-items: center; gap: 8px; color: #8ba4a1; font-size: 13px; font-weight: 600; margin-bottom: 24px; }
  .sp-breadcrumb a { text-decoration: none; transition: color 200ms ease; }
  .sp-breadcrumb a:hover { color: #caa256; }
  .sp-breadcrumb span { color: #caa256; }
  .sp-hero-h1 { font-size: 50px; line-height: 1.1; font-weight: 700; letter-spacing: -1px; margin-bottom: 20px; max-width: 760px; color: #ffffff; }
  .sp-hero-sub { color: #dfece9; font-size: 17px; line-height: 1.75; max-width: 620px; margin-bottom: 32px; }
  .sp-hero-cta-row { display: flex; flex-wrap: wrap; gap: 16px; }

  /* Subnav */
  .sp-subnav {
    position: sticky; top: 80px; z-index: 40; background: #081628;
    border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); padding: 0 24px;
  }
  .sp-subnav-inner { max-width: 1200px; margin: 0 auto; display: flex; gap: 8px; overflow-x: auto; scrollbar-width: none; }
  .sp-subnav-inner::-webkit-scrollbar { display: none; }
  .sp-subnav a {
    flex-shrink: 0; padding: 18px 8px; color: #dfece9; font-size: 13.5px; font-weight: 700; letter-spacing: 0.3px;
    text-decoration: none; border-bottom: 2px solid transparent; transition: color 200ms ease, border-color 200ms ease; white-space: nowrap; margin-right: 28px;
  }
  .sp-subnav a:hover { color: #caa256; border-color: #caa256; }

  /* Topics */
  .sp-topics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .sp-topic-card {
    display: flex; align-items: center; gap: 16px; background: #132a4d; border-radius: 14px; padding: 22px 24px;
    text-decoration: none; transition: transform 250ms ease, border-color 250ms ease, box-shadow 250ms ease;
    border: 1px solid rgba(255,255,255,0.08);
  }
  .sp-topic-card:hover { transform: translateY(-4px); border-color: #caa256; box-shadow: 0 8px 24px rgba(0,0,0,0.3); }
  .sp-topic-icon {
    width: 44px; height: 44px; border-radius: 50%; background: rgba(202,162,86,0.15); display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .sp-topic-icon svg { width: 20px; height: 20px; stroke: #caa256; fill: none; }
  .sp-topic-name { color: #ffffff; font-size: 15px; font-weight: 700; }

  /* Speakers Grid */
  .sp-panel { background: #0e223f; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05); }
  .sp-speaker-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 28px 24px; }
  .sp-speaker-card {
    text-align: center; background: #132a4d; border-radius: 18px; padding: 24px;
    border: 1px solid rgba(255,255,255,0.08); transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
  }
  .sp-speaker-card:hover { transform: translateY(-6px); border-color: #caa256; box-shadow: 0 12px 28px rgba(0,0,0,0.35); }
  .sp-speaker-photo {
    width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #0a1c33; margin-bottom: 16px;
    border: 2px solid rgba(202,162,86,0.3);
  }
  .sp-speaker-photo img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 400ms ease; }
  .sp-speaker-card:hover .sp-speaker-photo img { transform: scale(1.06); }
  .sp-speaker-name { color: #ffffff; font-size: 17px; font-weight: 800; letter-spacing: -0.1px; margin-bottom: 4px; }
  .sp-speaker-title { color: #dfece9; font-size: 13px; font-weight: 500; margin-top: 4px; line-height: 1.5; min-height: 40px; }
  .sp-speaker-pillar {
    display: inline-block; margin-top: 12px; background: rgba(202,162,86,0.15); color: #caa256; font-size: 11px;
    font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase; padding: 5px 14px; border-radius: 999px; text-decoration: none;
    transition: all 200ms ease;
  }
  .sp-speaker-pillar:hover { background: #caa256; color: #0a1c33; }

  /* Benefits */
  .sp-benefits-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .sp-benefit-card { background: #132a4d; border-radius: 18px; padding: 32px; border: 1px solid rgba(202,162,86,0.15); }
  .sp-benefit-icon { width: 48px; height: 48px; border-radius: 50%; background: #caa256; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; }
  .sp-benefit-icon svg { width: 22px; height: 22px; stroke: #0a1c33; fill: none; }
  .sp-benefit-title { color: #ffffff; font-size: 17px; font-weight: 700; margin-bottom: 10px; }
  .sp-benefit-body { color: #dfece9; font-size: 14px; line-height: 1.65; }

  /* Gallery */
  .sp-gallery-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
  .sp-gallery-item { border-radius: 14px; overflow: hidden; aspect-ratio: 4 / 3; border: 1px solid rgba(255,255,255,0.08); background: #132a4d; }
  .sp-gallery-item img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 400ms ease; }
  .sp-gallery-item:hover img { transform: scale(1.08); }

  /* CTA Band */
  .sp-band {
    background: radial-gradient(circle at center, #16304c 0%, #0a1c33 100%);
    border-top: 1px solid rgba(202,162,86,0.15); text-align: center;
  }
  .sp-band-content { max-width: 680px; margin: 0 auto; }
  .sp-band-btn-row { display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 28px; }

  @media (max-width: 980px) {
    .sp-topics-grid { grid-template-columns: repeat(2, 1fr); }
    .sp-speaker-grid { grid-template-columns: repeat(2, 1fr); }
    .sp-benefits-grid { grid-template-columns: 1fr; }
    .sp-gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .sp-hero-h1 { font-size: 38px; }
  }
  @media (max-width: 640px) {
    .sp-hero { padding: 130px 20px 60px 20px !important; }
    .sp-topics-grid { grid-template-columns: 1fr; }
    .sp-speaker-grid { grid-template-columns: 1fr; }
    .sp-gallery-grid { grid-template-columns: 1fr; }
  }
</style>

<main class="sp-page" id="sp-main">

  <!-- ============ HERO ============ -->
  <section class="sp-hero" aria-label="Speakers introduction">
    <div class="sp-hero-bg" aria-hidden="true"></div>
    <div class="sp-hero-overlay" aria-hidden="true"></div>
    <div class="sp-inner">
      <nav class="sp-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span>/</span>
        <span>Speakers</span>
      </nav>
      <span class="sp-eyebrow">Our Speakers</span>
      <h1 class="sp-hero-h1">Meet Global Leaders &amp; Visionaries</h1>
      <p class="sp-hero-sub">Our speakers bring diverse expertise from international development, entrepreneurship, diplomacy, and academia — sharing insights that spark innovation and meaningful connections.</p>
      <div class="sp-hero-cta-row">
        <a class="sp-btn sp-btn--gold" href="<?php echo esc_url(home_url('/registration/')); ?>">
          Become a Speaker
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
        </a>
        <a class="sp-btn sp-btn--outline" href="<?php echo esc_url(home_url('/events-bridge/')); ?>">See Upcoming Events</a>
      </div>
    </div>
  </section>

  <!-- ============ STICKY SUBNAV ============ -->
  <nav class="sp-subnav" aria-label="Speakers page sections">
    <div class="sp-subnav-inner">
      <a href="#sp-topics">Speaking Topics</a>
      <a href="#sp-speakers">Featured Speakers</a>
      <a href="#sp-benefits">Why Speak</a>
      <a href="#sp-gallery">Gallery</a>
      <a href="#sp-cta">Get Involved</a>
    </div>
  </nav>

  <!-- ============ SPEAKING TOPICS ============ -->
  <section id="sp-topics" aria-labelledby="sp-topics-heading">
    <div class="sp-inner">
      <div class="sp-section-head">
        <span class="sp-eyebrow">What They Speak On</span>
        <h2 class="sp-h2" id="sp-topics-heading">Every Talk Ties to a Strategic Pillar</h2>
        <p class="sp-lede">BRIDGE speakers are organized around the same six pillars that guide everything we do — so wherever your interest lies, there is a voice speaking to it.</p>
      </div>

      <div class="sp-topics-grid">
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-1')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg></span>
          <span class="sp-topic-name">Leadership Development</span>
        </a>
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-2')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          <span class="sp-topic-name">International Exchange</span>
        </a>
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-3')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg></span>
          <span class="sp-topic-name">Global Dialogue &amp; Diplomacy</span>
        </a>
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-4')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M15 2a7 7 0 00-4 12.7V17h4v-2.3A7 7 0 0015 2z"></path></svg></span>
          <span class="sp-topic-name">Innovation &amp; Entrepreneurship</span>
        </a>
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-5')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          <span class="sp-topic-name">Global Careers</span>
        </a>
        <a class="sp-topic-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-6')); ?>">
          <span class="sp-topic-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"></circle><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg></span>
          <span class="sp-topic-name">Community Development</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ FEATURED SPEAKERS ============ -->
  <section id="sp-speakers" class="sp-panel" aria-labelledby="sp-speakers-heading">
    <div class="sp-inner">
      <div class="sp-section-head">
        <span class="sp-eyebrow">Featured Speakers</span>
        <h2 class="sp-h2" id="sp-speakers-heading">Voices of Impact</h2>
        <p class="sp-lede">Distinguished experts who have addressed BRIDGE summits, dialogues, and leadership programs worldwide.</p>
      </div>

      <div class="sp-speaker-grid">

        <div class="sp-speaker-card">
          <div class="sp-speaker-photo">
            <img decoding="async" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=500&auto=format&fit=crop" alt="Sadan Habib" loading="lazy">
          </div>
          <div class="sp-speaker-name">Sadan Habib</div>
          <div class="sp-speaker-title">CEO, Highbeam Technologies</div>
          <a class="sp-speaker-pillar" href="<?php echo esc_url(home_url('/services/#svc-pillar-1')); ?>">Leadership</a>
        </div>

        <div class="sp-speaker-card">
          <div class="sp-speaker-photo">
            <img decoding="async" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&auto=format&fit=crop" alt="Dr. Daniel Mercer" loading="lazy">
          </div>
          <div class="sp-speaker-name">Dr. Daniel Mercer</div>
          <div class="sp-speaker-title">International Exchange Coordinator, Global Horizons Foundation</div>
          <a class="sp-speaker-pillar" href="<?php echo esc_url(home_url('/services/#svc-pillar-2')); ?>">Exchange</a>
        </div>

        <div class="sp-speaker-card">
          <div class="sp-speaker-photo">
            <img decoding="async" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&auto=format&fit=crop" alt="Ms. Sofia Rahman" loading="lazy">
          </div>
          <div class="sp-speaker-name">Ms. Sofia Rahman</div>
          <div class="sp-speaker-title">Director of Global Leadership, Meridian International Institute</div>
          <a class="sp-speaker-pillar" href="<?php echo esc_url(home_url('/services/#svc-pillar-3')); ?>">Dialogue</a>
        </div>

        <div class="sp-speaker-card">
          <div class="sp-speaker-photo">
            <img decoding="async" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=500&auto=format&fit=crop" alt="Dr. Michael Laurent" loading="lazy">
          </div>
          <div class="sp-speaker-name">Dr. Michael Laurent</div>
          <div class="sp-speaker-title">Senior Dialogue Advisor, Centre for Global Understanding</div>
          <a class="sp-speaker-pillar" href="<?php echo esc_url(home_url('/services/#svc-pillar-4')); ?>">Entrepreneurship</a>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ WHY SPEAK AT BRIDGE ============ -->
  <section id="sp-benefits" aria-labelledby="sp-benefits-heading">
    <div class="sp-inner">
      <div class="sp-section-head sp-center">
        <span class="sp-eyebrow">Why Speak At BRIDGE</span>
        <h2 class="sp-h2" id="sp-benefits-heading">A Platform Built for Real Exchange</h2>
        <p class="sp-lede" style="margin:0 auto;">BRIDGE events are designed for genuine dialogue, collaborative panels, and participatory workshops — here is what that means for speakers.</p>
      </div>

      <div class="sp-benefits-grid">
        <div class="sp-benefit-card">
          <span class="sp-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          <div class="sp-benefit-title">Reach a Global, Engaged Audience</div>
          <p class="sp-benefit-body">Connect directly with motivated young leaders, scholars, and institutional partners from across BRIDGE's international network.</p>
        </div>
        <div class="sp-benefit-card">
          <span class="sp-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg></span>
          <div class="sp-benefit-title">Shape a Strategic Pillar</div>
          <p class="sp-benefit-body">Every keynote is framed around one of BRIDGE's Six Strategic Pillars, ensuring your message drives tangible learning and follow-up.</p>
        </div>
        <div class="sp-benefit-card">
          <span class="sp-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          <div class="sp-benefit-title">Join an Esteemed Cohort</div>
          <p class="sp-benefit-body">Become a permanent part of the BRIDGE global roster alongside partner institutions, fellow keynote leaders, and policy advisors.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ GALLERY ============ -->
  <section id="sp-gallery" aria-labelledby="sp-gallery-heading">
    <div class="sp-inner">
      <div class="sp-section-head sp-center">
        <span class="sp-eyebrow">Inside BRIDGE</span>
        <h2 class="sp-h2" id="sp-gallery-heading">Moments From Past Talks</h2>
        <p class="sp-lede" style="margin:0 auto;">Snapshots from inspiring keynotes, panel debates, and interactive networking sessions.</p>
      </div>

      <div class="sp-gallery-grid">
        <div class="sp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&auto=format&fit=crop" alt="BRIDGE speaker moment" loading="lazy">
        </div>
        <div class="sp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&auto=format&fit=crop" alt="BRIDGE speaker moment" loading="lazy">
        </div>
        <div class="sp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&auto=format&fit=crop" alt="BRIDGE speaker moment" loading="lazy">
        </div>
        <div class="sp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=600&auto=format&fit=crop" alt="BRIDGE speaker moment" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section id="sp-cta" class="sp-band" aria-labelledby="sp-cta-heading">
    <div class="sp-inner sp-band-content">
      <span class="sp-eyebrow">Get Involved</span>
      <h2 class="sp-h2" id="sp-cta-heading">Know a Voice Worth Sharing?</h2>
      <p class="sp-lede" style="margin:0 auto;">Whether you would like to speak, or you would like to nominate a leader whose story fits BRIDGE's mission, we would love to hear from you.</p>
      <div class="sp-band-btn-row">
        <a class="sp-btn sp-btn--gold" href="<?php echo esc_url(home_url('/registration/')); ?>">
          Apply to Speak
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
        </a>
        <a class="sp-btn sp-btn--outline" href="<?php echo esc_url(home_url('/events-bridge/')); ?>">See Upcoming Events</a>
        <a class="sp-btn sp-btn--outline" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
      </div>
    </div>
  </section>

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

</main>

<?php
get_footer();

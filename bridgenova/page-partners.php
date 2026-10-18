<?php
/**
 * Template Name: Partners Page
 *
 * Exact replication of bridgenova.info with dark navy theme and high-res assets
 *
 * @package BridgeNova
 */

get_header();
?>

<style>
  .ptr-page, .ptr-page *, .ptr-page *::before, .ptr-page *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .ptr-page {
    background: #0a1c33;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
    color: #ffffff;
  }

  .ptr-page section { padding: 96px 24px; }
  .ptr-inner { max-width: 1180px; margin: 0 auto; }
  .ptr-page a { color: inherit; }

  .ptr-eyebrow {
    display: inline-block; color: #caa256; font-size: 13px; font-weight: 700;
    letter-spacing: 2.6px; text-transform: uppercase; margin-bottom: 16px;
  }
  .ptr-h1 { font-size: 50px; line-height: 1.15; font-weight: 700; letter-spacing: -0.6px; margin-bottom: 22px; color: #ffffff; }
  .ptr-h2 { font-size: 34px; line-height: 1.2; font-weight: 700; letter-spacing: -0.4px; margin-bottom: 16px; color: #ffffff; }
  .ptr-lede { font-size: 16.5px; line-height: 1.75; max-width: 680px; color: #b9cbc9; }
  .ptr-section-head { margin-bottom: 44px; }

  /* HERO */
  .ptr-hero {
    position: relative; min-height: 500px; display: flex; align-items: center;
    overflow: hidden; background-color: #0a1c33; padding: 160px 24px 100px 24px !important;
  }
  .ptr-hero-bg {
    position: absolute; inset: 0; background-size: cover; background-position: center; z-index: 0;
    background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1600&auto=format&fit=crop');
  }
  .ptr-hero-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(180deg, rgba(10,28,51,0.8) 0%, rgba(10,28,51,0.95) 100%);
  }
  .ptr-hero-content { position: relative; z-index: 2; max-width: 780px; }
  .ptr-hero-kicker { color: #caa256; font-style: italic; font-size: 16px; margin-bottom: 22px; display: block; font-weight: 600; }

  .ptr-btn {
    display: inline-flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 700;
    padding: 16px 32px; border-radius: 999px; border: none; cursor: pointer; text-decoration: none;
    transition: transform 300ms ease, box-shadow 300ms ease, color 300ms ease, border-color 300ms ease;
  }
  .ptr-btn--gold { background: #caa256; color: #0a1c33; font-weight: 800; }
  .ptr-btn--gold:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(202,162,86,0.35); background: #dfb76c; }
  .ptr-btn--outline { background: transparent; color: #ffffff; border: 1px solid rgba(255,255,255,0.4); }
  .ptr-btn--outline:hover { transform: translateY(-3px); border-color: #caa256; color: #caa256; }
  .ptr-btn svg { width: 16px; height: 16px; }
  .ptr-hero-cta-row { display: flex; flex-wrap: wrap; gap: 16px; }

  /* LOGO MARQUEE */
  .ptr-logo-bar-section { padding: 48px 0 !important; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); background: #081628; }
  .ptr-logo-bar-label { text-align: center; color: #caa256; font-size: 12.5px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 24px; }
  .ptr-logo-wrap { overflow: hidden; -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent); }
  .ptr-logo-track { display: flex; width: max-content; gap: 32px; align-items: center; animation: ptr-logo-scroll 32s linear infinite; }
  .ptr-logo-wrap:hover .ptr-logo-track { animation-play-state: paused; }
  .ptr-logo-tile {
    display: inline-flex; align-items: center; gap: 12px; height: 58px; padding: 0 24px;
    color: #dfece9; font-size: 14px; font-weight: 700; text-decoration: none; white-space: nowrap;
    background: #132a4d; border: 1px solid rgba(202,162,86,0.25); border-radius: 12px;
    transition: all 250ms ease;
  }
  .ptr-logo-tile:hover { border-color: #caa256; color: #caa256; transform: translateY(-2px); box-shadow: 0 4px 14px rgba(0,0,0,0.3); }
  .ptr-logo-tile svg { width: 22px; height: 22px; stroke: #caa256; fill: none; flex-shrink: 0; }

  @keyframes ptr-logo-scroll {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }

  /* CATEGORIES */
  .ptr-cat-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
  .ptr-cat-list { list-style: none; display: flex; flex-direction: column; gap: 14px; margin-top: 24px; }
  .ptr-cat-list li { display: flex; align-items: center; gap: 14px; font-size: 15px; font-weight: 600; color: #dfe8ea; }
  .ptr-cat-list li svg { width: 20px; height: 20px; stroke: #caa256; flex-shrink: 0; }

  .ptr-cat-visual-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .ptr-cat-visual-tile {
    aspect-ratio: 7 / 5; border-radius: 14px; overflow: hidden; position: relative;
    background: #132a4d; border: 1px solid rgba(255,255,255,0.08);
  }
  .ptr-cat-visual-tile img { width: 100%; height: 100%; object-fit: cover; transition: transform 400ms ease; }
  .ptr-cat-visual-tile:hover img { transform: scale(1.08); }

  /* SECTION VARIANTS */
  .ptr-section-alt { background: #0e223f; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05); }

  /* BENEFIT CARDS */
  .ptr-partner-cta { position: relative; overflow: hidden; }
  .ptr-partner-glow {
    position: absolute; left: 50%; top: 0; transform: translateX(-50%);
    width: 800px; height: 400px; border-radius: 50%;
    background: radial-gradient(circle, rgba(202,162,86,0.12) 0%, transparent 70%);
  }
  .ptr-benefit-card {
    background: #132a4d; border: 1px solid rgba(202,162,86,0.15); border-radius: 16px; padding: 30px 24px;
    transition: transform 300ms ease, border-color 300ms ease, box-shadow 300ms ease;
  }
  .ptr-benefit-card:hover { transform: translateY(-6px); border-color: #caa256; box-shadow: 0 10px 28px rgba(0,0,0,0.3); }
  .ptr-benefit-icon {
    width: 50px; height: 50px; border-radius: 50%; background: #caa256;
    display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
  }
  .ptr-benefit-icon svg { width: 22px; height: 22px; stroke: #0a1c33; fill: none; }
  .ptr-benefit-title { color: #ffffff; font-size: 16.5px; font-weight: 700; margin-bottom: 10px; }
  .ptr-benefit-body { color: #a9c0bd; font-size: 13.5px; line-height: 1.65; }

  /* REGISTER STRIP */
  .ptr-register-strip {
    background: linear-gradient(135deg, #132a4d 0%, #16304c 100%);
    border: 1px solid rgba(202,162,86,0.25); border-radius: 20px; padding: 48px; text-align: center;
    display: flex; flex-direction: column; align-items: center; gap: 18px;
  }

  @media (max-width: 980px) {
    .ptr-cat-grid { grid-template-columns: 1fr; }
    .ptr-cat-visual-grid[style*="repeat(4"] { grid-template-columns: repeat(2, 1fr) !important; }
    .ptr-h1 { font-size: 38px; }
  }
  @media (max-width: 640px) {
    .ptr-hero { padding: 130px 20px 70px 20px !important; }
    .ptr-cat-visual-grid { grid-template-columns: repeat(2, 1fr); }
    .ptr-cat-visual-grid[style*="repeat(4"] { grid-template-columns: 1fr !important; }
  }
</style>

<main class="ptr-page" id="ptr-main">

  <!-- ============ HERO ============ -->
  <section class="ptr-hero" aria-label="Partners introduction">
    <div class="ptr-hero-bg"></div>
    <div class="ptr-hero-overlay" aria-hidden="true"></div>
    <div class="ptr-inner">
      <div class="ptr-hero-content">
        <span class="ptr-eyebrow">Our Network</span>
        <h1 class="ptr-h1">Building Global Partnerships for Meaningful Impact</h1>
        <span class="ptr-hero-kicker">Bridge Global Network connects institutions and leaders worldwide.</span>
        <p class="ptr-lede" style="margin-bottom:32px;">At BRIDGE, we believe that lasting global progress is built through collaboration. Our partnerships bring together organizations, institutions, businesses, governments, researchers, and communities to create opportunities for dialogue, innovation, and sustainable development.</p>
        <div class="ptr-hero-cta-row">
          <a class="ptr-btn ptr-btn--gold" href="#ptr-become-partner">
            Join The Network
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
          </a>
          <a class="ptr-btn ptr-btn--outline" href="<?php echo esc_url(home_url('/registration/')); ?>">Register Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PARTNER LOGOS SCROLLING BAR ============ -->
  <section class="ptr-logo-bar-section" aria-label="Our partners">
    <div class="ptr-logo-bar-label">Trusted By Organizations Worldwide</div>
    <div class="ptr-logo-wrap">
      <div class="ptr-logo-track">

        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"/></svg>
          <span>Global Dialogue Alliance</span>
        </div>
        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg>
          <span>Horizon Academic Network</span>
        </div>
        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
          <span>TechBridge Innovation Lab</span>
        </div>
        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          <span>Commonwealth Youth Trust</span>
        </div>
        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span>UN SDG Action Hub</span>
        </div>
        <div class="ptr-logo-tile">
          <svg viewBox="0 0 24 24" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <span>Future Leaders Forum</span>
        </div>

        <!-- Duplicated for seamless loop -->
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"/></svg>
          <span>Global Dialogue Alliance</span>
        </div>
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg>
          <span>Horizon Academic Network</span>
        </div>
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
          <span>TechBridge Innovation Lab</span>
        </div>
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          <span>Commonwealth Youth Trust</span>
        </div>
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span>UN SDG Action Hub</span>
        </div>
        <div class="ptr-logo-tile" aria-hidden="true">
          <svg viewBox="0 0 24 24" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <span>Future Leaders Forum</span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ ACADEMIC & RESEARCH INSTITUTIONS ============ -->
  <section aria-labelledby="ptr-academic-heading">
    <div class="ptr-inner">
      <div class="ptr-section-head">
        <span class="ptr-eyebrow">Our Partner Network</span>
        <h2 class="ptr-h2">Building Strategic Alliances with Leading Institutions</h2>
        <p class="ptr-lede">BRIDGE collaborates with a diverse network of universities, think tanks, and research organizations to promote knowledge exchange and develop future leaders.</p>
      </div>

      <div class="ptr-cat-grid">
        <div>
          <span class="ptr-eyebrow">Category</span>
          <h3 class="ptr-h2" id="ptr-academic-heading" style="font-size:26px;">Academic &amp; Research Institutions</h3>
          <p class="ptr-lede">We work with higher education institutions and policy think tanks to foster student exchange, research partnerships, and joint conferences.</p>
          <ul class="ptr-cat-list">
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg>Research partnerships &amp; policy whitepapers</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg>Student exchange and semester abroad programs</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>Cross-university symposiums &amp; academic forums</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg>Leadership development pipelines for graduates</li>
          </ul>
        </div>
        <div class="ptr-cat-visual-grid">
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=500&auto=format&fit=crop" alt="Academic partnership" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=500&auto=format&fit=crop" alt="Research collaboration" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=500&auto=format&fit=crop" alt="Academic forum" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=500&auto=format&fit=crop" alt="University conference" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?w=500&auto=format&fit=crop" alt="Student exchange workshop" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=500&auto=format&fit=crop" alt="Leadership graduation" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ INTERNATIONAL & CULTURAL ORGANIZATIONS ============ -->
  <section class="ptr-section-alt" aria-labelledby="ptr-cultural-heading">
    <div class="ptr-inner">
      <div class="ptr-cat-grid">
        <div class="ptr-cat-visual-grid" style="order:2;">
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=500&auto=format&fit=crop" alt="Cultural exchange" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=500&auto=format&fit=crop" alt="International forum" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=500&auto=format&fit=crop" alt="Global leadership summit" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=500&auto=format&fit=crop" alt="Intercultural learning" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=500&auto=format&fit=crop" alt="Cultural cooperation agreement" loading="lazy">
          </div>
          <div class="ptr-cat-visual-tile">
            <img decoding="async" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=500&auto=format&fit=crop" alt="International youth festival" loading="lazy">
          </div>
        </div>
        <div style="order:1;">
          <span class="ptr-eyebrow">Category</span>
          <h3 class="ptr-h2" id="ptr-cultural-heading" style="font-size:26px;">International &amp; Cultural Organizations</h3>
          <p class="ptr-lede">BRIDGE works with global diplomatic missions, cultural bodies, and international networks to promote cross-cultural understanding, bilateral dialogue, and cooperation.</p>
          <ul class="ptr-cat-list">
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg>Cultural immersion and bilateral exchanges</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg>Diplomatic roundtables &amp; international forums</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Global leadership initiatives for change-makers</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg>Intercultural dialogue and diversity workshops</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHY PARTNER WITH BRIDGE ============ -->
  <section class="ptr-partner-cta" id="ptr-become-partner" aria-labelledby="ptr-partner-heading">
    <div class="ptr-partner-glow" aria-hidden="true"></div>
    <div class="ptr-inner">
      <div class="ptr-section-head" style="text-align:center; margin-left:auto; margin-right:auto; max-width:700px;">
        <span class="ptr-eyebrow">Become a Partner</span>
        <h2 class="ptr-h2" id="ptr-partner-heading">Why Organizations Partner With BRIDGE</h2>
        <p class="ptr-lede" style="margin:0 auto;">Partnership is at the heart of everything we do. Whether you are an academic institution, international NGO, business, or community network, here is what a strategic alliance with BRIDGE unlocks.</p>
      </div>

      <div class="ptr-cat-visual-grid" style="grid-template-columns:repeat(4,1fr); margin-bottom:0;">
        <div class="ptr-benefit-card">
          <span class="ptr-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          <div class="ptr-benefit-title">Expanded Global Reach</div>
          <p class="ptr-benefit-body">Tap into an active international network of young leaders, university students, and partner institutions across 30+ countries.</p>
        </div>
        <div class="ptr-benefit-card">
          <span class="ptr-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg></span>
          <div class="ptr-benefit-title">Co-Branded Visibility</div>
          <p class="ptr-benefit-body">Gain prominent recognition across flagship summits, conferences, and digital outreach reaching an engaged global audience.</p>
        </div>
        <div class="ptr-benefit-card">
          <span class="ptr-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          <div class="ptr-benefit-title">Access to Talent Pipelines</div>
          <p class="ptr-benefit-body">Direct connection to high-achieving alumni, exchange scholars, and motivated future professionals ready to drive impact.</p>
        </div>
        <div class="ptr-benefit-card">
          <span class="ptr-benefit-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          <div class="ptr-benefit-title">Shared Social Impact</div>
          <p class="ptr-benefit-body">Align your organizational mission with tangible outcomes in leadership development, diplomacy, and community development.</p>
        </div>
      </div>

      <div class="ptr-register-strip" style="margin-top:56px;">
        <span class="ptr-eyebrow">Join The Network</span>
        <h2 class="ptr-h2" style="margin-bottom:4px;">Ready to Partner With BRIDGE?</h2>
        <p class="ptr-lede">Take the first step toward collaborative leadership and global opportunity &mdash; connect with our partnerships team today.</p>
        <a class="ptr-btn ptr-btn--gold" href="<?php echo esc_url(home_url('/registration/')); ?>">
          Register Now
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
        </a>
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

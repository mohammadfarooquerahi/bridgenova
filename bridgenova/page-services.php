<?php
/**
 * Template Name: Services Page
 *
 * Services Page Template - BridgeNova
 *
 * @package BridgeNova
 */

get_header();
?>

<style>

  /* ============================================================
     RESET (scoped to .svc-page only — no global reset)
     ============================================================ */
  .svc-page, .svc-page *, .svc-page *::before, .svc-page *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .svc-page {
    background: #0a1c33;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
    color: #ffffff;
  }

  .svc-page section { padding: 96px 24px; }
  .svc-inner { max-width: 1180px; margin: 0 auto; }
  .svc-page a { color: inherit; }

  .svc-page button:focus-visible,
  .svc-page a:focus-visible {
    outline: 2px solid #caa256;
    outline-offset: 3px;
  }

  /* ============================================================
     REVEAL ANIMATIONS
     ============================================================ */
  .svc-reveal {
    opacity: 1;
    transition: opacity 700ms ease, transform 700ms ease;
  }
  html.svc-js-ready .svc-reveal:not(.svc-in-view) {
    opacity: 0;
    transform: translateY(24px);
  }
  .svc-reveal.svc-in-view { opacity: 1; transform: translateY(0); }

  .svc-reveal-stagger > * {
    opacity: 1;
    transition: opacity 600ms ease, transform 600ms ease;
  }
  html.svc-js-ready .svc-reveal-stagger:not(.svc-in-view) > * {
    opacity: 0;
    transform: translateY(20px);
  }
  .svc-reveal-stagger.svc-in-view > * { opacity: 1; transform: translateY(0); }
  .svc-reveal-stagger.svc-in-view > *:nth-child(1) { transition-delay: 0ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(2) { transition-delay: 60ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(3) { transition-delay: 120ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(4) { transition-delay: 180ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(5) { transition-delay: 240ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(6) { transition-delay: 300ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(7) { transition-delay: 360ms; }
  .svc-reveal-stagger.svc-in-view > *:nth-child(8) { transition-delay: 420ms; }

  @media (prefers-reduced-motion: reduce) {
    .svc-reveal, .svc-reveal-stagger > * {
      transition: none !important; opacity: 1 !important; transform: none !important;
    }
  }

  /* ============================================================
     SHARED HEADING STYLES
     ============================================================ */
  .svc-eyebrow {
    display: inline-block; color: #caa256; font-size: 13px; font-weight: 700;
    letter-spacing: 2.6px; text-transform: uppercase; margin-bottom: 16px;
  }

  .svc-h1 { font-size: 52px; line-height: 1.14; font-weight: 700; letter-spacing: -0.6px; margin-bottom: 22px; }
  .svc-h2 { font-size: 36px; line-height: 1.2; font-weight: 700; letter-spacing: -0.4px; margin-bottom: 16px; }
  .svc-h2--light { color: #ffffff; }
  .svc-h2--dark  { color: #16304c; }

  .svc-lede { font-size: 17px; line-height: 1.75; max-width: 680px; }
  .svc-lede--light { color: #b9cbc9; }
  .svc-lede--dark  { color: #444444; }

  .svc-section-head { margin-bottom: 52px; }
  .svc-section-head.svc-center {
    text-align: center; max-width: 700px; margin-left: auto; margin-right: auto;
  }

  .svc-panel-section { background: #ffffff; }
  .svc-skip-link {
    position: absolute; left: -9999px; top: 0; background: #caa256; color: #16304c;
    padding: 12px 20px; font-weight: 700; border-radius: 0 0 8px 0; z-index: 100;
  }
  .svc-skip-link:focus { left: 0; }

  /* ============================================================
     HERO
     ============================================================ */
  .svc-hero {
    position: relative; min-height: 460px; display: flex; align-items: center;
    background: #0a1c33; overflow: hidden;
  }
  .svc-hero-globe {
    position: absolute; right: -160px; top: 50%; transform: translateY(-50%);
    width: 560px; height: 560px; border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #1c3f3d 0%, #132a4d 70%); opacity: 0.7;
  }
  .svc-hero-content { position: relative; z-index: 1; max-width: 760px; }
  .svc-hero-sub {
    color: #b9cbc9; font-size: 17px; line-height: 1.75; max-width: 620px; margin-bottom: 32px;
  }

  .svc-btn {
    display: inline-flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 700;
    padding: 16px 30px; border-radius: 999px; border: none; cursor: pointer;
    transition: transform 300ms ease, box-shadow 300ms ease, color 300ms ease, border-color 300ms ease;
    font-family: inherit; text-decoration: none;
  }
  .svc-btn--gold { background: #caa256; color: #16304c; }
  .svc-btn--gold:hover { transform: translateY(-3px); box-shadow: 0 10px 24px rgba(202,162,86,0.35); }
  .svc-btn--outline { background: transparent; color: #ffffff; border: 1px solid rgba(255,255,255,0.4); }
  .svc-btn--outline:hover { transform: translateY(-3px); border-color: #caa256; color: #caa256; }
  .svc-btn svg { width: 16px; height: 16px; }
  .svc-hero-cta-row { display: flex; flex-wrap: wrap; gap: 16px; }

  /* ============================================================
     SERVICES OVERVIEW GRID (jump nav to full pillar sections)
     ============================================================ */
  .svc-overview-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }

  .svc-overview-card {
    background: #132a4d; border: 1px solid transparent; border-radius: 14px; padding: 28px;
    width: 100%; text-align: left; cursor: pointer; font-family: inherit; color: inherit;
    transition: background-color 300ms ease, border-color 300ms ease, box-shadow 300ms ease, transform 300ms ease;
  }
  .svc-overview-card:hover, .svc-overview-card:focus-visible {
    transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,0,0,.3); border-color: #caa256;
  }
  .svc-overview-index { color: #2f5350; font-size: 28px; font-weight: 700; margin-bottom: 22px; display: block; }
  .svc-overview-icon-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px; }
  .svc-overview-title { color: #ffffff; font-size: 17px; font-weight: 600; }
  .svc-overview-icon {
    width: 48px; height: 48px; border-radius: 50%; background: #caa256;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .svc-overview-icon svg { width: 22px; height: 22px; stroke: #16304c; fill: none; }
  .svc-overview-hint { color: #7f9997; font-size: 12.5px; margin-top: 16px; display: block; }

  /* ============================================================
     DETAILED SERVICE SECTIONS (alternating dark / light)
     ============================================================ */
  .svc-service {
    scroll-margin-top: 24px;
  }

  .svc-service-head {
    display: flex; align-items: center; gap: 20px; margin-bottom: 18px;
  }

  .svc-service-icon-lg {
    width: 64px; height: 64px; border-radius: 50%; background: #caa256;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .svc-service-icon-lg svg { width: 30px; height: 30px; stroke: #16304c; fill: none; }

  .svc-service--light .svc-service-icon-lg { background: #16304c; }
  .svc-service--light .svc-service-icon-lg svg { stroke: #caa256; }

  .svc-service-num { color: #caa256; font-size: 14px; font-weight: 700; letter-spacing: 1px; }
  .svc-service--light .svc-service-num { color: #b8862f; }

  .svc-service-grid {
    display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 48px; align-items: start;
  }

  .svc-bullet-list { list-style: none; border-left: 3px solid #caa256; padding-left: 20px; display: flex; flex-direction: column; gap: 14px; }
  .svc-bullet-list li { font-size: 15px; font-weight: 500; }
  .svc-service--dark .svc-bullet-list li { color: #dfe8ea; }
  .svc-service--light .svc-bullet-list li { color: #222222; }

  .svc-sub-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
  .svc-sub-grid.svc-cols-4 { grid-template-columns: repeat(4, 1fr); }
  .svc-sub-grid.svc-cols-3 { grid-template-columns: repeat(3, 1fr); }

  .svc-sub-tile {
    border-radius: 14px; padding: 22px; display: flex; flex-direction: column; gap: 12px;
    transition: transform 300ms ease;
  }
  .svc-sub-tile:hover { transform: translateY(-4px); }
  .svc-service--dark .svc-sub-tile { background: #16304c; }
  .svc-service--light .svc-sub-tile { background: #edf4f6; }

  .svc-sub-icon {
    width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
  }
  .svc-service--dark .svc-sub-icon { background: #caa256; }
  .svc-service--light .svc-sub-icon { background: #16304c; }
  .svc-sub-icon svg { width: 20px; height: 20px; fill: none; }
  .svc-service--dark .svc-sub-icon svg { stroke: #16304c; }
  .svc-service--light .svc-sub-icon svg { stroke: #caa256; }

  .svc-sub-title { font-size: 14.5px; font-weight: 700; }
  .svc-service--dark .svc-sub-title { color: #ffffff; }
  .svc-service--light .svc-sub-title { color: #16304c; }

  .svc-sub-body { font-size: 13px; line-height: 1.6; }
  .svc-service--dark .svc-sub-body { color: #b9cbc9; }
  .svc-service--light .svc-sub-body { color: #555555; }

  .svc-strip-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; }
  .svc-strip {
    border-radius: 10px; padding: 16px 20px; display: flex; align-items: center; gap: 14px;
  }
  .svc-service--dark .svc-strip { background: #16304c; }
  .svc-service--light .svc-strip { background: #edf4f6; }
  .svc-strip svg { width: 20px; height: 20px; stroke: #caa256; flex-shrink: 0; }
  .svc-strip span { font-size: 14.5px; font-weight: 600; }
  .svc-service--dark .svc-strip span { color: #ffffff; }
  .svc-service--light .svc-strip span { color: #222222; }

  /* ============================================================
     SIGNATURE PROGRAMS
     ============================================================ */
  .svc-program-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; }
  .svc-program-tile { border-radius: 14px; padding: 26px 16px; text-align: center; transition: transform 300ms ease; }
  .svc-program-tile:hover { transform: translateY(-4px); }
  .svc-program-tile--a { background: #16304c; }
  .svc-program-tile--b { background: #132a4d; }
  .svc-program-icon {
    width: 48px; height: 48px; border-radius: 50%; background: #caa256;
    display: flex; align-items: center; justify-content: center; margin: 0 auto 14px auto;
  }
  .svc-program-icon svg { width: 21px; height: 21px; stroke: #16304c; fill: none; }
  .svc-program-title { color: #ffffff; font-size: 13.5px; font-weight: 700; }

  /* ============================================================
     ACCESS / MEMBERSHIP STRIP
     ============================================================ */
  .svc-tier-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px; }
  .svc-tier-card { background: #edf4f6; border-radius: 14px; padding: 28px 18px; text-align: center; }
  .svc-tier-card--highlight { background: #16304c; }
  .svc-tier-icon {
    width: 52px; height: 52px; border-radius: 50%; background: #16304c;
    display: flex; align-items: center; justify-content: center; margin: 0 auto 14px auto;
  }
  .svc-tier-card--highlight .svc-tier-icon { background: #caa256; }
  .svc-tier-icon svg { width: 22px; height: 22px; stroke: #caa256; fill: none; }
  .svc-tier-card--highlight .svc-tier-icon svg { stroke: #16304c; }
  .svc-tier-name { color: #16304c; font-size: 14.5px; font-weight: 700; margin-bottom: 6px; }
  .svc-tier-card--highlight .svc-tier-name { color: #ffffff; }
  .svc-tier-meta { color: #666666; font-size: 12.5px; font-style: italic; }
  .svc-tier-card--highlight .svc-tier-meta { color: #caa256; }

  /* ============================================================
     CTA
     ============================================================ */
  .svc-cta { position: relative; overflow: hidden; text-align: center; }
  .svc-cta-glow {
    position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    width: 700px; height: 700px; border-radius: 50%;
    background: radial-gradient(circle, rgba(202,162,86,0.12) 0%, transparent 70%);
  }
  .svc-cta-content { position: relative; z-index: 1; }
  .svc-cta .svc-h2 { max-width: 700px; margin-left: auto; margin-right: auto; }
  .svc-cta .svc-lede { margin-left: auto; margin-right: auto; }
  .svc-cta-btn-row { display: flex; justify-content: center; gap: 16px; margin-top: 36px; flex-wrap: wrap; }

  /* ============================================================
     FOOTER
     ============================================================ */
  .svc-footer { background: #0a1c1b; padding: 64px 24px 32px 24px; }
  .svc-footer-grid {
    display: grid; grid-template-columns: 1.4fr 1fr 1fr 1fr; gap: 40px;
    padding-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .svc-footer-brand {
    font-family: Georgia, "Times New Roman", serif; font-weight: 700; font-size: 24px;
    letter-spacing: 4px; color: #ffffff; margin-bottom: 14px;
  }
  .svc-footer-tag { color: #8ba4a1; font-size: 14px; line-height: 1.7; max-width: 320px; }
  .svc-footer-heading {
    color: #caa256; font-size: 13px; font-weight: 700; letter-spacing: 1.5px;
    text-transform: uppercase; margin-bottom: 18px;
  }
  .svc-footer-links { list-style: none; display: flex; flex-direction: column; gap: 12px; }
  .svc-footer-links a { color: #b9cbc9; font-size: 14px; text-decoration: none; transition: color 200ms ease; }
  .svc-footer-links a:hover { color: #caa256; }
  .svc-footer-bottom {
    display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;
    gap: 12px; padding-top: 28px; color: #6f8886; font-size: 13px;
  }

  /* ============================================================
     RESPONSIVE
     ============================================================ */
  @media (max-width: 980px) {
    .svc-overview-grid { grid-template-columns: repeat(2, 1fr); }
    .svc-service-grid { grid-template-columns: 1fr; }
    .svc-sub-grid.svc-cols-4 { grid-template-columns: repeat(2, 1fr); }
    .svc-sub-grid.svc-cols-3 { grid-template-columns: repeat(2, 1fr); }
    .svc-strip-grid { grid-template-columns: 1fr; }
    .svc-program-grid { grid-template-columns: repeat(3, 1fr); }
    .svc-tier-grid { grid-template-columns: repeat(3, 1fr); }
    .svc-footer-grid { grid-template-columns: 1fr 1fr; }
    .svc-h1 { font-size: 40px; }
  }

  @media (max-width: 620px) {
    .svc-page section { padding: 60px 18px; }
    .svc-h1 { font-size: 30px; }
    .svc-h2 { font-size: 25px; }
    .svc-overview-grid { grid-template-columns: 1fr; }
    .svc-sub-grid, .svc-sub-grid.svc-cols-4, .svc-sub-grid.svc-cols-3 { grid-template-columns: 1fr; }
    .svc-program-grid { grid-template-columns: repeat(2, 1fr); }
    .svc-tier-grid { grid-template-columns: repeat(2, 1fr); }
    .svc-service-head { align-items: flex-start; }
    .svc-hero { min-height: 400px; }
    .svc-hero-globe { opacity: 0.35; }
    .svc-footer-grid { grid-template-columns: 1fr; }
    .svc-footer-bottom { flex-direction: column; align-items: flex-start; }
  }

</style>

<main class="svc-page" id="svc-main">

  <!-- ============ HERO ============ -->
  <section class="svc-hero" aria-label="Services introduction">
    <div class="svc-hero-globe" aria-hidden="true"></div>
    <div class="svc-inner">
      <div class="svc-hero-content svc-reveal">
        <span class="svc-eyebrow">What We Offer</span>
        <h1 class="svc-h1">Our Services</h1>
        <p class="svc-hero-sub">Six strategic pillars of programs and services — leadership development, international exchange, global dialogue, entrepreneurship, global careers, and community development — designed to move people from local involvement to global impact.</p>
        <div class="svc-hero-cta-row">
          <a class="svc-btn svc-btn--gold" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
          </a>
          <a class="svc-btn svc-btn--outline" href="#svc-pillar-1">Browse Services</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICES OVERVIEW (jump grid) ============ -->
  <section aria-labelledby="svc-overview-heading">
    <div class="svc-inner">
      <div class="svc-section-head">
        <span class="svc-eyebrow">At A Glance</span>
        <h2 class="svc-h2 svc-h2--light" id="svc-overview-heading">Six Pillars of Service</h2>
        <p class="svc-lede svc-lede--light">Tap any pillar to jump straight to its full service breakdown below.</p>
      </div>
      <div class="svc-overview-grid svc-reveal-stagger">

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-1')">
          <span class="svc-overview-index">01</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">Leadership Development</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-2')">
          <span class="svc-overview-index">02</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">International Exchange</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-3')">
          <span class="svc-overview-index">03</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">Global Dialogue</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"></rect><path d="M3 10h18M8 4v3M16 4v3"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-4')">
          <span class="svc-overview-index">04</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">Entrepreneurship</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"></path><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-5')">
          <span class="svc-overview-index">05</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">Global Careers</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

        <button type="button" class="svc-overview-card" onclick="svcJump('svc-pillar-6')">
          <span class="svc-overview-index">06</span>
          <div class="svc-overview-icon-row">
            <span class="svc-overview-title">Community Development</span>
            <span class="svc-overview-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          </div>
          <span class="svc-overview-hint">↓ View service details</span>
        </button>

      </div>
    </div>
  </section>

  <!-- ============ SERVICE 01: LEADERSHIP DEVELOPMENT ============ -->
  <section class="svc-service svc-service--dark" id="svc-pillar-1" aria-labelledby="svc-pillar-1-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 01</span>
          <h2 class="svc-h2 svc-h2--light" id="svc-pillar-1-heading" style="margin-bottom:0;">Leadership Development</h2>
        </div>
      </div>
      <div class="svc-service-grid">
        <div class="svc-reveal">
          <p class="svc-lede svc-lede--light" style="margin-bottom:24px; font-style:italic;">Train future leaders through practical, hands-on experiences that build real-world capability.</p>
          <ul class="svc-bullet-list">
            <li>Leadership Academy</li>
            <li>Public Speaking</li>
            <li>Negotiation</li>
            <li>Diplomacy</li>
            <li>Emotional Intelligence</li>
            <li>Conflict Resolution</li>
            <li>Strategic Thinking</li>
          </ul>
        </div>
        <div class="svc-sub-grid svc-cols-3 svc-reveal-stagger">
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path></svg></span>
            <span class="svc-sub-title">Leadership Academy</span>
            <span class="svc-sub-body">Structured, cohort-based training in core leadership competencies.</span>
          </div>
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"></path></svg></span>
            <span class="svc-sub-title">Public Speaking</span>
            <span class="svc-sub-body">Confidence and clarity for high-stakes communication.</span>
          </div>
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg></span>
            <span class="svc-sub-title">Negotiation</span>
            <span class="svc-sub-body">Practical frameworks for reaching durable agreements.</span>
          </div>
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg></span>
            <span class="svc-sub-title">Diplomacy</span>
            <span class="svc-sub-body">Cross-cultural tact for representing people and institutions.</span>
          </div>
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
            <span class="svc-sub-title">Emotional Intelligence</span>
            <span class="svc-sub-body">Self-awareness and empathy as leadership foundations.</span>
          </div>
          <div class="svc-sub-tile">
            <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg></span>
            <span class="svc-sub-title">Conflict Resolution</span>
            <span class="svc-sub-body">Turning disagreement into constructive outcomes.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE 02: INTERNATIONAL EXCHANGE ============ -->
  <section class="svc-service svc-service--light svc-panel-section" id="svc-pillar-2" aria-labelledby="svc-pillar-2-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 02</span>
          <h2 class="svc-h2 svc-h2--dark" id="svc-pillar-2-heading" style="margin-bottom:0;">International Exchange</h2>
        </div>
      </div>
      <div class="svc-sub-grid svc-reveal-stagger">
        <div class="svc-sub-tile">
          <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          <span class="svc-sub-title">Volunteer Exchange (4&ndash;12 weeks)</span>
          <span class="svc-sub-body">Education &middot; Healthcare &middot; Climate Action &middot; Women's Empowerment &middot; Refugee Support</span>
        </div>
        <div class="svc-sub-tile">
          <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          <span class="svc-sub-title">Professional Exchange</span>
          <span class="svc-sub-body">Engineering &middot; IT &middot; AI &middot; Business &middot; Tourism &middot; NGOs &middot; Government &middot; Agriculture</span>
        </div>
        <div class="svc-sub-tile">
          <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg></span>
          <span class="svc-sub-title">Research Exchange</span>
          <span class="svc-sub-body">Joint Research &middot; Innovation Labs &middot; Student Mobility</span>
        </div>
        <div class="svc-sub-tile">
          <span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          <span class="svc-sub-title">Cultural Exchange</span>
          <span class="svc-sub-body">Language Immersion &middot; Host Families &middot; International Festivals</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE 03: GLOBAL DIALOGUE ============ -->
  <section class="svc-service svc-service--dark" id="svc-pillar-3" aria-labelledby="svc-pillar-3-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"></rect><path d="M3 10h18M8 4v3M16 4v3"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 03</span>
          <h2 class="svc-h2 svc-h2--light" id="svc-pillar-3-heading" style="margin-bottom:0;">Global Dialogue</h2>
        </div>
      </div>
      <div class="svc-strip-grid svc-reveal-stagger">
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>International Peace Forums</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Youth Diplomacy Summit</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Model United Nations</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Interfaith Dialogue</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Economic Forums</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Women Leadership Summit</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Climate Summit</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Technology Summit</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Education Summit</span></div>
        <div class="svc-strip"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg><span>Annual Global Leadership Conference</span></div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE 04: ENTREPRENEURSHIP ============ -->
  <section class="svc-service svc-service--light svc-panel-section" id="svc-pillar-4" aria-labelledby="svc-pillar-4-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"></path><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 04</span>
          <h2 class="svc-h2 svc-h2--dark" id="svc-pillar-4-heading" style="margin-bottom:0;">Entrepreneurship</h2>
        </div>
      </div>
      <p class="svc-lede svc-lede--dark svc-reveal" style="font-style:italic; margin-bottom:28px;">Fueling the next wave of founders, innovators, and investors.</p>
      <div class="svc-sub-grid svc-cols-4 svc-reveal-stagger">
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Startup Accelerator</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Business Incubator</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Investor Matching</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Innovation Challenges</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Pitch Competitions</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Mentorship</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 7.1-1.01z"></path></svg></span><span class="svc-sub-title">Business Networking</span></div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE 05: GLOBAL CAREERS ============ -->
  <section class="svc-service svc-service--dark" id="svc-pillar-5" aria-labelledby="svc-pillar-5-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 05</span>
          <h2 class="svc-h2 svc-h2--light" id="svc-pillar-5-heading" style="margin-bottom:0;">Global Careers</h2>
        </div>
      </div>
      <p class="svc-lede svc-lede--light svc-reveal" style="font-style:italic; margin-bottom:28px;">A single career portal connecting members to global opportunity.</p>
      <div class="svc-sub-grid svc-cols-3 svc-reveal-stagger">
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span><span class="svc-sub-title">Career Portal</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span><span class="svc-sub-title">International Jobs</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span><span class="svc-sub-title">Internships</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span><span class="svc-sub-title">Scholarships</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span><span class="svc-sub-title">Volunteer Opportunities</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg></span><span class="svc-sub-title">Research Fellowships</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span><span class="svc-sub-title">Mentorship</span></div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE 06: COMMUNITY DEVELOPMENT ============ -->
  <section class="svc-service svc-service--light svc-panel-section" id="svc-pillar-6" aria-labelledby="svc-pillar-6-heading">
    <div class="svc-inner">
      <div class="svc-service-head svc-reveal">
        <span class="svc-service-icon-lg" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path><path d="M7 12l2.5 2.5L14 10"></path></svg></span>
        <div>
          <span class="svc-service-num">Service 06</span>
          <h2 class="svc-h2 svc-h2--dark" id="svc-pillar-6-heading" style="margin-bottom:0;">Community Development</h2>
        </div>
      </div>
      <div class="svc-sub-grid svc-cols-3 svc-reveal-stagger">
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path></svg></span><span class="svc-sub-title">Education</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span><span class="svc-sub-title">Health</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 019 6c0-2 1-3.5 2.5-5C13 3 14 4.5 14 6a7 7 0 01-3 14z"></path></svg></span><span class="svc-sub-title">Food Security</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69s-7 7.44-7 11.31a7 7 0 0014 0c0-3.87-7-11.31-7-11.31z"></path></svg></span><span class="svc-sub-title">Clean Water</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg></span><span class="svc-sub-title">Renewable Energy</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a8 8 0 0116 0v1"></path></svg></span><span class="svc-sub-title">Skills Development</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5z"></path></svg></span><span class="svc-sub-title">Disaster Relief</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"></path></svg></span><span class="svc-sub-title">Poverty Reduction</span></div>
        <div class="svc-sub-tile"><span class="svc-sub-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span><span class="svc-sub-title">Women's Empowerment</span></div>
      </div>
    </div>
  </section>

  <!-- ============ SIGNATURE PROGRAMS (delivery formats) ============ -->
  <section aria-labelledby="svc-programs-heading">
    <div class="svc-inner">
      <div class="svc-section-head">
        <span class="svc-eyebrow">How Services Are Delivered</span>
        <h2 class="svc-h2 svc-h2--light" id="svc-programs-heading">Signature Programs</h2>
        <p class="svc-lede svc-lede--light">Our pillars come to life through these flagship program formats.</p>
      </div>
      <div class="svc-program-grid svc-reveal-stagger">
        <div class="svc-program-tile svc-program-tile--a"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Global Volunteer</span></div>
        <div class="svc-program-tile svc-program-tile--b"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Global Internship</span></div>
        <div class="svc-program-tile svc-program-tile--a"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Future Leaders</span></div>
        <div class="svc-program-tile svc-program-tile--b"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Women Leaders</span></div>
        <div class="svc-program-tile svc-program-tile--a"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Young Diplomats</span></div>
        <div class="svc-program-tile svc-program-tile--b"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Startup Accelerator</span></div>
        <div class="svc-program-tile svc-program-tile--a"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Peace Fellowship</span></div>
        <div class="svc-program-tile svc-program-tile--b"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Climate Leaders</span></div>
        <div class="svc-program-tile svc-program-tile--a"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Innovation Challenge</span></div>
        <div class="svc-program-tile svc-program-tile--b"><span class="svc-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span><span class="svc-program-title">Global Scholars</span></div>
      </div>
    </div>
  </section>

  <!-- ============ HOW TO ACCESS (membership tiers) ============ -->
  <section class="svc-panel-section" aria-labelledby="svc-access-heading">
    <div class="svc-inner">
      <div class="svc-section-head">
        <span class="svc-eyebrow" style="color:#b8862f;">How To Access</span>
        <h2 class="svc-h2 svc-h2--dark" id="svc-access-heading">Membership Tiers</h2>
        <p class="svc-lede svc-lede--dark">Services are unlocked through membership, with a tier suited to your age and stage.</p>
      </div>
      <div class="svc-tier-grid svc-reveal-stagger">
        <div class="svc-tier-card">
          <span class="svc-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></span>
          <div class="svc-tier-name">Explorer</div>
          <div class="svc-tier-meta">Age: 15 &ndash; 18</div>
        </div>
        <div class="svc-tier-card">
          <span class="svc-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          <div class="svc-tier-name">Member</div>
          <div class="svc-tier-meta">Age: 18 &ndash; 30</div>
        </div>
        <div class="svc-tier-card">
          <span class="svc-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          <div class="svc-tier-name">Professional Member</div>
          <div class="svc-tier-meta">Age: 25 &ndash; 40</div>
        </div>
        <div class="svc-tier-card">
          <span class="svc-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"></rect><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"></path></svg></span>
          <div class="svc-tier-name">Institutional Member</div>
          <div class="svc-tier-meta">Organizations</div>
        </div>
        <div class="svc-tier-card svc-tier-card--highlight">
          <span class="svc-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg></span>
          <div class="svc-tier-name">Ambassador</div>
          <div class="svc-tier-meta">By invitation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="svc-cta" id="svc-cta" aria-labelledby="svc-cta-heading">
    <div class="svc-cta-glow" aria-hidden="true"></div>
    <div class="svc-inner svc-cta-content svc-reveal">
      <span class="svc-eyebrow">Get In Touch</span>
      <h2 class="svc-h2 svc-h2--light" id="svc-cta-heading">Ready to Access Our Services?</h2>
      <p class="svc-lede svc-lede--light">Reach out to learn which pillar and membership tier fit you best.</p>
      <div class="svc-cta-btn-row">
        <a class="svc-btn svc-btn--gold" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">
          Contact Us
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"></path><path d="M4 6l8 7 8-7"></path></svg>
        </a>
      </div>
    </div>
  </section>
  <!-- WordPress Page Editor Content (Client Editable) -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( ! empty( trim( get_the_content() ) ) ) : ?>
      <section class="svc-panel-section svc-custom-page-content" style="background:#0a1c33; padding: 60px 24px; color: #ffffff;">
        <div class="svc-inner" style="max-width:1200px; margin:0 auto;">
          <?php the_content(); ?>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; endif; ?>

</main>



<script>
  /* ============================================================
     JUMP TO SERVICE SECTION
     ============================================================ */
  document.documentElement.classList.add('svc-js-ready');

  function svcJump(sectionId) {
    var target = document.getElementById(sectionId);
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  document.addEventListener('DOMContentLoaded', function () {

    /* ---------- Smooth scroll for all in-page anchors ---------- */
    document.querySelectorAll('.svc-page a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var id = link.getAttribute('href').slice(1);
        var target = document.getElementById(id);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    /* ---------- Footer year ---------- */
    var yearEl = document.getElementById('svc-year');
    if (yearEl) { yearEl.textContent = new Date().getFullYear(); }

    /* ---------- Intersection Observer reveal animations ---------- */
    var revealTargets = document.querySelectorAll('.svc-reveal, .svc-reveal-stagger');
    if ('IntersectionObserver' in window && revealTargets.length) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('svc-in-view');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

      revealTargets.forEach(function (el) { observer.observe(el); });
    } else {
      revealTargets.forEach(function (el) { el.classList.add('svc-in-view'); });
    }

  });
</script>

<?php
get_footer();

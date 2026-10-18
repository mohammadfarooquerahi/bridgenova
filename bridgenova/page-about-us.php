<?php
/**
 * Template Name: About Page
 *
 * Exact replication of bridgenova.info
 *
 * @package BridgeNova
 */

get_header();
?>

<style>

  /* ============================================================
     RESET (scoped to .bp-page only — no global reset)
     ============================================================ */
    /* ============================================================
     ELEMENTOR EDGE-TO-EDGE OVERRIDE FIX
     ============================================================ */
  .elementor-widget-html,
  .elementor-widget-container,
  .elementor-column,
  .elementor-column-wrap,
  .elementor-widget-html .elementor-widget-container {
    padding: 0 !important;
    margin: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
  }

  .bp-page, .bp-page *, .bp-page *::before, .bp-page *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .bp-page {
    background: #0a1c33;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    color: #ffffff;
    
    /* Viewport breakout breakout adjustments */
    width: 100vw !important;
    max-width: 100vw !important;
    position: relative !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    overflow-x: hidden !important;
  }

  .bp-page section {
    padding: 88px 24px;
  }

  .bp-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  /* ============================================================
     SHARED HEADING STYLES
     ============================================================ */
  .bp-eyebrow {
    display: inline-block;
    color: #caa256;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2.4px;
    text-transform: uppercase;
    margin-bottom: 14px;
  }

  .bp-h2 {
    font-size: 36px;
    line-height: 1.2;
    font-weight: 700;
    letter-spacing: -0.4px;
    margin-bottom: 16px;
  }

  .bp-h2--light { color: #ffffff; }
  .bp-h2--dark  { color: #16304c; }

  .bp-lede {
    font-size: 16px;
    line-height: 1.7;
    max-width: 680px;
  }

  .bp-lede--light { color: #b9cbc9; }
  .bp-lede--dark  { color: #444; }

  .bp-section-head {
    margin-bottom: 48px;
  }

  .bp-section-head.bp-center {
    text-align: center;
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
  }

  .bp-rule {
    width: 64px;
    height: 3px;
    background: #caa256;
    border-radius: 2px;
    margin: 18px 0 22px 0;
  }

  /* ============================================================
     HERO
     ============================================================ */
  .bp-hero {
    position: relative;
    min-height: 560px;
    display: flex;
    align-items: center;
    background: #0a1c33;
    overflow: hidden;
  }

  .bp-hero-globe {
    position: absolute;
    right: -140px;
    top: 50%;
    transform: translateY(-50%);
    width: 560px;
    height: 560px;
    border-radius: 50%;
    background: #132a4d;
    overflow: hidden;
  }

  .bp-hero-globe-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.65;
  }

  .bp-hero-globe::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 35% 30%, rgba(13,35,34,0) 0%, rgba(13,35,34,0.55) 55%, rgba(13,35,34,0.92) 85%);
  }

  .bp-hero-content {
    position: relative;
    z-index: 1;
    max-width: 720px;
  }

  .bp-hero-logo {
    font-family: Georgia, "Times New Roman", serif;
    font-weight: 700;
    font-size: 56px;
    letter-spacing: 10px;
    color: #ffffff;
    margin-bottom: 18px;
  }

  .bp-hero-sub {
    font-style: italic;
    color: #c9d8d6;
    font-size: 17px;
    margin-bottom: 24px;
  }

  .bp-hero-rule {
    width: 90px;
    height: 3px;
    background: #caa256;
    border-radius: 2px;
    margin-bottom: 24px;
  }

  .bp-hero-tag {
    font-style: italic;
    color: #caa256;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
  }

  .bp-hero-kicker {
    color: #7f9997;
    font-size: 13px;
    letter-spacing: 3px;
    text-transform: uppercase;
  }

  /* ============================================================
     LIGHT PANEL SECTIONS (white background, like the pillars detail panel)
     ============================================================ */
  .bp-panel-section {
    background: #ffffff;
  }

  /* ---------- Vision & Mission ---------- */
  .bp-vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }

  .bp-vm-card {
    border-radius: 16px;
    padding: 36px;
  }

  .bp-vm-card--light {
    background: #edf4f6;
  }

  .bp-vm-card--dark {
    background: #16304c;
  }

  .bp-vm-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
  }

  .bp-vm-card--light .bp-vm-icon { background: #16304c; }
  .bp-vm-card--dark  .bp-vm-icon { background: #caa256; }

  .bp-vm-icon svg { width: 26px; height: 26px; }
  .bp-vm-card--light .bp-vm-icon svg { stroke: #caa256; }
  .bp-vm-card--dark  .bp-vm-icon svg { stroke: #16304c; }

  .bp-vm-label {
    color: #caa256;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 14px;
    display: block;
  }

  .bp-vm-card--light .bp-vm-label { color: #b8862f; }

  .bp-vm-body {
    font-size: 15px;
    line-height: 1.75;
  }

  .bp-vm-card--light .bp-vm-body { color: #333; }
  .bp-vm-card--dark  .bp-vm-body { color: #dfe8ea; }

  /* ---------- Core Values ---------- */
  .bp-values-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .bp-value-tile {
    background: #edf4f6;
    border-radius: 14px;
    padding: 28px 18px;
    text-align: center;
    transition: transform 300ms ease, box-shadow 300ms ease;
  }

  .bp-value-tile:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0,0,0,.12);
  }

  .bp-value-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #16304c;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px auto;
  }

  .bp-value-icon svg { width: 24px; height: 24px; stroke: #caa256; fill: none; }

  .bp-value-title {
    color: #16304c;
    font-size: 15px;
    font-weight: 700;
  }

  /* ============================================================
     PILLARS OVERVIEW (dark section, static summary grid)
     ============================================================ */
  .bp-pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  .bp-pillar-card {
    background: #132a4d;
    border: 1px solid transparent;
    border-radius: 14px;
    padding: 28px;
    width: 100%;
    text-align: left;
    cursor: pointer;
    font-family: inherit;
    color: inherit;
    transition: background-color 300ms ease, border-color 300ms ease, box-shadow 300ms ease, transform 300ms ease;
  }

  .bp-pillar-card:hover,
  .bp-pillar-card:focus-visible {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0,0,0,.3);
    border-color: #caa256;
  }

  .bp-pillar-card:focus-visible {
    outline: 2px solid #caa256;
    outline-offset: 3px;
  }

  .bp-jump-hint {
    display: block;
    margin-top: 18px;
    color: #7f9997;
    font-size: 12.5px;
    font-style: italic;
  }

  .bp-pillar-index {
    color: #2f5350;
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 26px;
    display: block;
  }

  .bp-pillar-icon-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .bp-pillar-title {
    color: #ffffff;
    font-size: 17px;
    font-weight: 600;
  }

  .bp-pillar-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #caa256;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .bp-pillar-icon svg { width: 22px; height: 22px; stroke: #16304c; fill: none; }

  /* ============================================================
     MEMBERSHIP STRUCTURE
     ============================================================ */
  .bp-tier-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .bp-tier-card {
    background: #edf4f6;
    border-radius: 14px;
    padding: 30px 20px;
    text-align: center;
  }

  .bp-tier-card--highlight {
    background: #16304c;
  }

  .bp-tier-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #16304c;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px auto;
  }

  .bp-tier-card--highlight .bp-tier-icon { background: #caa256; }

  .bp-tier-icon svg { width: 24px; height: 24px; stroke: #caa256; fill: none; }
  .bp-tier-card--highlight .bp-tier-icon svg { stroke: #16304c; }

  .bp-tier-name {
    color: #16304c;
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 8px;
  }

  .bp-tier-card--highlight .bp-tier-name { color: #ffffff; }

  .bp-tier-meta {
    color: #666;
    font-size: 13px;
    font-style: italic;
  }

  .bp-tier-card--highlight .bp-tier-meta { color: #caa256; }

  /* ============================================================
     ORG STRUCTURE (dark section)
     ============================================================ */
  .bp-chain {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 48px;
  }

  .bp-chain-item {
    background: #16304c;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    padding: 20px 16px;
    border-radius: 10px;
    flex: 1 1 120px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .bp-chain-item--first {
    background: #caa256;
    color: #16304c;
  }

  .bp-sub-eyebrow {
    color: #caa256;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 18px;
  }

  .bp-dept-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
  }

  .bp-dept-tile {
    background: #132a4d;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .bp-dept-tile svg { width: 20px; height: 20px; stroke: #caa256; fill: none; flex-shrink: 0; }
  .bp-dept-tile span { color: #ffffff; font-size: 14.5px; font-weight: 600; }

  /* ============================================================
     LEADERSHIP PATHWAY (light section — horizontal chain)
     ============================================================ */
  .bp-pathway {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
  }

  .bp-pathway-step {
    background: #edf4f6;
    color: #16304c;
    font-size: 13.5px;
    font-weight: 700;
    padding: 14px 18px;
    border-radius: 999px;
  }

  .bp-pathway-step--end {
    background: #16304c;
    color: #ffffff;
  }

  .bp-pathway-arrow {
    color: #caa256;
    font-size: 16px;
    font-weight: 700;
  }

  /* ============================================================
     SIGNATURE PROGRAMS (dark section, alternating tiles)
     ============================================================ */
  .bp-program-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
  }

  .bp-program-tile {
    border-radius: 14px;
    padding: 26px 16px;
    text-align: center;
    transition: transform 300ms ease;
  }

  .bp-program-tile:hover { transform: translateY(-4px); }

  .bp-program-tile--a { background: #16304c; }
  .bp-program-tile--b { background: #132a4d; }

  .bp-program-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #caa256;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 14px auto;
  }

  .bp-program-icon svg { width: 22px; height: 22px; stroke: #16304c; fill: none; }

  .bp-program-title {
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
  }

  /* ============================================================
     FLAGSHIP EVENTS (light section, strip list)
     ============================================================ */
  .bp-strip-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }

  .bp-strip {
    background: #edf4f6;
    border-radius: 10px;
    padding: 18px 22px;
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .bp-strip-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #16304c;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .bp-strip-icon svg { width: 18px; height: 18px; stroke: #caa256; fill: none; }

  .bp-strip span:last-child {
    color: #222;
    font-size: 15px;
    font-weight: 600;
  }

  /* ============================================================
     REVENUE MODEL (dark section, pill tags)
     ============================================================ */
  .bp-pill-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
  }

  .bp-pill {
    background: #132a4d;
    border: 1px solid #2a4f4c;
    color: #dfece9;
    font-size: 14px;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 999px;
  }

  /* ============================================================
     RECOGNITION FRAMEWORK (light section, list + feature)
     ============================================================ */
  .bp-recog-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 48px;
    align-items: stretch;
  }

  .bp-recog-list {
    list-style: none;
    display: flex;
    flex-direction: column;
  }

  .bp-recog-list li {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid #e4e9ea;
    color: #222;
    font-size: 15px;
    font-weight: 600;
  }

  .bp-recog-list li:last-child { border-bottom: none; }

  .bp-recog-list li svg {
    width: 22px;
    height: 22px;
    stroke: #caa256;
    fill: none;
    flex-shrink: 0;
  }

  .bp-recog-feature {
    background: #16304c;
    border-radius: 16px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 22px;
  }

  .bp-recog-feature-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #caa256;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .bp-recog-feature-icon svg { width: 28px; height: 28px; stroke: #16304c; fill: none; }

  .bp-recog-feature p {
    color: #ffffff;
    font-style: italic;
    font-size: 17px;
    line-height: 1.6;
    font-weight: 600;
  }

  /* ============================================================
     ROADMAP (dark section, 5-step timeline)
     ============================================================ */
  .bp-roadmap {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
    position: relative;
  }

  .bp-road-step {
    background: #132a4d;
    border-radius: 14px;
    padding: 24px 20px;
    position: relative;
  }

  .bp-road-year {
    color: #caa256;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 12px;
    display: block;
  }

  .bp-road-body {
    color: #cfdedc;
    font-size: 13.5px;
    line-height: 1.6;
  }

  /* ============================================================
     CLOSING CTA (dark, with hero-style globe)
     ============================================================ */
  .bp-closing {
    position: relative;
    overflow: hidden;
  }

  .bp-closing-globe {
    position: absolute;
    right: -160px;
    top: 50%;
    transform: translateY(-50%);
    width: 520px;
    height: 520px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #1c3f3d 0%, #132a4d 70%);
    opacity: 0.6;
  }

  .bp-closing-content {
    position: relative;
    z-index: 1;
    max-width: 720px;
  }

  .bp-closing-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 32px;
  }

  .bp-closing-pill {
    border: 1px solid #caa256;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 22px;
    border-radius: 999px;
  }

  /* ============================================================
     RESPONSIVE
     ============================================================ */
  @media (max-width: 980px) {
    .bp-values-grid { grid-template-columns: repeat(3, 1fr); }
    .bp-pillars-grid { grid-template-columns: repeat(2, 1fr); }
    .bp-tier-grid { grid-template-columns: repeat(3, 1fr); }
    .bp-dept-grid { grid-template-columns: repeat(2, 1fr); }
    .bp-program-grid { grid-template-columns: repeat(3, 1fr); }
    .bp-strip-grid { grid-template-columns: 1fr; }
    .bp-recog-grid { grid-template-columns: 1fr; }
    .bp-roadmap { grid-template-columns: repeat(3, 1fr); }
    .bp-vm-grid { grid-template-columns: 1fr; }
    .bp-hero-logo { font-size: 44px; letter-spacing: 7px; }
  }

  @media (max-width: 620px) {
    .bp-page section { padding: 56px 18px; }
    .bp-h2 { font-size: 27px; }
    .bp-values-grid { grid-template-columns: repeat(2, 1fr); }
    .bp-pillars-grid { grid-template-columns: 1fr; }
    .bp-tier-grid { grid-template-columns: repeat(2, 1fr); }
    .bp-dept-grid { grid-template-columns: 1fr; }
    .bp-program-grid { grid-template-columns: repeat(2, 1fr); }
    .bp-roadmap { grid-template-columns: 1fr; }
    .bp-hero { min-height: 460px; }
    .bp-hero-logo { font-size: 34px; letter-spacing: 5px; }
    .bp-hero-globe, .bp-closing-globe { opacity: 0.35; }
    .bp-chain { flex-direction: column; }
    .bp-chain-item { flex: 1 1 auto; }
  }

</style>

</style>

<main class="bp-page">

  <!-- ============ HERO ============ -->
  <section class="bp-hero" aria-label="BRIDGE introduction">
    <div class="bp-hero-globe" aria-hidden="true">
      <img decoding="async" class="bp-hero-globe-img" src="https://images.unsplash.com/photo-1600633349333-eebb43d01e23?auto=format&fit=crop&w=1200&q=80" alt="" loading="lazy">
    </div>
    <div class="bp-inner">
      <div class="bp-hero-content">
        <div class="bp-hero-logo">B R I D G E</div>
        <p class="bp-hero-sub">Building Relationships for International Dialogue and Global Engagement</p>
        <div class="bp-hero-rule"></div>
        <p class="bp-hero-tag">Connecting People. Inspiring Leaders. Transforming Communities.</p>
        <span class="bp-hero-kicker">Strategic Framework Overview</span>
      </div>
    </div>
  </section>

  <!-- ============ VISION & MISSION ============ -->
  <section aria-label="Vision and Mission">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Foundation</span>
        <h2 class="bp-h2 bp-h2--light">Vision &amp; Mission</h2>
      </div>
      <div class="bp-vm-grid">
        <div class="bp-vm-card bp-vm-card--light">
          <span class="bp-vm-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
          </span>
          <span class="bp-vm-label">Vision</span>
          <p class="bp-vm-body">To become the world's leading platform connecting people across cultures to develop leaders, strengthen international cooperation, and create sustainable social impact.</p>
        </div>
        <div class="bp-vm-card bp-vm-card--dark">
          <span class="bp-vm-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </span>
          <span class="bp-vm-label">Mission</span>
          <p class="bp-vm-body">BRIDGE empowers young leaders, professionals, institutions, and communities through international exchange, leadership development, innovation, entrepreneurship, policy dialogue, and collaborative action.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CORE VALUES ============ -->
  <section class="bp-panel-section" aria-label="Core Values">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Foundation</span>
        <h2 class="bp-h2 bp-h2--dark">Core Values</h2>
      </div>
      <div class="bp-values-grid">

        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 7l-3 6a3 3 0 006 0zM19 7l-3 6a3 3 0 006 0zM3 21h18M5 7l7-4 7 4"></path></svg></span>
          <span class="bp-value-title">Integrity</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17a4 4 0 01-8 0V9a4 4 0 018 0M13 7a4 4 0 018 0v8a4 4 0 01-8 0"></path></svg></span>
          <span class="bp-value-title">Respect</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"></path></svg></span>
          <span class="bp-value-title">Diversity</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"></path></svg></span>
          <span class="bp-value-title">Inclusion</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg></span>
          <span class="bp-value-title">Leadership</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M15 2a7 7 0 00-4 12.7V17h4v-2.3A7 7 0 0015 2z"></path></svg></span>
          <span class="bp-value-title">Innovation</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          <span class="bp-value-title">Service</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg></span>
          <span class="bp-value-title">Sustainability</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg></span>
          <span class="bp-value-title">Collaboration</span>
        </div>
        <div class="bp-value-tile">
          <span class="bp-value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span>
          <span class="bp-value-title">Accountability</span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ SIX STRATEGIC PILLARS (overview — links down to the pillars component) ============ -->
  <section aria-label="Six Strategic Pillars overview">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Strategy</span>
        <h2 class="bp-h2 bp-h2--light">Six Strategic Pillars</h2>
        <p class="bp-lede bp-lede--light">The core programs that shape how we develop leaders, build bridges, and strengthen communities around the world. Tap a pillar to jump to it below.</p>
      </div>
      <div class="bp-pillars-grid">

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-1')">
          <span class="bp-pillar-index">01</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">Leadership Development</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          </div>
        </button>

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-2')">
          <span class="bp-pillar-index">02</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">International Exchange</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          </div>
        </button>

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-3')">
          <span class="bp-pillar-index">03</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">Global Dialogue</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"></rect><path d="M3 10h18M8 4v3M16 4v3"></path></svg></span>
          </div>
        </button>

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-4')">
          <span class="bp-pillar-index">04</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">Entrepreneurship</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"></path><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"></path></svg></span>
          </div>
        </button>

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-5')">
          <span class="bp-pillar-index">05</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">Global Careers</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          </div>
        </button>

        <button type="button" class="bp-pillar-card" onclick="bpJumpToPillars('sp-card-6')">
          <span class="bp-pillar-index">06</span>
          <div class="bp-pillar-icon-row">
            <span class="bp-pillar-title">Community Development</span>
            <span class="bp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          </div>
        </button>

      </div>
      <span class="bp-jump-hint">↓ Jumps to the "Six Strategic Pillars" component further down this page and opens that pillar's detail panel.</span>
    </div>
  </section>

  <!-- ============================================================
       PASTE THE "SIX STRATEGIC PILLARS" COMPONENT HERE.
       This page intentionally does not duplicate that markup —
       it already exists as its own component (six-strategic-
       pillars-component.html). Paste its <section class="sp-wrapper">
       ... </section> block directly below this comment, keeping
       its ids (sp-card-1 ... sp-card-6, sp-pane-1 ... sp-pane-6)
       unchanged so the jump links above continue to work.
     ============================================================ -->

  <!-- ============ MEMBERSHIP STRUCTURE ============ -->
  <section class="bp-panel-section" aria-label="Membership Structure">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow" style="color:#b8862f;">Community</span>
        <h2 class="bp-h2 bp-h2--dark">Membership Structure</h2>
      </div>
      <div class="bp-tier-grid">

        <div class="bp-tier-card">
          <span class="bp-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></span>
          <div class="bp-tier-name">Explorer</div>
          <div class="bp-tier-meta">Age: 15 &ndash; 18</div>
        </div>

        <div class="bp-tier-card">
          <span class="bp-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          <div class="bp-tier-name">Member</div>
          <div class="bp-tier-meta">Age: 18 &ndash; 30</div>
        </div>

        <div class="bp-tier-card">
          <span class="bp-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          <div class="bp-tier-name">Professional Member</div>
          <div class="bp-tier-meta">Age: 25 &ndash; 40</div>
        </div>

        <div class="bp-tier-card">
          <span class="bp-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"></rect><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"></path></svg></span>
          <div class="bp-tier-name">Institutional Member</div>
          <div class="bp-tier-meta">Organizations</div>
        </div>

        <div class="bp-tier-card bp-tier-card--highlight">
          <span class="bp-tier-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg></span>
          <div class="bp-tier-name">Ambassador</div>
          <div class="bp-tier-meta">By invitation</div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ ORGANIZATIONAL STRUCTURE ============ -->
  <section aria-label="Organizational Structure">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Governance</span>
        <h2 class="bp-h2 bp-h2--light">Organizational Structure</h2>
      </div>

      <div class="bp-chain">
        <div class="bp-chain-item bp-chain-item--first">Global HQ</div>
        <div class="bp-chain-item">Int'l Board</div>
        <div class="bp-chain-item">Regional Offices</div>
        <div class="bp-chain-item">Country Offices</div>
        <div class="bp-chain-item">City Chapters</div>
        <div class="bp-chain-item">University Chapters</div>
        <div class="bp-chain-item">Community Chapters</div>
      </div>

      <span class="bp-sub-eyebrow">Departments</span>
      <div class="bp-dept-grid">
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.7 1.7 0 00.34 1.87l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.7 1.7 0 00-1.87-.34 1.7 1.7 0 00-1 1.55V21a2 2 0 01-4 0v-.09a1.7 1.7 0 00-1-1.55 1.7 1.7 0 00-1.87.34l-.06.06a2 2 0 11-2.83-2.83l.06-.06a1.7 1.7 0 00.34-1.87 1.7 1.7 0 00-1.55-1H3a2 2 0 010-4h.09a1.7 1.7 0 001.55-1 1.7 1.7 0 00-.34-1.87l-.06-.06a2 2 0 112.83-2.83l.06.06a1.7 1.7 0 001.87.34H9a1.7 1.7 0 001-1.55V3a2 2 0 014 0v.09a1.7 1.7 0 001 1.55 1.7 1.7 0 001.87-.34l.06-.06a2 2 0 112.83 2.83l-.06.06a1.7 1.7 0 00-.34 1.87V9a1.7 1.7 0 001.55 1H21a2 2 0 010 4h-.09a1.7 1.7 0 00-1.55 1z"></path></svg><span>Operations</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg><span>Partnerships</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 11-5.8-1.6"></path></svg><span>Marketing</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"></rect><path d="M1 10h22"></path></svg><span>Finance</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M9 9h6v6H9z"></path></svg><span>Technology</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg><span>Learning</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg><span>Events</span></div>
        <div class="bp-dept-tile"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M15 2a7 7 0 00-4 12.7V17h4v-2.3A7 7 0 0015 2z"></path></svg><span>Innovation</span></div>
      </div>
    </div>
  </section>

  <!-- ============ LEADERSHIP CAREER PATHWAY ============ -->
  <section class="bp-panel-section" aria-label="Leadership Career Pathway">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow" style="color:#b8862f;">Governance</span>
        <h2 class="bp-h2 bp-h2--dark">Leadership Career Pathway</h2>
      </div>
      <div class="bp-pathway">
        <span class="bp-pathway-step">Member</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Team Leader</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Department Manager</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Vice President</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Local President</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Country Director</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Regional Director</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step">Global Vice President</span>
        <span class="bp-pathway-arrow">&rsaquo;</span>
        <span class="bp-pathway-step bp-pathway-step--end">Global President</span>
      </div>
    </div>
  </section>

  <!-- ============ SIGNATURE PROGRAMS ============ -->
  <section aria-label="Signature Programs">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Programs</span>
        <h2 class="bp-h2 bp-h2--light">Signature Programs</h2>
      </div>
      <div class="bp-program-grid">

        <div class="bp-program-tile bp-program-tile--a">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Global Volunteer</span>
        </div>
        <div class="bp-program-tile bp-program-tile--b">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Global Internship</span>
        </div>
        <div class="bp-program-tile bp-program-tile--a">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Future Leaders</span>
        </div>
        <div class="bp-program-tile bp-program-tile--b">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Women Leaders</span>
        </div>
        <div class="bp-program-tile bp-program-tile--a">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Young Diplomats</span>
        </div>

        <div class="bp-program-tile bp-program-tile--b">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Startup Accelerator</span>
        </div>
        <div class="bp-program-tile bp-program-tile--a">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Peace Fellowship</span>
        </div>
        <div class="bp-program-tile bp-program-tile--b">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Climate Leaders</span>
        </div>
        <div class="bp-program-tile bp-program-tile--a">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Innovation Challenge</span>
        </div>
        <div class="bp-program-tile bp-program-tile--b">
          <span class="bp-program-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 100-8 4 4 0 000 8z"></path><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></span>
          <span class="bp-program-title">Global Scholars</span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ ANNUAL FLAGSHIP EVENTS ============ -->
  <section class="bp-panel-section" aria-label="Annual Flagship Events">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow" style="color:#b8862f;">Programs</span>
        <h2 class="bp-h2 bp-h2--dark">Annual Flagship Events</h2>
      </div>
      <div class="bp-strip-grid">
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Global Leadership Summit</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>International Cultural Festival</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Global Startup Expo</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Youth Parliament</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Model United Nations</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Innovation Week</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Volunteer Awards</span></div>
        <div class="bp-strip"><span class="bp-strip-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><path d="M4 22V15"></path></svg></span><span>Global Dialogue Forum</span></div>
      </div>
    </div>
  </section>

  <!-- ============ REVENUE MODEL ============ -->
  <section aria-label="Revenue Model">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Sustainability</span>
        <h2 class="bp-h2 bp-h2--light">Revenue Model</h2>
      </div>
      <div class="bp-pill-wrap">
        <span class="bp-pill">Membership Fees</span>
        <span class="bp-pill">Training Programs</span>
        <span class="bp-pill">Conference Registration</span>
        <span class="bp-pill">Corporate Sponsorships</span>
        <span class="bp-pill">University Partnerships</span>
        <span class="bp-pill">Government Grants</span>
        <span class="bp-pill">CSR Funding</span>
        <span class="bp-pill">International Organizations</span>
        <span class="bp-pill">Consulting Services</span>
        <span class="bp-pill">Recruitment Services</span>
        <span class="bp-pill">Research Projects</span>
        <span class="bp-pill">Merchandise</span>
        <span class="bp-pill">Certification Programs</span>
        <span class="bp-pill">Digital Learning Platform</span>
      </div>
    </div>
  </section>

  <!-- ============ GLOBAL RECOGNITION FRAMEWORK ============ -->
  <section class="bp-panel-section" aria-label="Global Recognition Framework">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow" style="color:#b8862f;">Recognition</span>
        <h2 class="bp-h2 bp-h2--dark">Global Recognition Framework</h2>
      </div>
      <div class="bp-recog-grid">
        <ul class="bp-recog-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Leadership Certifications</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Volunteer Hours</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>International Experience Badges</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Community Impact Awards</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Country Ambassador Recognition</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Innovation Awards</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Research Fellowships</li>
        </ul>
        <div class="bp-recog-feature">
          <span class="bp-recog-feature-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg></span>
          <p>Recognizing impact at every level &mdash; from local volunteer hours to global ambassadorship.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FIVE-YEAR GROWTH ROADMAP ============ -->
  <section aria-label="Five-Year Growth Roadmap">
    <div class="bp-inner">
      <div class="bp-section-head">
        <span class="bp-eyebrow">Outlook</span>
        <h2 class="bp-h2 bp-h2--light">Five-Year Growth Roadmap</h2>
      </div>
      <div class="bp-roadmap">

        <div class="bp-road-step">
          <span class="bp-road-year">Year 1</span>
          <p class="bp-road-body">Register BRIDGE, launch in Pakistan, target provincial capitals and top university chapters in Pakistan.</p>
        </div>

        <div class="bp-road-step">
          <span class="bp-road-year">Year 2</span>
          <p class="bp-road-body">Launch the first Global Leadership Summit in Pakistan or a suitable country. Target international university collaborations for exchange programs.</p>
        </div>

        <div class="bp-road-step">
          <span class="bp-road-year">Year 3</span>
          <p class="bp-road-body">Target bi-annual leadership summits in two different countries. Launch student exchange and volunteer programs, with collaborations with international organizations.</p>
        </div>

        <div class="bp-road-step">
          <span class="bp-road-year">Year 4</span>
          <p class="bp-road-body">Target quarterly international youth summits, each in a different country. Pursue industry collaborations for internship and placement programs.</p>
        </div>

        <div class="bp-road-step">
          <span class="bp-road-year">Year 5</span>
          <p class="bp-road-body">Target every remaining domain defined in the framework and expand from country level to regional and global level.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ CLOSING: ONE PLATFORM. ONE BRIDGE. ============ -->
  <section class="bp-closing" aria-label="One Platform. One Bridge.">
    <div class="bp-closing-globe" aria-hidden="true"></div>
    <div class="bp-inner">
      <div class="bp-closing-content">
        <span class="bp-eyebrow">Unique Positioning</span>
        <h2 class="bp-h2 bp-h2--light">One Platform. One Bridge.</h2>
        <div class="bp-rule"></div>
        <p class="bp-lede bp-lede--light">BRIDGE is a global platform for international dialogue, leadership, innovation, entrepreneurship, research, and community development &mdash; connecting students, professionals, universities, governments, NGOs, and businesses.</p>
        <div class="bp-closing-pills">
          <span class="bp-closing-pill">Students</span>
          <span class="bp-closing-pill">Professionals</span>
          <span class="bp-closing-pill">Universities</span>
          <span class="bp-closing-pill">Governments</span>
          <span class="bp-closing-pill">NGOs</span>
          <span class="bp-closing-pill">Businesses</span>
        </div>
      </div>
    </div>
  </section>
  <!-- WordPress Page Editor Content (Client Editable) -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( ! empty( trim( get_the_content() ) ) ) : ?>
      <section class="hp-panel-section hp-custom-page-content" style="background:#0a1c33; padding: 60px 24px; color: #ffffff;">
        <div class="hp-inner" style="max-width:1200px; margin:0 auto;">
          <?php the_content(); ?>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; endif; ?>

</main>

<script>
  /* ============================================================
     JUMP TO PILLAR
     Scrolls down to the Six Strategic Pillars component (pasted
     in above) and, if present, clicks the matching card so its
     detail pane opens automatically.
     ============================================================ */
  function bpJumpToPillars(cardId) {
    var card = document.getElementById(cardId);
    var target = card || document.querySelector('.sp-wrapper');

    if (!target) {
      console.warn('Six Strategic Pillars component not found on this page yet.');
      return;
    }

    target.scrollIntoView({ behavior: 'smooth', block: 'center' });

    if (card) {
      // Give the smooth scroll a moment, then activate that pillar's pane
      window.setTimeout(function () {
        card.click();
        card.focus({ preventScroll: true });
      }, 400);
    }
  }
</script>



<?php
get_footer();

<?php
/**
 * Template Name: Gallery Page
 *
 * Exact replication of bridgenova.info with dark navy theme and high-res assets
 *
 * @package BridgeNova
 */

get_header();
?>

<style>
  .gal-wrap, .gal-wrap *, .gal-wrap *::before, .gal-wrap *::after { box-sizing: border-box; }
  .gal-wrap {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #0a1c33;
    color: #ffffff;
  }

  /* HERO */
  .gal-hero {
    position: relative;
    background:
      linear-gradient(180deg, rgba(10,28,51,.65) 0%, rgba(10,28,51,.95) 100%),
      linear-gradient(135deg, rgba(10,28,51,.85) 0%, rgba(22,48,76,.85) 100%),
      url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1600&auto=format&fit=crop') center center / cover no-repeat;
    padding: 160px 24px 100px 24px;
    text-align: center;
  }
  .gal-hero-inner { max-width: 760px; margin: 0 auto; }
  .gal-eyebrow {
    display: inline-block; color: #caa256; font-size: 13px; font-weight: 700;
    letter-spacing: 2.4px; text-transform: uppercase; margin-bottom: 18px;
  }
  .gal-hero-title { font-size: 48px; line-height: 1.15; font-weight: 700; color: #fff; margin: 0 0 18px 0; }
  .gal-hero-sub { color: #dfece9; font-size: 16.5px; line-height: 1.75; max-width: 580px; margin: 0 auto; }

  /* BODY */
  .gal-body { background: #0a1c33; padding: 60px 24px 100px 24px; }
  .gal-inner { max-width: 1220px; margin: 0 auto; }

  /* FILTER PILLS */
  .gal-filters { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 24px; }
  .gal-filter-btn {
    background: #132a4d; color: #dfece9; border: 1px solid rgba(202,162,86,0.25); border-radius: 999px;
    padding: 11px 24px; font-size: 13.5px; font-weight: 700; cursor: pointer;
    font-family: inherit; transition: background 200ms ease, color 200ms ease, border-color 200ms ease;
  }
  .gal-filter-btn:hover { border-color: #caa256; color: #ffffff; }
  .gal-filter-btn.is-active { background: #caa256; color: #0a1c33; border-color: #caa256; font-weight: 800; }
  .gal-filter-desc {
    text-align: center; color: #9fb3c9; font-size: 14px; line-height: 1.7;
    max-width: 640px; margin: 0 auto 40px auto; min-height: 22px;
  }

  /* MASONRY GRID */
  .gal-grid {
    column-count: 4; column-gap: 20px;
  }
  .gal-item {
    break-inside: avoid; margin-bottom: 20px; position: relative;
    border-radius: 14px; overflow: hidden; cursor: pointer;
    background: #132a4d; display: block; border: 1px solid rgba(255,255,255,0.08);
    transition: transform 300ms ease, box-shadow 300ms ease;
  }
  .gal-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(0,0,0,.4);
  }
  .gal-item img { width: 100%; display: block; transition: transform 400ms ease; }
  .gal-item:hover img { transform: scale(1.06); }
  .gal-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(180deg, rgba(10,28,51,0) 35%, rgba(10,28,51,.92) 100%);
    opacity: 0; transition: opacity 300ms ease;
    display: flex; flex-direction: column; justify-content: flex-end; padding: 18px;
  }
  .gal-item:hover .gal-overlay { opacity: 1; }
  .gal-overlay-tag {
    align-self: flex-start;
    display: inline-block; background: #caa256; color: #0a1c33; font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: .5px; padding: 3px 10px; border-radius: 999px; margin-bottom: 8px;
  }
  .gal-overlay-text { color: #fff; font-size: 13.5px; font-weight: 600; line-height: 1.5; }
  .gal-empty { text-align: center; color: #7f9997; font-style: italic; padding: 60px 0; }

  /* LIGHTBOX */
  .gal-lightbox {
    display: none; position: fixed; inset: 0; z-index: 99999;
    background: rgba(10,28,51,.96); align-items: center; justify-content: center;
    padding: 40px 24px; flex-direction: column;
    backdrop-filter: blur(8px);
  }
  .gal-lightbox.is-open { display: flex; }
  .gal-lightbox img { max-width: 90vw; max-height: 75vh; border-radius: 12px; box-shadow: 0 20px 60px rgba(0,0,0,.7); border: 1px solid rgba(255,255,255,0.15); }
  .gal-lightbox-caption { color: #dfece9; font-size: 15px; margin-top: 20px; text-align: center; max-width: 640px; line-height: 1.6; }
  .gal-lightbox-close {
    position: absolute; top: 28px; right: 32px; background: rgba(19,42,77,0.8); border: 1.5px solid #caa256;
    color: #caa256; width: 44px; height: 44px; border-radius: 50%; font-size: 22px; cursor: pointer;
    display: flex; align-items: center; justify-content: center; transition: all 200ms ease;
  }
  .gal-lightbox-close:hover { background: #caa256; color: #0a1c33; transform: scale(1.08); }

  @media (max-width: 1024px) { .gal-grid { column-count: 3; } }
  @media (max-width: 768px) { .gal-grid { column-count: 2; } .gal-hero-title { font-size: 34px; } .gal-hero { padding: 130px 20px 70px 20px; } }
  @media (max-width: 480px) { .gal-grid { column-count: 1; } }
</style>

<div class="gal-wrap">

  <section class="gal-hero">
    <div class="gal-hero-inner">
      <span class="gal-eyebrow">What We Do</span>
      <h1 class="gal-hero-title">Gallery</h1>
      <p class="gal-hero-sub">Moments from BRIDGE events, programs, and community initiatives — captured across our global network.</p>
    </div>
  </section>

  <section class="gal-body">
    <div class="gal-inner">

      <div class="gal-filters" id="gal-filters">
        <button type="button" class="gal-filter-btn is-active" data-event="all">All Photos</button>
        <button type="button" class="gal-filter-btn" data-event="summits">Summits &amp; Conferences</button>
        <button type="button" class="gal-filter-btn" data-event="workshops">Workshops &amp; Training</button>
        <button type="button" class="gal-filter-btn" data-event="dialogue">Global Dialogue</button>
        <button type="button" class="gal-filter-btn" data-event="community">Community Impact</button>
      </div>
      <div class="gal-filter-desc" id="gal-filter-desc"></div>

      <div class="gal-grid" id="gal-grid">

        <div class="gal-item" data-events="summits"
             data-full="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1600&auto=format&fit=crop"
             data-caption="Global Youth Leadership Summit 2026 — Keynote session in Islamabad">
          <img decoding="async" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&auto=format&fit=crop" alt="Global Youth Leadership Summit" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Summit</span>
            <div class="gal-overlay-text">Global Youth Leadership Summit 2026</div>
          </div>
        </div>

        <div class="gal-item" data-events="workshops"
             data-full="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=1600&auto=format&fit=crop"
             data-caption="Interactive Leadership Workshop — Young leaders developing policy solutions">
          <img decoding="async" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&auto=format&fit=crop" alt="Leadership Workshop" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Workshop</span>
            <div class="gal-overlay-text">Interactive Leadership Workshop</div>
          </div>
        </div>

        <div class="gal-item" data-events="summits,dialogue"
             data-full="https://images.unsplash.com/photo-1511578314322-379afb476865?w=1600&auto=format&fit=crop"
             data-caption="International Peace &amp; Dialogue Forum — Main Stage Keynote">
          <img decoding="async" src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&auto=format&fit=crop" alt="International Peace Forum" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Dialogue</span>
            <div class="gal-overlay-text">International Peace &amp; Dialogue Forum</div>
          </div>
        </div>

        <div class="gal-item" data-events="workshops,community"
             data-full="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=1600&auto=format&fit=crop"
             data-caption="Cross-Border Cultural Exchange Group Discussion">
          <img decoding="async" src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=600&auto=format&fit=crop" alt="Cross-Border Exchange" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Exchange</span>
            <div class="gal-overlay-text">Cross-Border Cultural Exchange</div>
          </div>
        </div>

        <div class="gal-item" data-events="dialogue"
             data-full="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=1600&auto=format&fit=crop"
             data-caption="Panel Discussion: Empowering Tomorrow's Leaders in a Changing World">
          <img decoding="async" src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&auto=format&fit=crop" alt="Panel Discussion" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Dialogue</span>
            <div class="gal-overlay-text">Empowering Tomorrow's Leaders Panel</div>
          </div>
        </div>

        <div class="gal-item" data-events="workshops"
             data-full="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?w=1600&auto=format&fit=crop"
             data-caption="Social Innovation &amp; Entrepreneurship Incubator Sprint">
          <img decoding="async" src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?w=600&auto=format&fit=crop" alt="Social Innovation Sprint" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Innovation</span>
            <div class="gal-overlay-text">Social Innovation Incubator Sprint</div>
          </div>
        </div>

        <div class="gal-item" data-events="community"
             data-full="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1600&auto=format&fit=crop"
             data-caption="Youth Advisory Council Strategy Session">
          <img decoding="async" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&auto=format&fit=crop" alt="Youth Advisory Council" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Community</span>
            <div class="gal-overlay-text">Youth Advisory Council Strategy</div>
          </div>
        </div>

        <div class="gal-item" data-events="summits"
             data-full="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=1600&auto=format&fit=crop"
             data-caption="Global Networking Gala Dinner &amp; Partnership Recognition">
          <img decoding="async" src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=600&auto=format&fit=crop" alt="Global Networking Gala" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Summit</span>
            <div class="gal-overlay-text">Global Networking Gala Dinner</div>
          </div>
        </div>

        <div class="gal-item" data-events="dialogue"
             data-full="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=1600&auto=format&fit=crop"
             data-caption="Annual Youth Parliamentary Debate on Sustainable Development">
          <img decoding="async" src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&auto=format&fit=crop" alt="Youth Parliamentary Debate" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Dialogue</span>
            <div class="gal-overlay-text">Youth Parliamentary Debate</div>
          </div>
        </div>

        <div class="gal-item" data-events="community,workshops"
             data-full="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1600&auto=format&fit=crop"
             data-caption="Campus Ambassadors Network Meeting">
          <img decoding="async" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&auto=format&fit=crop" alt="Campus Ambassadors" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Community</span>
            <div class="gal-overlay-text">Campus Ambassadors Network Meeting</div>
          </div>
        </div>

        <div class="gal-item" data-events="summits"
             data-full="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1600&auto=format&fit=crop"
             data-caption="Institutional Partnership Signing Ceremony">
          <img decoding="async" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=600&auto=format&fit=crop" alt="Partnership Signing" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Partnership</span>
            <div class="gal-overlay-text">Institutional Partnership Signing</div>
          </div>
        </div>

        <div class="gal-item" data-events="community"
             data-full="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1600&auto=format&fit=crop"
             data-caption="Community Volunteer Cohort Celebration">
          <img decoding="async" src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600&auto=format&fit=crop" alt="Volunteer Celebration" loading="lazy">
          <div class="gal-overlay">
            <span class="gal-overlay-tag">Community</span>
            <div class="gal-overlay-text">Community Volunteer Cohort</div>
          </div>
        </div>

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

</div>

<div class="gal-lightbox" id="gal-lightbox">
  <button type="button" class="gal-lightbox-close" id="gal-lightbox-close" aria-label="Close lightbox">&times;</button>
  <img decoding="async" src="" alt="Enlarged photo" id="gal-lightbox-img">
  <div class="gal-lightbox-caption" id="gal-lightbox-caption"></div>
</div>

<script>
  (function () {
    var termDescriptions = {
      summits: 'Major gatherings and flagship summits bringing together international delegations and keynote leaders.',
      workshops: 'Practical training modules, skill-building sprints, and hands-on masterclasses.',
      dialogue: 'High-level roundtables, diplomatic forums, and intercultural exchange debates.',
      community: 'Grassroots projects, volunteer action, and youth-led initiatives making local impact.'
    };

    var filters = document.getElementById('gal-filters');
    var descEl = document.getElementById('gal-filter-desc');
    var grid = document.getElementById('gal-grid');

    if (filters) {
      filters.addEventListener('click', function (e) {
        var btn = e.target.closest('.gal-filter-btn');
        if (!btn) return;
        filters.querySelectorAll('.gal-filter-btn').forEach(function (b) { b.classList.remove('is-active'); });
        btn.classList.add('is-active');
        var wanted = btn.getAttribute('data-event');
        if (grid) {
          grid.querySelectorAll('.gal-item').forEach(function (item) {
            var events = (item.getAttribute('data-events') || '').split(',');
            item.style.display = (wanted === 'all' || events.indexOf(wanted) !== -1) ? '' : 'none';
          });
        }
        if (descEl) {
          descEl.textContent = wanted === 'all' ? '' : (termDescriptions[wanted] || '');
        }
      });
    }

    var lightbox = document.getElementById('gal-lightbox');
    var lightboxImg = document.getElementById('gal-lightbox-img');
    var lightboxCaption = document.getElementById('gal-lightbox-caption');
    var closeBtn = document.getElementById('gal-lightbox-close');

    if (grid && lightbox && lightboxImg) {
      grid.querySelectorAll('.gal-item').forEach(function (item) {
        item.addEventListener('click', function () {
          lightboxImg.src = item.getAttribute('data-full');
          if (lightboxCaption) {
            lightboxCaption.textContent = item.getAttribute('data-caption') || '';
          }
          lightbox.classList.add('is-open');
          document.body.style.overflow = 'hidden';
        });
      });
    }

    function closeLightbox() {
      if (lightbox) {
        lightbox.classList.remove('is-open');
        if (lightboxImg) lightboxImg.src = '';
        document.body.style.overflow = '';
      }
    }
    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if (lightbox) lightbox.addEventListener('click', function (e) { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLightbox(); });
  })();
</script>

<?php
get_footer();

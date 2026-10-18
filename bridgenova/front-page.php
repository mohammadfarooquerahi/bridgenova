<?php
/**
 * The front page template file for BridgeNova
 *
 * Fully editable via Appearance > Customize (BridgeNova Theme Options)
 * and WordPress Page Editor (Edit Page)
 *
 * @package BridgeNova
 */

get_header();

// Fetch Theme Customizer Editable Options
$hero_eyebrow   = get_theme_mod( 'hero_eyebrow', 'Global Connections' );
$hero_title     = get_theme_mod( 'hero_title', 'Building Bridges Across Borders' );
$hero_desc      = get_theme_mod( 'hero_description', 'BRIDGE is an international platform empowering young leaders through global exchange, leadership development, innovation, and community impact.' );
$hero_bg        = get_theme_mod( 'hero_bg_image', 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1800&auto=format&fit=crop' );

$btn1_txt       = get_theme_mod( 'hero_btn1_text', 'Join BRIDGE' );
$btn1_url       = get_theme_mod( 'hero_btn1_url', '/registration/' );
$btn2_txt       = get_theme_mod( 'hero_btn2_text', 'Event Registration' );
$btn2_url       = get_theme_mod( 'hero_btn2_url', '/event-registration/' );
$btn3_txt       = get_theme_mod( 'hero_btn3_text', 'Contact Us' );
$btn3_url       = get_theme_mod( 'hero_btn3_url', '/contact-us/' );

$stat_members_num     = get_theme_mod( 'stat_members_num', '59' );
$stat_members_label   = get_theme_mod( 'stat_members_label', 'Members' );
$stat_countries_num   = get_theme_mod( 'stat_countries_num', '11' );
$stat_countries_label = get_theme_mod( 'stat_countries_label', 'Countries' );
$stat_programs_num    = get_theme_mod( 'stat_programs_num', '10' );
$stat_programs_label  = get_theme_mod( 'stat_programs_label', 'Programs' );
$stat_partners_num    = get_theme_mod( 'stat_partners_num', '20' );
$stat_partners_label  = get_theme_mod( 'stat_partners_label', 'Partners' );

$about_eyebrow  = get_theme_mod( 'about_eyebrow', 'About BRIDGE' );
$about_title    = get_theme_mod( 'about_title', 'Building Bridges for a Better Future' );
$about_p1       = get_theme_mod( 'about_p1', 'BRIDGE brings together ambitious individuals and organizations to exchange ideas, develop leadership, strengthen international cooperation, and create sustainable social impact.' );
$about_p2       = get_theme_mod( 'about_p2', 'Our mission is to empower people with the knowledge, experiences, and global connections needed to lead positive change.' );
?>

<div class="hp-page" id="hp-main">

  <!-- ============================================================
       HERO — background image (Client Editable)
       ============================================================ -->
  <section class="hp-hero" aria-label="BRIDGE introduction">
    <div class="hp-hero-bg-fallback" aria-hidden="true"></div>
    <div class="hp-hero-bg" aria-hidden="true" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>');"></div>
    <div class="hp-hero-overlay" aria-hidden="true"></div>

    <div class="hp-inner">
      <div class="hp-hero-content hp-reveal">
        <span class="hp-hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></span>
        <h1 class="hp-hero-h1"><?php echo esc_html( $hero_title ); ?></h1>
        <p class="hp-hero-sub"><?php echo esc_html( $hero_desc ); ?></p>
        <div class="hp-hero-cta-row">
          <a class="hp-btn hp-btn--gold" href="<?php echo esc_url( home_url( $btn1_url ) ); ?>">
            <?php echo esc_html( $btn1_txt ); ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
          </a>
          <a class="hp-btn hp-btn--outline" href="<?php echo esc_url( home_url( $btn2_url ) ); ?>">
            <?php echo esc_html( $btn2_txt ); ?>
          </a>
          <a class="hp-btn hp-btn--outline" href="<?php echo esc_url( home_url( $btn3_url ) ); ?>"><?php echo esc_html( $btn3_txt ); ?></a>
        </div>
      </div>

      <div class="hp-hero-stats hp-reveal-stagger" id="hp-hero-stats">
        <div>
          <div class="hp-hero-stat-num" data-count="<?php echo esc_attr( $stat_members_num ); ?>" data-suffix="+">0</div>
          <div class="hp-hero-stat-label"><?php echo esc_html( $stat_members_label ); ?></div>
        </div>
        <div>
          <div class="hp-hero-stat-num" data-count="<?php echo esc_attr( $stat_countries_num ); ?>" data-suffix="+">0</div>
          <div class="hp-hero-stat-label"><?php echo esc_html( $stat_countries_label ); ?></div>
        </div>
        <div>
          <div class="hp-hero-stat-num" data-count="<?php echo esc_attr( $stat_programs_num ); ?>" data-suffix="+">0</div>
          <div class="hp-hero-stat-label"><?php echo esc_html( $stat_programs_label ); ?></div>
        </div>
        <div>
          <div class="hp-hero-stat-num" data-count="<?php echo esc_attr( $stat_partners_num ); ?>" data-suffix="+">0</div>
          <div class="hp-hero-stat-label"><?php echo esc_html( $stat_partners_label ); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       MARQUEE — core values, infinite scroll
       ============================================================ -->
  <section class="hp-marquee-section" aria-label="Core values">
    <div class="hp-marquee-wrap">
      <div class="hp-marquee-track">
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 7l-3 6a3 3 0 006 0zM19 7l-3 6a3 3 0 006 0zM3 21h18M5 7l7-4 7 4"></path></svg>Integrity</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17a4 4 0 01-8 0V9a4 4 0 018 0M13 7a4 4 0 018 0v8a4 4 0 01-8 0"></path></svg>Respect</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"></circle><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg>Diversity</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"></circle><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg>Inclusion</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Leadership</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M15 2a7 7 0 00-4 12.7V17h4v-2.3A7 7 0 0015 2z"></path></svg>Innovation</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg>Service</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>Sustainability</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg>Collaboration</span>
        <span class="hp-marquee-item"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Accountability</span>
        <!-- duplicate set for seamless infinite loop -->
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 7l-3 6a3 3 0 006 0zM19 7l-3 6a3 3 0 006 0zM3 21h18M5 7l7-4 7 4"></path></svg>Integrity</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17a4 4 0 01-8 0V9a4 4 0 018 0M13 7a4 4 0 018 0v8a4 4 0 01-8 0"></path></svg>Respect</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"></circle><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg>Diversity</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"></circle><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg>Inclusion</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M9 15l-2 6 5-3 5 3-2-6"></path></svg>Leadership</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M15 2a7 7 0 00-4 12.7V17h4v-2.3A7 7 0 0015 2z"></path></svg>Innovation</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg>Service</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>Sustainability</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"></path></svg>Collaboration</span>
        <span class="hp-marquee-item" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Accountability</span>
      </div>
    </div>
  </section>

  <!-- ============================================================
       ABOUT (Client Editable in Appearance > Customize)
       ============================================================ -->
  <section id="about" class="hp-about-section" aria-labelledby="hp-about-heading">
    <div class="hp-inner">
      <div class="hp-about-grid">
        <div class="hp-about-body hp-reveal">
          <span class="hp-eyebrow"><?php echo esc_html( $about_eyebrow ); ?></span>
          <h2 class="hp-h2" id="hp-about-heading"><?php echo esc_html( $about_title ); ?></h2>
          <p><?php echo esc_html( $about_p1 ); ?></p>
          <p><?php echo esc_html( $about_p2 ); ?></p>
          <a class="hp-btn hp-btn--outline" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
            Read more
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FRAMEWORK — Six Strategic Pillars (Client Editable)
       ============================================================ -->
  <section class="hp-panel-section hp-framework" id="services" aria-labelledby="hp-fw-heading">
    <span id="hp-framework"></span>
    <div class="hp-inner">
      <div class="hp-section-head hp-center">
        <span class="hp-eyebrow" style="color:#b8862f;">Our Framework</span>
        <h2 class="hp-h2 hp-h2--dark" id="hp-fw-heading">Six Pillars. One Shared Vision.</h2>
        <p class="hp-lede hp-lede--dark" style="margin:0 auto;">Everything we do is guided by six strategic pillars that prepare individuals and communities to thrive in an interconnected world.</p>
      </div>

      <div class="hp-pillar-grid hp-reveal-stagger">

        <!-- Pillar 01 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-1')); ?>">
          <span class="hp-pillar-num">01</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"></path><path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_1_title', 'Leadership Development' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_1_desc', 'Develop practical leadership skills through hands-on learning and real-world experiences.' ) ); ?></p>
          <span class="hp-pillar-tag">Leadership <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

        <!-- Pillar 02 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-2')); ?>">
          <span class="hp-pillar-num">02</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_2_title', 'International Exchange' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_2_desc', 'Create global connections through educational, professional, research, and cultural exchange opportunities.' ) ); ?></p>
          <span class="hp-pillar-tag">Exchange <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

        <!-- Pillar 03 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-3')); ?>">
          <span class="hp-pillar-num">03</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"></rect><path d="M3 10h18M8 4v3M16 4v3"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_3_title', 'Global Dialogue & Diplomacy' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_3_desc', 'Promote international cooperation by bringing diverse voices together through forums, conferences, and diplomacy.' ) ); ?></p>
          <span class="hp-pillar-tag">Dialogue <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

        <!-- Pillar 04 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-4')); ?>">
          <span class="hp-pillar-num">04</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"></path><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_4_title', 'Innovation & Entrepreneurship' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_4_desc', 'Support innovators and entrepreneurs with mentorship, networking, and startup opportunities.' ) ); ?></p>
          <span class="hp-pillar-tag">Innovate <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

        <!-- Pillar 05 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-5')); ?>">
          <span class="hp-pillar-num">05</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_5_title', 'Global Careers' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_5_desc', 'Connect members with international internships, careers, scholarships, and professional opportunities.' ) ); ?></p>
          <span class="hp-pillar-tag">Careers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

        <!-- Pillar 06 -->
        <a class="hp-pillar-card" href="<?php echo esc_url(home_url('/services/#svc-pillar-6')); ?>">
          <span class="hp-pillar-num">06</span>
          <div class="hp-pillar-top">
            <span class="hp-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path></svg></span>
          </div>
          <div class="hp-pillar-title"><?php echo esc_html( get_theme_mod( 'pillar_6_title', 'Community Development' ) ); ?></div>
          <p class="hp-pillar-body"><?php echo esc_html( get_theme_mod( 'pillar_6_desc', 'Deliver sustainable initiatives that improve education, health, skills, and community well-being.' ) ); ?></p>
          <span class="hp-pillar-tag">Community <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></span>
        </a>

      </div>
    </div>
  </section>

  <!-- ============================================================
       UPCOMING EVENTS (Dynamic from Events CPT with Curated Fallbacks)
       ============================================================ -->
  <section id="hp-events" aria-labelledby="hp-events-heading">
    <div class="hp-inner">
      <div class="hp-section-head">
        <span class="hp-eyebrow">Experience BRIDGE</span>
        <h2 class="hp-h2">Upcoming Events</h2>
        <p class="hp-lede">From leadership summits to cultural festivals and innovation forums, our events bring together passionate individuals from around the world to learn, connect, and collaborate.</p>
      </div>

      <div class="hp-events-grid hp-reveal-stagger" id="hp-events-grid">
        <?php
        $events_query = new WP_Query( array(
            'post_type'      => 'bridge_event',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ) );

        if ( $events_query->have_posts() ) :
            $i = 1;
            while ($events_query->have_posts()) : $events_query->the_post();
                $idx = str_pad($i++, 2, '0', STR_PAD_LEFT);
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $venue = get_post_meta(get_the_ID(), 'event_venue', true) ?: 'Islamabad, Pakistan';
                ?>
                <div class="hp-event-card">
                  <?php if ($thumb) : ?>
                    <img class="hp-event-img" src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php else : ?>
                    <div class="hp-event-img" style="background:#16304c;"></div>
                  <?php endif; ?>
                  <span class="hp-event-tag">Confirmed</span>
                  <div class="hp-event-body">
                    <span class="hp-event-index"><?php echo esc_html($idx); ?></span>
                    <h3 class="hp-event-title"><?php the_title(); ?></h3>
                    <div class="hp-event-meta">
                      <span class="hp-event-meta-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-6.1 7-11.5A7 7 0 0 0 5 9.5C5 14.9 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
                        <?php echo esc_html($venue); ?>
                      </span>
                    </div>
                    <a class="hp-event-btn" href="<?php echo esc_url(home_url('/event-registration/')); ?>">Register Now &rarr;</a>
                  </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div class="hp-event-card">
              <img class="hp-event-img" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop" alt="Global Youth Leadership Summit">
              <span class="hp-event-tag">Registration Open</span>
              <div class="hp-event-body">
                <span class="hp-event-index">01</span>
                <h3 class="hp-event-title">Global Youth Leadership Summit 2026</h3>
                <div class="hp-event-meta">
                  <span class="hp-event-meta-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-6.1 7-11.5A7 7 0 0 0 5 9.5C5 14.9 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>Islamabad, Pakistan</span>
                </div>
                <a class="hp-event-btn" href="<?php echo esc_url(home_url('/event-registration/')); ?>">Register Now &rarr;</a>
              </div>
            </div>

            <div class="hp-event-card">
              <img class="hp-event-img" src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800&auto=format&fit=crop" alt="International Peace &amp; Dialogue Forum">
              <span class="hp-event-tag">Upcoming</span>
              <div class="hp-event-body">
                <span class="hp-event-index">02</span>
                <h3 class="hp-event-title">International Peace &amp; Dialogue Forum</h3>
                <div class="hp-event-meta">
                  <span class="hp-event-meta-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-6.1 7-11.5A7 7 0 0 0 5 9.5C5 14.9 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>Lahore, Pakistan</span>
                </div>
                <a class="hp-event-btn" href="<?php echo esc_url(home_url('/event-registration/')); ?>">Register Now &rarr;</a>
              </div>
            </div>

            <div class="hp-event-card">
              <img class="hp-event-img" src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=800&auto=format&fit=crop" alt="Social Innovation &amp; Entrepreneurship Expo">
              <span class="hp-event-tag">Confirmed</span>
              <div class="hp-event-body">
                <span class="hp-event-index">03</span>
                <h3 class="hp-event-title">Social Innovation &amp; Entrepreneurship Expo</h3>
                <div class="hp-event-meta">
                  <span class="hp-event-meta-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-6.1 7-11.5A7 7 0 0 0 5 9.5C5 14.9 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>Karachi, Pakistan</span>
                </div>
                <a class="hp-event-btn" href="<?php echo esc_url(home_url('/event-registration/')); ?>">Register Now &rarr;</a>
              </div>
            </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       GLOBAL IMPACT — big animated numbers (Client Editable)
       ============================================================ -->
  <section id="why-us" class="hp-impact-section" aria-labelledby="hp-impact-heading">
    <span id="impact"></span>
    <div class="hp-inner">
      <div class="hp-section-head hp-center">
        <span class="hp-eyebrow">Global Impact</span>
        <h2 class="hp-h2" id="hp-impact-heading">Creating Change Beyond Borders</h2>
        <p class="hp-lede" style="margin:0 auto;">Every initiative, partnership, and program contributes to a stronger global community. Together, we are developing leaders, empowering communities, and building meaningful connections that shape a better future.</p>
      </div>

      <div class="hp-impact-grid hp-reveal-stagger" id="hp-impact-grid">
        <div class="hp-impact-card">
          <div class="hp-impact-num" data-count="<?php echo esc_attr( $stat_members_num ); ?>" data-suffix="+">0</div>
          <div class="hp-impact-label"><?php echo esc_html( $stat_members_label ); ?></div>
        </div>
        <div class="hp-impact-card">
          <div class="hp-impact-num" data-count="<?php echo esc_attr( $stat_countries_num ); ?>" data-suffix="+">0</div>
          <div class="hp-impact-label"><?php echo esc_html( $stat_countries_label ); ?></div>
        </div>
        <div class="hp-impact-card">
          <div class="hp-impact-num" data-count="<?php echo esc_attr( $stat_programs_num ); ?>" data-suffix="+">0</div>
          <div class="hp-impact-label"><?php echo esc_html( $stat_programs_label ); ?></div>
        </div>
        <div class="hp-impact-card">
          <div class="hp-impact-num" data-count="<?php echo esc_attr( $stat_partners_num ); ?>" data-suffix="+">0</div>
          <div class="hp-impact-label"><?php echo esc_html( $stat_partners_label ); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       PARTNERSHIPS
       ============================================================ -->
  <section class="hp-panel-section" aria-labelledby="hp-partner-heading">
    <div class="hp-inner">
      <div class="hp-section-head">
        <span class="hp-eyebrow" style="color:#b8862f;">Our Partner Network</span>
        <h2 class="hp-h2 hp-h2--dark" id="hp-partner-heading">Building Strategic Partnerships</h2>
        <p class="hp-lede hp-lede--dark">Collaborating with universities, organizations, and global leaders to create meaningful opportunities worldwide.</p>
      </div>

      <div class="hp-partner-grid hp-reveal-stagger">
        <div class="hp-partner-card">
          <h3 class="hp-partner-card-title">Academic &amp; Research Institutions</h3>
          <p class="hp-partner-card-body">We collaborate with universities, colleges, and research organizations to support academic exchange, student leadership, and joint research initiatives.</p>
          <ul class="hp-partner-list">
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Student Exchange Programs</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Collaborative Research</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Academic Forums</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Joint Conferences</li>
          </ul>
          <a class="hp-partner-btn" href="<?php echo esc_url(home_url('/partners/')); ?>">Learn More &rarr;</a>
        </div>

        <div class="hp-partner-card">
          <h3 class="hp-partner-card-title">International &amp; Cultural Organizations</h3>
          <p class="hp-partner-card-body">Partnering with embassies, cultural institutes, and global youth networks to foster intercultural understanding and international cooperation.</p>
          <ul class="hp-partner-list">
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Cultural Immersion Programs</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>International Forums</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Diplomatic Dialogues</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Global Youth Delegations</li>
          </ul>
          <a class="hp-partner-btn" href="<?php echo esc_url(home_url('/partners/')); ?>">Learn More &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       GALLERY
       ============================================================ -->
  <section aria-labelledby="hp-gallery-heading">
    <div class="hp-inner">
      <div class="hp-section-head hp-center">
        <span class="hp-eyebrow">Inside BRIDGE</span>
        <h2 class="hp-h2" id="hp-gallery-heading">Moments From Our Programs</h2>
      </div>

      <div class="hp-gallery-grid hp-reveal-stagger">
        <div class="hp-gallery-item hp-gallery-item--tall">
          <img decoding="async" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop" alt="BRIDGE Youth Leadership Summit" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=800&auto=format&fit=crop" alt="BRIDGE Workshop and Dialogue" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800&auto=format&fit=crop" alt="Global Stage Presentation" loading="lazy">
        </div>
        <div class="hp-gallery-item hp-gallery-item--tall">
          <img decoding="async" src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=800&auto=format&fit=crop" alt="Cross-Border Collaboration" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=800&auto=format&fit=crop" alt="International Panel Discussion" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?w=800&auto=format&fit=crop" alt="Innovation &amp; Brainstorming" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&auto=format&fit=crop" alt="Future Leaders Working Group" loading="lazy">
        </div>
        <div class="hp-gallery-item">
          <img decoding="async" src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=800&auto=format&fit=crop" alt="International Networking Gala" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       TESTIMONIALS
       ============================================================ -->
  <section class="hp-panel-section" id="reviews" aria-labelledby="hp-testi-heading" style="background:var(--bridge-navy-darkest, #0a1c33); color:var(--bridge-white, #ffffff);">
    <span id="testimonials"></span>
    <div class="hp-inner">
      <div class="hp-section-head hp-center">
        <span class="hp-eyebrow">Testimonials</span>
        <h2 class="hp-h2">What Attendees Say</h2>
      </div>

      <div class="hp-testi-track" id="hp-testi-row">
        <div class="hp-testi-card">
          <div class="hp-testi-stars">
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
          </div>
          <p class="hp-testi-quote">"BRIDGE provided our teams with the crucial tools needed to foster collaboration. Their strategic approach to localized engagement created an inclusive space for real development."</p>
          <div class="hp-testi-person">
            <span class="hp-testi-avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a8 8 0 0116 0v1"></path></svg></span>
            <div>
              <div class="hp-testi-name">Farhan Ali</div>
              <div class="hp-testi-role">Youth Delegate &bull; Islamabad</div>
            </div>
          </div>
        </div>

        <div class="hp-testi-card">
          <div class="hp-testi-stars">
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.2 21 12 17.77 5.8 21 7 14.14l-5-4.87 6.91-1.01z"></path></svg>
          </div>
          <p class="hp-testi-quote">"The International Exchange program was life-changing. It expanded my perspective on cross-border diplomacy and gave me mentors who continue to guide my career today."</p>
          <div class="hp-testi-person">
            <span class="hp-testi-avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a8 8 0 0116 0v1"></path></svg></span>
            <div>
              <div class="hp-testi-name">Ayesha Siddiqui</div>
              <div class="hp-testi-role">Exchange Scholar &bull; Lahore</div>
            </div>
          </div>
        </div>
      </div>

      <div class="hp-testi-nav">
        <button type="button" class="hp-testi-nav-btn" onclick="hpScrollTesti(-1)" aria-label="Previous testimonial"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"></path></svg></button>
        <button type="button" class="hp-testi-nav-btn" onclick="hpScrollTesti(1)" aria-label="Next testimonial"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg></button>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FAQ (Accordion — Client Editable in Appearance > Customize)
       ============================================================ -->
  <section class="hp-panel-section" aria-labelledby="hp-faq-heading">
    <div class="hp-inner">
      <div class="hp-section-head hp-center">
        <span class="hp-eyebrow" style="color:#b8862f;">FAQ</span>
        <h2 class="hp-h2 hp-h2--dark" id="hp-faq-heading">Frequently Asked Questions</h2>
      </div>

      <div class="hp-faq-list" id="hp-faq-list">
        <?php
        $faq_items = array(
          1 => array(
            'q' => get_theme_mod( 'faq_1_q', 'Who can join BRIDGE?' ),
            'a' => get_theme_mod( 'faq_1_a', 'BRIDGE welcomes students, young professionals, institutions, and organizations. Membership is organized into tiers — Explorer (15–18), Member (18–30), Professional Member (25–40), Institutional Member (for organizations), and Ambassador (by invitation) — so there is a path in regardless of where you are starting from.' ),
          ),
          2 => array(
            'q' => get_theme_mod( 'faq_2_q', 'How do I register for BRIDGE or an event?' ),
            'a' => get_theme_mod( 'faq_2_a', 'Membership uses our Registration page. To attend a specific event, use the Event Registration page linked from that event\'s card above. Our team follows up by email once your submission is received.' ),
          ),
          3 => array(
            'q' => get_theme_mod( 'faq_3_q', 'What are the Six Strategic Pillars?' ),
            'a' => get_theme_mod( 'faq_3_a', 'Leadership Development, International Exchange, Global Dialogue, Entrepreneurship, Global Careers, and Community Development. Every BRIDGE program, event, and service is organized under one or more of these pillars.' ),
          ),
          4 => array(
            'q' => get_theme_mod( 'faq_4_q', 'Where are BRIDGE events held?' ),
            'a' => get_theme_mod( 'faq_4_a', 'BRIDGE is launching from Islamabad, Pakistan, with events planned at provincial and university chapters first, expanding to international venues over time. Specific venues are announced on each event listing as details are confirmed.' ),
          ),
          5 => array(
            'q' => get_theme_mod( 'faq_5_q', 'Can my organization or university partner with BRIDGE?' ),
            'a' => get_theme_mod( 'faq_5_a', 'Yes. BRIDGE partners with academic and research institutions, and international and cultural organizations, through research collaborations, student exchange, forums, and joint programs. Visit our Partners page or use the contact form to start the conversation.' ),
          ),
          6 => array(
            'q' => get_theme_mod( 'faq_6_q', 'Is there a cost to join?' ),
            'a' => get_theme_mod( 'faq_6_a', 'Registering with BRIDGE is free. Specific programs or events may carry their own fees, which will always be clearly stated before you commit.' ),
          ),
          7 => array(
            'q' => get_theme_mod( 'faq_7_q', 'How can I stay updated on new programs and events?' ),
            'a' => get_theme_mod( 'faq_7_a', 'Subscribe to our newsletter in the footer below, or follow BRIDGE on our verified social channels. All upcoming events are also listed on this homepage as soon as they are confirmed.' ),
          ),
          8 => array(
            'q' => get_theme_mod( 'faq_8_q', 'Can I volunteer or lead a local BRIDGE chapter?' ),
            'a' => get_theme_mod( 'faq_8_a', 'Yes! We actively welcome volunteers, mentors, and campus ambassadors. Submit your interest via the Registration page selecting the Community or Explorer tier.' ),
          ),
        );

        $faq_index = 0;
        foreach ( $faq_items as $f_num => $f_data ) :
          if ( empty( trim( $f_data['q'] ) ) ) continue;
          $faq_index++;
          $is_first = ( $faq_index === 1 ) ? ' hp-faq-open' : '';
        ?>
          <div class="hp-faq-item<?php echo esc_attr( $is_first ); ?>">
            <button type="button" class="hp-faq-q">
              <span><?php echo esc_html( $f_data['q'] ); ?></span>
              <span class="hp-faq-q-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"></path></svg></span>
            </button>
            <div class="hp-faq-a">
              <div class="hp-faq-a-inner"><?php echo wp_kses_post( $f_data['a'] ); ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       WORDPRESS PAGE CONTENT (Client Editable in Edit Page)
       ============================================================ -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( ! empty( trim( get_the_content() ) ) ) : ?>
      <section class="hp-panel-section hp-custom-page-content" style="background:#0a1c33; padding: 60px 24px; color: #ffffff;">
        <div class="hp-inner">
          <?php the_content(); ?>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; endif; ?>

  <!-- ============================================================
       FINAL CTA
       ============================================================ -->
  <section class="hp-final-cta" id="contact" aria-labelledby="hp-final-heading">
    <span id="join"></span>
    <div class="hp-final-glow" aria-hidden="true"></div>
    <div class="hp-inner hp-final-content hp-reveal">
      <span class="hp-eyebrow">Join BRIDGE</span>
      <h2 class="hp-h2" id="hp-final-heading">Join the Next Generation Shaping a Connected World</h2>
      <p class="hp-lede">Explore BRIDGE programs, contribute to global dialogue, or partner with a growing international platform for youth leadership and strategic alliance.</p>
      <div class="hp-final-btn-row">
        <a class="hp-btn hp-btn--gold" href="<?php echo esc_url( home_url( '/registration/' ) ); ?>">
          Join BRIDGE
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"></path></svg>
        </a>
        <a class="hp-btn hp-btn--outline" href="<?php echo esc_url( home_url( '/event-registration/' ) ); ?>">Event Registration</a>
        <a class="hp-btn hp-btn--outline" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a>
      </div>
    </div>
  </section>

</div><!-- .hp-page -->

<?php
get_footer();

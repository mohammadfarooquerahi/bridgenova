<?php
/**
 * Template Name: Events Page
 *
 * Replicates bridgenova.info
 *
 * @package BridgeNova
 */

get_header();
?>

<div class="hp-page" style="padding-top: 80px;">
  <!-- Hero -->
  <section class="hp-hero" style="min-height: 50vh; padding: 120px 24px 60px 24px;">
    <div class="hp-hero-bg-fallback"></div>
    <div class="hp-hero-overlay"></div>
    <div class="hp-inner" style="position: relative; z-index: 2;">
      <div class="hp-hero-content hp-reveal">
        <span class="hp-hero-eyebrow">Experience BRIDGE</span>
        <h1 class="hp-hero-h1">Upcoming Events &amp; Programs</h1>
        <p class="hp-hero-sub">From youth summits to international diplomacy forums, explore our confirmed gatherings worldwide.</p>
      </div>
    </div>
  </section>

  <!-- Events Grid -->
  <section id="hp-events" style="padding: 80px 24px;">
    <div class="hp-inner">
      <div class="hp-events-grid hp-reveal-stagger">
        <?php
        $events_query = new WP_Query(array(
            'post_type'      => 'bridge_event',
            'posts_per_page' => 12,
            'post_status'    => 'publish',
        ));

        if ($events_query->have_posts()) :
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
            <!-- Fallback Curated Events Matching Reference Site -->
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

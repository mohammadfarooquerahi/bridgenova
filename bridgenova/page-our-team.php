<?php
/**
 * Template Name: Our Team Page
 *
 * Exact replication of bridgenova.info with dark navy luxury theme and high-res assets
 *
 * @package BridgeNova
 */

get_header();
?>

<style>
  .tmp-wrap, .tmp-wrap *, .tmp-wrap *::before, .tmp-wrap *::after { box-sizing: border-box; }
  .tmp-wrap {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #0a1c33;
    color: #ffffff;
    --bridge-navy-darkest: #0a1c33;
    --bridge-navy-card: #132a4d;
    --bridge-navy-hover: #1c3a63;
    --bridge-gold: #caa256;
  }

  .tmp-hero {
    position: relative;
    background:
      linear-gradient(180deg, rgba(10,28,51,.6) 0%, rgba(10,28,51,.95) 100%),
      linear-gradient(135deg, rgba(10,28,51,.85) 0%, rgba(22,48,76,.85) 100%),
      url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600&auto=format&fit=crop') center center / cover no-repeat;
    padding: 160px 24px 100px 24px;
    text-align: center;
    overflow: hidden;
  }
  .tmp-hero-inner { position: relative; max-width: 760px; margin: 0 auto; }
  .tmp-eyebrow {
    display: inline-block; color: #caa256; font-size: 13px; font-weight: 700;
    letter-spacing: 2.4px; text-transform: uppercase; margin-bottom: 18px;
  }
  .tmp-hero-title { font-size: 50px; line-height: 1.15; font-weight: 700; color: #fff; margin: 0 0 20px 0; }
  .tmp-hero-sub { color: #dfece9; font-size: 17px; line-height: 1.75; max-width: 580px; margin: 0 auto; }

  /* ABOUT SECTION */
  .tmp-about { background: #0e223f; padding: 90px 24px; border-bottom: 1px solid rgba(255,255,255,0.06); }
  .tmp-about-inner { max-width: 1180px; margin: 0 auto; display: grid; grid-template-columns: 1.1fr 1fr; gap: 64px; align-items: start; }
  .tmp-about-h2 { font-size: 32px; font-weight: 700; color: #ffffff; line-height: 1.25; margin: 0 0 20px 0; }
  .tmp-about-body { color: #dfece9; font-size: 15.5px; line-height: 1.8; }
  .tmp-about-body p { margin-bottom: 18px; }
  .tmp-stat-list { display: flex; flex-direction: column; gap: 20px; }
  .tmp-stat-card {
    background: #132a4d; border-radius: 14px; padding: 24px 26px; display: flex; align-items: flex-start; gap: 18px;
    border: 1px solid rgba(202,162,86,0.15); box-shadow: 0 4px 16px rgba(0,0,0,.2);
  }
  .tmp-stat-num {
    flex: 0 0 auto; width: 44px; height: 44px; border-radius: 50%; background: #caa256; color: #0a1c33;
    display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 15px;
  }
  .tmp-stat-text { color: #ffffff; font-size: 14.5px; font-weight: 600; line-height: 1.6; padding-top: 6px; }

  /* TEAM SECTION */
  .tmp-team { background: #0a1c33; padding: 96px 24px; }
  .tmp-team-inner { max-width: 1200px; margin: 0 auto; }
  .tmp-team-head { text-align: center; max-width: 640px; margin: 0 auto 56px auto; }
  .tmp-team-h2 { font-size: 34px; font-weight: 700; color: #ffffff; margin: 0 0 14px 0; }
  .tmp-team-sub { color: #9fb3c9; font-size: 15.5px; line-height: 1.7; }

  /* Equal-height cards */
  .tmp-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; align-items: stretch; }
  .tmp-card {
    background: #132a4d; border-radius: 16px; padding: 28px 24px; text-align: center;
    border: 1px solid rgba(255,255,255,0.08);
    transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
    display: flex; flex-direction: column; height: 100%;
  }
  .tmp-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0,0,0,.35);
    border-color: rgba(202,162,86,0.4);
  }
  .tmp-photo {
    width: 110px; height: 110px; border-radius: 50%; object-fit: cover; margin: 0 auto 16px auto;
    display: block; background: #0a1c33; border: 3px solid #caa256;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  }
  .tmp-name { color: #ffffff; font-size: 17.5px; font-weight: 700; margin-bottom: 6px; }
  .tmp-role { color: #caa256; font-size: 13.5px; font-weight: 600; margin-bottom: 14px; min-height: 38px; display: flex; align-items: center; justify-content: center; }

  /* Clamp bio with smooth read-more toggle */
  .tmp-bio {
    color: #dfece9; font-size: 13.5px; line-height: 1.65; margin-bottom: 12px;
    display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;
    overflow: hidden; text-align: left;
  }
  .tmp-bio.is-expanded {
    display: block; -webkit-line-clamp: unset; overflow: visible;
  }
  .tmp-readmore {
    background: none; border: none; padding: 0; margin: 0 0 16px 0;
    color: #caa256; font-size: 13px; font-weight: 700; cursor: pointer;
    font-family: inherit; text-decoration: underline; align-self: flex-start;
  }
  .tmp-readmore:hover { color: #dfb76c; }

  /* Social links */
  .tmp-socials { display: flex; justify-content: center; gap: 10px; margin-top: auto; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.06); }
  .tmp-socials a {
    width: 36px; height: 36px; border-radius: 50%; background: #0a1c33; display: flex;
    align-items: center; justify-content: center; text-decoration: none; color: #caa256;
    font-size: 14px; font-weight: 700; border: 1px solid rgba(202,162,86,0.3);
    transition: all 200ms ease;
  }
  .tmp-socials a:hover { background: #caa256; color: #0a1c33; transform: scale(1.1); }

  /* CTA */
  .tmp-cta {
    background: radial-gradient(circle at center, #16304c 0%, #0a1c33 100%);
    padding: 96px 24px; text-align: center; border-top: 1px solid rgba(202,162,86,0.15);
  }
  .tmp-cta-inner { max-width: 620px; margin: 0 auto; }
  .tmp-cta-h2 { font-size: 32px; font-weight: 700; color: #fff; margin: 0 0 16px 0; }
  .tmp-cta-sub { color: #b9cbc9; font-size: 15.5px; line-height: 1.7; margin-bottom: 32px; }
  .tmp-cta-btn {
    display: inline-block; background: #caa256; color: #0a1c33; font-size: 14.5px; font-weight: 800;
    padding: 14px 38px; border-radius: 999px; text-decoration: none; transition: transform 200ms ease, box-shadow 200ms ease;
  }
  .tmp-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(202,162,86,.3); }

  @media (max-width: 1024px) {
    .tmp-about-inner { grid-template-columns: 1fr; gap: 40px; }
    .tmp-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 640px) {
    .tmp-hero { padding: 130px 20px 70px 20px; }
    .tmp-hero-title { font-size: 32px; }
    .tmp-about, .tmp-team, .tmp-cta { padding: 60px 20px; }
    .tmp-about-h2, .tmp-team-h2, .tmp-cta-h2 { font-size: 26px; }
    .tmp-grid { grid-template-columns: 1fr; }
  }
</style>

<div class="tmp-wrap">

  <section class="tmp-hero">
    <div class="tmp-hero-inner">
      <span class="tmp-eyebrow">Governance &amp; Leadership</span>
      <h1 class="tmp-hero-title">Meet Our Team</h1>
      <p class="tmp-hero-sub">The people driving BRIDGE's mission — connecting communities, developing leaders, and building international partnerships across borders.</p>
    </div>
  </section>

  <section class="tmp-about">
    <div class="tmp-about-inner">
      <div>
        <h2 class="tmp-about-h2">Dedicated Leadership for Global Progress</h2>
        <div class="tmp-about-body">
          <p>BRIDGE was founded by social entrepreneurs, educators, and development practitioners who believe that meaningful cross-border connections can inspire positive global change.</p>
          <p>Our governance team brings decades of combined experience across public diplomacy, higher education, youth development, gender equality, and sustainable international collaboration.</p>
        </div>
      </div>
      <div class="tmp-stat-list">
        <div class="tmp-stat-card">
          <div class="tmp-stat-num">01</div>
          <div class="tmp-stat-text">Strategic guidance rooted in real development sector experience</div>
        </div>
        <div class="tmp-stat-card">
          <div class="tmp-stat-num">02</div>
          <div class="tmp-stat-text">Commitment to inclusive youth participation across 30+ countries</div>
        </div>
        <div class="tmp-stat-card">
          <div class="tmp-stat-num">03</div>
          <div class="tmp-stat-text">High-integrity execution of bilateral dialogue and exchange programs</div>
        </div>
      </div>
    </div>
  </section>

  <section class="tmp-team">
    <div class="tmp-team-inner">
      <div class="tmp-team-head">
        <h2 class="tmp-team-h2">The People Behind BRIDGE</h2>
        <p class="tmp-team-sub">A closer look at the directors leading our programs, partnerships, and community initiatives.</p>
      </div>

      <div class="tmp-grid">

        <!-- Member 1: Aqib Javed Khan -->
        <div class="tmp-card">
          <img decoding="async" class="tmp-photo" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop" alt="Aqib Javed Khan">
          <div class="tmp-name">Aqib Javed Khan</div>
          <div class="tmp-role">Chief Executive Officer</div>
          <div class="tmp-bio">Aqib Javed Khan is a social entrepreneur with over 12 years of experience, working to uplift underprivileged communities through Education, Social Development, and Youth Empowerment. His work includes establishing and supporting schools that provide free education to children from disadvantaged backgrounds, alongside community welfare initiatives. He is also involved in Youth Development, working to connect young people with opportunities for Learning, Leadership, Dialogue, and Collaboration. His focus is on creating platforms and opportunities that enable young people to contribute meaningfully to their communities and connect with peers across the world.</div>
          <button type="button" class="tmp-readmore">Read more</button>
          <div class="tmp-socials">
            <a href="http://www.linkedin.com/in/aqib-javed-khan-8b3141138" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
          </div>
        </div>

        <!-- Member 2: Imran Ullah -->
        <div class="tmp-card">
          <img decoding="async" class="tmp-photo" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop" alt="Imran Ullah">
          <div class="tmp-name">Imran Ullah</div>
          <div class="tmp-role">Director - Programs &amp; Leadership Development</div>
          <div class="tmp-bio">Imran Ullah is a public-sector professional with over 15 years of experience in project management, monitoring and evaluation, contract management, planning, operations, procurement, human resource management, and business process improvement. He has held managerial and policy-oriented positions with the Government, international development programmes, and donor-funded projects. He holds an MS in Management Sciences, specializing in Human Resource Management, from the Institute of Management Sciences, Peshawar. He is a recipient of the Global Undergraduate Exchange Program (Global UGRAD) scholarship, administered by USEFP, through which he completed a semester of academic and cultural exchange in the United States, including community engagement activities.</div>
          <button type="button" class="tmp-readmore">Read more</button>
          <div class="tmp-socials">
            <a href="http://www.linkedin.com/in/imran-ullah-857ab033" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
          </div>
        </div>

        <!-- Member 3: Ashab Lodhi -->
        <div class="tmp-card">
          <img decoding="async" class="tmp-photo" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&auto=format&fit=crop" alt="Ashab Lodhi">
          <div class="tmp-name">Ashab Lodhi</div>
          <div class="tmp-role">Director - Partnerships &amp; Institutional Relations</div>
          <div class="tmp-bio">Ashab Lodhi is a development professional with over 12 years of experience in Youth Engagement, Alumni Outreach, Community Development, and Program Coordination. He works extensively with U.S. Department of State exchange alumni through USEFP and the Pakistan U.S. Alumni Network (PUAN), supporting a nationwide network of 46,000+ alumni. His expertise includes program management, grants, monitoring, stakeholder engagement, institutional partnerships, and Education USA initiatives. He is passionate about youth empowerment, education, digital transformation, leadership development, and connecting young people with learning and professional opportunities. He holds an Executive Master’s in Public Policy from Forman Christian College University and an MS in Information Technology from NUST Islamabad.</div>
          <button type="button" class="tmp-readmore">Read more</button>
          <div class="tmp-socials">
            <a href="https://www.linkedin.com/in/ashab-lodhi-9980634b" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
          </div>
        </div>

        <!-- Member 4: Marvi Asif Awan -->
        <div class="tmp-card">
          <img decoding="async" class="tmp-photo" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&auto=format&fit=crop" alt="Marvi Asif Awan">
          <div class="tmp-name">Marvi Asif Awan</div>
          <div class="tmp-role">Director - Human Resource &amp; Community Engagement</div>
          <div class="tmp-bio">Marvi Awan is a Human Rights Advocate, Law Professional, Gender Expert, and Development Practitioner with over 15 years of experience in the development sector. She is the founder of Women Protection Centre Sindh, working on gender equality, women and child rights, labour rights, safeguarding, legal awareness, climate justice, and youth development. She has engaged young people through community development, leadership, learning, networking, and entrepreneurship initiatives. Her work has received national and international recognition, including features by Deutsche Welle and the U.S. Embassy Pakistan. She has represented Pakistan internationally and works on human rights law, women’s protection, digital safety, survivor support, accountability, and inclusive development.</div>
          <button type="button" class="tmp-readmore">Read more</button>
          <div class="tmp-socials">
            <a href="https://www.linkedin.com/in/marvi-asif-awan-19916219a" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
          </div>
        </div>

        <!-- Member 5: Maria Akbar -->
        <div class="tmp-card">
          <img decoding="async" class="tmp-photo" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&auto=format&fit=crop" alt="Maria Akbar">
          <div class="tmp-name">Maria Akbar</div>
          <div class="tmp-role">Director - Marketing &amp; Communications</div>
          <div class="tmp-bio">Maria Akbar is a Tourism and Hospitality Academic Professional, and Advocate for Sustainable Tourism, Youth Empowerment, and International Collaboration. She holds a Master’s in Tourism, Events and Hospitality Management from Oxford Brookes University, UK, with international academic and professional exposure in the UK, USA, Russia, and Türkiye. At BRIDGE, she leads marketing and strategic communication, advancing cross-cultural connections, youth leadership, international engagement, sustainable tourism, climate resilience, and community development. She also serves as a Faculty Member in Tourism &amp; Hospitality Management at the University of Baltistan, Skardu, and as a Private Member of the Governing Body of Pakistan Tourism Development Endowment Fund (PTDEF), Government of Pakistan.</div>
          <button type="button" class="tmp-readmore">Read more</button>
          <div class="tmp-socials">
            <a href="https://uk.linkedin.com/in/mariaakbar" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
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

  <section class="tmp-cta">
    <div class="tmp-cta-inner">
      <h2 class="tmp-cta-h2">Want to be part of BRIDGE?</h2>
      <p class="tmp-cta-sub">We're always looking for passionate individuals and advisors to help grow our programs and global community.</p>
      <a class="tmp-cta-btn" href="<?php echo esc_url( home_url( '/registration/' ) ); ?>">Get Involved</a>
    </div>
  </section>

</div>

<script>
  (function () {
    document.querySelectorAll('.tmp-readmore').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var bio = btn.previousElementSibling;
        if (bio) {
          var expanded = bio.classList.toggle('is-expanded');
          btn.textContent = expanded ? 'Read less' : 'Read more';
        }
      });
    });
  })();
</script>

<?php
get_footer();

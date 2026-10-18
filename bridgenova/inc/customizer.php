<?php
/**
 * BridgeNova Theme Customizer
 * Comprehensive editable options for all sections and pages
 *
 * @package BridgeNova
 */

if ( ! function_exists( 'bridgenova_customize_register' ) ) :
function bridgenova_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bridgenova_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bridgenova_customize_partial_blogdescription',
			)
		);
	}

	// Master Theme Options Panel
	$wp_customize->add_panel( 'bridgenova_options', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'BridgeNova Theme Options', 'bridgenova' ),
		'description'    => esc_html__( 'Easily edit every section, heading, text, button, and image on your website.', 'bridgenova' ),
	) );

	// ==========================================
	// 1. HERO SECTION
	// ==========================================
	$wp_customize->add_section( 'bridgenova_hero_section', array(
		'title'    => esc_html__( '1. Hero Section', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 10,
	) );

	$wp_customize->add_setting( 'hero_eyebrow', array(
		'default'           => 'Global Connections',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_eyebrow', array(
		'label'   => esc_html__( 'Hero Eyebrow Text', 'bridgenova' ),
		'section' => 'bridgenova_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'hero_title', array(
		'default'           => 'Building Bridges Across Borders',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_title', array(
		'label'   => esc_html__( 'Hero H1 Heading', 'bridgenova' ),
		'section' => 'bridgenova_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'hero_description', array(
		'default'           => 'BRIDGE is an international platform empowering young leaders through global exchange, leadership development, innovation, and community impact.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'hero_description', array(
		'label'   => esc_html__( 'Hero Description Text', 'bridgenova' ),
		'section' => 'bridgenova_hero_section',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'hero_bg_image', array(
		'default'           => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1800&auto=format&fit=crop',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_image', array(
		'label'       => esc_html__( 'Hero Background Image', 'bridgenova' ),
		'description' => esc_html__( 'Upload or replace the hero background image.', 'bridgenova' ),
		'section'     => 'bridgenova_hero_section',
	) ) );

	$wp_customize->add_setting( 'hero_btn1_text', array( 'default' => 'Join BRIDGE', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_btn1_text', array( 'label' => 'Button 1 Text (Gold)', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'hero_btn1_url', array( 'default' => '/registration/', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'hero_btn1_url', array( 'label' => 'Button 1 Link', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'hero_btn2_text', array( 'default' => 'Event Registration', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_btn2_text', array( 'label' => 'Button 2 Text (Outline)', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'hero_btn2_url', array( 'default' => '/event-registration/', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'hero_btn2_url', array( 'label' => 'Button 2 Link', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'hero_btn3_text', array( 'default' => 'Contact Us', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'hero_btn3_text', array( 'label' => 'Button 3 Text (Outline)', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'hero_btn3_url', array( 'default' => '/contact-us/', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'hero_btn3_url', array( 'label' => 'Button 3 Link', 'section' => 'bridgenova_hero_section', 'type' => 'text' ) );

	// ==========================================
	// 2. GLOBAL REACH / STATS COUNTERS
	// ==========================================
	$wp_customize->add_section( 'bridgenova_stats_section', array(
		'title'    => esc_html__( '2. Stats & Impact Counters', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 20,
	) );

	$stat_defaults = array(
		'stat_members'    => array( 'num' => '59', 'label' => 'Members' ),
		'stat_countries'  => array( 'num' => '11', 'label' => 'Countries' ),
		'stat_programs'   => array( 'num' => '10', 'label' => 'Programs' ),
		'stat_partners'   => array( 'num' => '20', 'label' => 'Partners' ),
	);

	foreach ( $stat_defaults as $key => $val ) {
		$wp_customize->add_setting( "{$key}_num", array( 'default' => $val['num'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "{$key}_num", array( 'label' => ucfirst( str_replace( 'stat_', '', $key ) ) . ' Number', 'section' => 'bridgenova_stats_section', 'type' => 'text' ) );

		$wp_customize->add_setting( "{$key}_label", array( 'default' => $val['label'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "{$key}_label", array( 'label' => ucfirst( str_replace( 'stat_', '', $key ) ) . ' Label', 'section' => 'bridgenova_stats_section', 'type' => 'text' ) );
	}

	// ==========================================
	// 3. ABOUT SECTION
	// ==========================================
	$wp_customize->add_section( 'bridgenova_about_section', array(
		'title'    => esc_html__( '3. About Section', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'about_eyebrow', array( 'default' => 'About BRIDGE', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'about_eyebrow', array( 'label' => 'Eyebrow', 'section' => 'bridgenova_about_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'about_title', array( 'default' => 'Building Bridges for a Better Future', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'about_title', array( 'label' => 'Title', 'section' => 'bridgenova_about_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'about_p1', array( 'default' => 'BRIDGE brings together ambitious individuals and organizations to exchange ideas, develop leadership, strengthen international cooperation, and create sustainable social impact.', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'about_p1', array( 'label' => 'Paragraph 1', 'section' => 'bridgenova_about_section', 'type' => 'textarea' ) );

	$wp_customize->add_setting( 'about_p2', array( 'default' => 'Our mission is to empower people with the knowledge, experiences, and global connections needed to lead positive change.', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'about_p2', array( 'label' => 'Paragraph 2', 'section' => 'bridgenova_about_section', 'type' => 'textarea' ) );

	// ==========================================
	// 4. SIX STRATEGIC PILLARS
	// ==========================================
	$wp_customize->add_section( 'bridgenova_pillars_section', array(
		'title'    => esc_html__( '4. Six Strategic Pillars', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 40,
	) );

	$pillars_default = array(
		1 => array( 't' => 'Leadership Development', 'd' => 'Workshops, mentoring programs, and practical training designed to equip emerging leaders with the skills, confidence, and ethical grounding to create meaningful impact in their communities.' ),
		2 => array( 't' => 'International Exchange', 'd' => 'Cross-border cultural exchange, study visits, and bilateral delegations connecting young leaders globally.' ),
		3 => array( 't' => 'Global Dialogue & Diplomacy', 'd' => 'Policy roundtables, international forums, and Model simulations fostering understanding on global issues.' ),
		4 => array( 't' => 'Innovation & Entrepreneurship', 'd' => 'Startup incubation, innovation labs, and mentorship turning youth-led ideas into sustainable ventures.' ),
		5 => array( 't' => 'Global Careers', 'd' => 'Internship pathways, career masterclasses, and global networks connecting students to high-impact career opportunities.' ),
		6 => array( 't' => 'Community Development', 'd' => 'Grassroots civic engagement, social action projects, and volunteer cohorts transforming local communities.' ),
	);

	foreach ( $pillars_default as $num => $p ) {
		$wp_customize->add_setting( "pillar_{$num}_title", array( 'default' => $p['t'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "pillar_{$num}_title", array( 'label' => "Pillar 0{$num} Title", 'section' => 'bridgenova_pillars_section', 'type' => 'text' ) );

		$wp_customize->add_setting( "pillar_{$num}_desc", array( 'default' => $p['d'], 'sanitize_callback' => 'wp_kses_post' ) );
		$wp_customize->add_control( "pillar_{$num}_desc", array( 'label' => "Pillar 0{$num} Description", 'section' => 'bridgenova_pillars_section', 'type' => 'textarea' ) );
	}

	// ==========================================
	// 5. FREQUENTLY ASKED QUESTIONS (FAQS)
	// ==========================================
	$wp_customize->add_section( 'bridgenova_faq_section', array(
		'title'       => esc_html__( '5. Frequently Asked Questions (FAQ)', 'bridgenova' ),
		'panel'       => 'bridgenova_options',
		'priority'    => 50,
		'description' => esc_html__( 'Edit questions and answers. Leave question empty to hide an item.', 'bridgenova' ),
	) );

	$faq_defaults = array(
		1 => array(
			'q' => 'Who can join BRIDGE?',
			'a' => 'BRIDGE welcomes students, young professionals, institutions, and organizations. Membership is organized into tiers — Explorer (15–18), Member (18–30), Professional Member (25–40), Institutional Member (for organizations), and Ambassador (by invitation) — so there is a path in regardless of where you are starting from.',
		),
		2 => array(
			'q' => 'How do I register for BRIDGE or an event?',
			'a' => 'Membership uses our Registration page. To attend a specific event, use the Event Registration page linked from that event\'s card above. Our team follows up by email once your submission is received.',
		),
		3 => array(
			'q' => 'What are the Six Strategic Pillars?',
			'a' => 'Leadership Development, International Exchange, Global Dialogue, Entrepreneurship, Global Careers, and Community Development. Every BRIDGE program, event, and service is organized under one or more of these pillars.',
		),
		4 => array(
			'q' => 'Where are BRIDGE events held?',
			'a' => 'BRIDGE is launching from Islamabad, Pakistan, with events planned at provincial and university chapters first, expanding to international venues over time. Specific venues are announced on each event listing as details are confirmed.',
		),
		5 => array(
			'q' => 'Can my organization or university partner with BRIDGE?',
			'a' => 'Yes. BRIDGE partners with academic and research institutions, and international and cultural organizations, through research collaborations, student exchange, forums, and joint programs. Visit our Partners page or use the contact form to start the conversation.',
		),
		6 => array(
			'q' => 'Is there a cost to join?',
			'a' => 'Registering with BRIDGE is free. Specific programs or events may carry their own fees, which will always be clearly stated before you commit.',
		),
		7 => array(
			'q' => 'How can I stay updated on new programs and events?',
			'a' => 'Follow our verified social media channels (LinkedIn, Instagram, Facebook, YouTube) and register your email to receive our monthly newsletter.',
		),
		8 => array(
			'q' => 'Can I volunteer or lead a local BRIDGE chapter?',
			'a' => 'Yes! We actively welcome volunteers, mentors, and campus ambassadors. Submit your interest via the Registration page selecting the Community or Explorer tier.',
		),
	);

	foreach ( $faq_defaults as $num => $faq ) {
		$wp_customize->add_setting( "faq_{$num}_q", array( 'default' => $faq['q'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( "faq_{$num}_q", array( 'label' => "FAQ #{$num} Question", 'section' => 'bridgenova_faq_section', 'type' => 'text' ) );

		$wp_customize->add_setting( "faq_{$num}_a", array( 'default' => $faq['a'], 'sanitize_callback' => 'wp_kses_post' ) );
		$wp_customize->add_control( "faq_{$num}_a", array( 'label' => "FAQ #{$num} Answer", 'section' => 'bridgenova_faq_section', 'type' => 'textarea' ) );
	}

	// ==========================================
	// 6. CONTACT & SOCIAL INFO
	// ==========================================
	$wp_customize->add_section( 'bridgenova_contact_section', array(
		'title'    => esc_html__( '6. Contact & Social Info', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 60,
	) );

	$wp_customize->add_setting( 'contact_email', array( 'default' => 'info@bridgenova.info', 'sanitize_callback' => 'sanitize_email' ) );
	$wp_customize->add_control( 'contact_email', array( 'label' => 'Contact Email Address', 'section' => 'bridgenova_contact_section', 'type' => 'email' ) );

	$wp_customize->add_setting( 'contact_phone', array( 'default' => '+92 (51) 123-4567', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'contact_phone', array( 'label' => 'Contact Phone Number', 'section' => 'bridgenova_contact_section', 'type' => 'text' ) );

	$wp_customize->add_setting( 'contact_location', array( 'default' => 'Islamabad, Pakistan', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'contact_location', array( 'label' => 'Office Location / Address', 'section' => 'bridgenova_contact_section', 'type' => 'text' ) );

	$social_networks = array(
		'social_facebook'  => 'Facebook URL',
		'social_instagram' => 'Instagram URL',
		'social_linkedin'  => 'LinkedIn URL',
		'social_youtube'   => 'YouTube URL',
		'social_twitter'   => 'Twitter / X URL',
	);

	foreach ( $social_networks as $id => $label ) {
		$wp_customize->add_setting( $id, array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'bridgenova_contact_section', 'type' => 'url' ) );
	}

	// ==========================================
	// 7. FOOTER SETTINGS
	// ==========================================
	$wp_customize->add_section( 'bridgenova_footer_section', array(
		'title'    => esc_html__( '7. Footer & Copyright', 'bridgenova' ),
		'panel'    => 'bridgenova_options',
		'priority' => 70,
	) );

	$wp_customize->add_setting( 'footer_description', array(
		'default'           => 'Building Relationships for International Dialogue and Global Engagement. Empowering young leaders through global exchange, leadership development, innovation, and community impact.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'footer_description', array(
		'label'   => esc_html__( 'Footer Brand Summary', 'bridgenova' ),
		'section' => 'bridgenova_footer_section',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'footer_copyright', array(
		'default'           => 'BRIDGE. All Rights Reserved.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'footer_copyright', array(
		'label'   => esc_html__( 'Copyright Line', 'bridgenova' ),
		'section' => 'bridgenova_footer_section',
		'type'    => 'text',
	) );
}
add_action( 'customize_register', 'bridgenova_customize_register' );
endif;

/**
 * Selective Refresh Callbacks
 */
function bridgenova_customize_partial_blogname() {
	bloginfo( 'name' );
}

function bridgenova_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

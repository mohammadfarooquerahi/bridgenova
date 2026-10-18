<?php
/**
 * BridgeNova functions and definitions
 *
 * @package BridgeNova
 */

if ( ! defined( 'BRIDGENOVA_VERSION' ) ) {
	define( 'BRIDGENOVA_VERSION', '1.0.6' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function bridgenova_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'bridgenova' ),
			'footer'  => esc_html__( 'Footer Menu', 'bridgenova' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bridgenova_setup' );

/**
 * Register widget area.
 */
function bridgenova_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'bridgenova' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'bridgenova' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'bridgenova' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'bridgenova' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'bridgenova' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'bridgenova' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bridgenova_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bridgenova_scripts() {
	// Google Fonts
	wp_enqueue_style( 'bridgenova-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Slab:wght@300;400;500;700&display=swap', array(), null );

	// Theme Styles
	wp_enqueue_style( 'bridgenova-style', get_stylesheet_uri(), array(), BRIDGENOVA_VERSION );
	wp_enqueue_style( 'bridgenova-main', get_template_directory_uri() . '/assets/css/main.css', array(), BRIDGENOVA_VERSION );

	// Theme Scripts
	wp_enqueue_script( 'bridgenova-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), BRIDGENOVA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'bridgenova_scripts' );

/**
 * Register Custom Post Types
 */
function bridgenova_register_cpt() {
	// Bridge Event
	register_post_type( 'bridge_event', array(
		'labels' => array(
			'name' => __( 'Events', 'bridgenova' ),
			'singular_name' => __( 'Event', 'bridgenova' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon' => 'dashicons-calendar',
	) );

	// Bridge Team
	register_post_type( 'bridge_team', array(
		'labels' => array(
			'name' => __( 'Team', 'bridgenova' ),
			'singular_name' => __( 'Team Member', 'bridgenova' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-groups',
	) );

	// Bridge Testimonial
	register_post_type( 'bridge_testimonial', array(
		'labels' => array(
			'name' => __( 'Testimonials', 'bridgenova' ),
			'singular_name' => __( 'Testimonial', 'bridgenova' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-format-quote',
	) );

	// Bridge Partner
	register_post_type( 'bridge_partner', array(
		'labels' => array(
			'name' => __( 'Partners', 'bridgenova' ),
			'singular_name' => __( 'Partner', 'bridgenova' )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'thumbnail' ),
		'menu_icon' => 'dashicons-networking',
	) );
}
add_action( 'init', 'bridgenova_register_cpt' );

/**
 * Custom Walker Menu Class
 */
class BridgeNova_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu sub-menu\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'nav-item';
		
		if ( in_array( 'menu-item-has-children', $classes ) ) {
			$classes[] = 'has-dropdown';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= $indent . '<li' . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$atts['class']  = ( $depth === 0 ) ? 'nav-link' : 'dropdown-link';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		if ( in_array( 'menu-item-has-children', $classes ) && $depth === 0 ) {
			$item_output .= ' <span class="dropdown-arrow">▼</span>';
		}
		$item_output .= '</a>';
		
		if ( in_array( 'menu-item-has-children', $classes ) ) {
			$item_output .= '<button type="button" class="nav-dropdown-trigger" aria-expanded="false" aria-label="Toggle sub-menu"><span class="screen-reader-text">Toggle sub-menu</span></button>';
		}
		
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


/**
 * Fallback menu when no menu is assigned
 */
function bridgenova_fallback_menu() {
	echo '<ul class="nav-menu-list">';
	echo '<li class="nav-item"><a href="' . esc_url( home_url( '/' ) ) . '" class="nav-link">HOME</a></li>';
	echo '<li class="nav-item has-dropdown">';
	echo '<a href="' . esc_url( home_url( '/about-us/' ) ) . '" class="nav-link">ABOUT <span class="dropdown-arrow">▼</span></a>';
	echo '<ul class="dropdown-menu">';
	echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">About BRIDGE</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/gallery-2/' ) ) . '">Gallery</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/our-team/' ) ) . '">Our Team</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/partners/' ) ) . '">Partners</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/speakers/' ) ) . '">Speakers</a></li>';
	echo '</ul></li>';
	echo '<li class="nav-item has-dropdown">';
	echo '<a href="' . esc_url( home_url( '/services/' ) ) . '" class="nav-link">WHAT WE DO <span class="dropdown-arrow">▼</span></a>';
	echo '<ul class="dropdown-menu">';
	echo '<li><a href="' . esc_url( home_url( '/events-bridge/' ) ) . '">Events</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
	echo '</ul></li>';
	echo '<li class="nav-item has-dropdown">';
	echo '<a href="' . esc_url( home_url( '/registration/' ) ) . '" class="nav-link">GET INVOLVED <span class="dropdown-arrow">▼</span></a>';
	echo '<ul class="dropdown-menu">';
	echo '<li><a href="' . esc_url( home_url( '/registration/' ) ) . '">Registration</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/event-registration/' ) ) . '">Event Registration</a></li>';
	echo '</ul></li>';
	echo '<li class="nav-item"><a href="' . esc_url( home_url( '/contact-us/' ) ) . '" class="nav-link">CONTACT US</a></li>';
	echo '</ul>';
}

/**
 * AJAX Contact Form Handler
 */
function bridgenova_handle_contact_form() {
	check_ajax_referer( 'bridgenova_contact_nonce', 'nonce' );

	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
	}

	$to      = get_option( 'admin_email' );
	$headers = array( 'Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );
	$body    = sprintf(
		'<p><strong>Name:</strong> %s</p><p><strong>Email:</strong> %s</p><p><strong>Subject:</strong> %s</p><p><strong>Message:</strong></p><p>%s</p>',
		esc_html( $name ),
		esc_html( $email ),
		esc_html( $subject ),
		nl2br( esc_html( $message ) )
	);

	$sent = wp_mail( $to, 'Contact Form: ' . $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => 'Your message has been sent successfully!' ) );
	} else {
		wp_send_json_error( array( 'message' => 'There was an error sending your message. Please try again.' ) );
	}
}
add_action( 'wp_ajax_bridgenova_contact', 'bridgenova_handle_contact_form' );
add_action( 'wp_ajax_nopriv_bridgenova_contact', 'bridgenova_handle_contact_form' );

/**
 * Localize script with AJAX URL and nonce
 */
function bridgenova_localize_scripts() {
	wp_localize_script( 'bridgenova-main-js', 'bridgenovaAjax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'bridgenova_contact_nonce' ),
		'homeUrl' => home_url( '/' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'bridgenova_localize_scripts' );

/**
 * Auto-Setup Required Pages & Static Front Page on Theme Activation/Init
 */
function bridgenova_auto_setup_pages() {
	$setup_ver = get_option( 'bridgenova_setup_version' );
	if ( $setup_ver === '1.0.6' && ! isset( $_GET['bridgenova_setup'] ) ) {
		return;
	}

	$pages = array(
		'home' => array(
			'title'    => 'Home',
			'template' => 'front-page.php',
			'is_front' => true,
		),
		'services' => array(
			'title'    => 'Services',
			'template' => 'page-services.php',
		),
		'about-us' => array(
			'title'    => 'About Us',
			'template' => 'page-about-us.php',
		),
		'about' => array(
			'title'    => 'About',
			'template' => 'page-about.php',
		),
		'contact-us' => array(
			'title'    => 'Contact Us',
			'template' => 'page-contact-us.php',
		),
		'contact' => array(
			'title'    => 'Contact',
			'template' => 'page-contact.php',
		),
		'our-team' => array(
			'title'    => 'Our Team',
			'template' => 'page-our-team.php',
		),
		'partners' => array(
			'title'    => 'Partners',
			'template' => 'page-partners.php',
		),
		'speakers' => array(
			'title'    => 'Speakers',
			'template' => 'page-speakers.php',
		),
		'gallery-2' => array(
			'title'    => 'Gallery',
			'template' => 'page-gallery-2.php',
		),
		'gallery' => array(
			'title'    => 'Gallery',
			'template' => 'page-gallery.php',
		),
		'events-bridge' => array(
			'title'    => 'Events',
			'template' => 'page-events-bridge.php',
		),
		'events' => array(
			'title'    => 'Events',
			'template' => 'page-events.php',
		),
		'registration' => array(
			'title'    => 'Registration',
			'template' => 'page-registration.php',
		),
		'event-registration' => array(
			'title'    => 'Event Registration',
			'template' => 'page-event-registration.php',
		),
	);

	$home_id = 0;

	foreach ( $pages as $slug => $data ) {
		$existing = get_page_by_path( $slug, OBJECT, 'page' );
		if ( ! $existing ) {
			$found = get_posts( array(
				'name'        => $slug,
				'post_type'   => 'page',
				'post_status' => 'any',
				'numberposts' => 1,
			) );
			if ( ! empty( $found ) ) {
				$existing = $found[0];
			}
		}

		if ( ! $existing ) {
			$page_id = wp_insert_post( array(
				'post_title'     => $data['title'],
				'post_name'      => $slug,
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'comment_status' => 'closed',
			) );
			if ( $page_id && ! is_wp_error( $page_id ) ) {
				update_post_meta( $page_id, '_wp_page_template', $data['template'] );
				if ( ! empty( $data['is_front'] ) ) {
					$home_id = $page_id;
				}
			}
		} else {
			if ( $existing->post_status !== 'publish' ) {
				wp_update_post( array( 'ID' => $existing->ID, 'post_status' => 'publish' ) );
			}
			update_post_meta( $existing->ID, '_wp_page_template', $data['template'] );
			if ( ! empty( $data['is_front'] ) ) {
				$home_id = $existing->ID;
			}
		}
	}

	if ( $home_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_id );
	}

	// 2. Programmatically create and assign the BridgeNova Primary Menu matching the reference site exactly
	$menu_name = 'BridgeNova Primary Menu';
	$menu_obj  = wp_get_nav_menu_object( $menu_name );

	if ( ! $menu_obj ) {
		$menu_id = wp_create_nav_menu( $menu_name );
	} else {
		$menu_id = $menu_obj->term_id;
	}

	if ( $menu_id && ! is_wp_error( $menu_id ) ) {
		$existing_items = wp_get_nav_menu_items( $menu_id );
		if ( empty( $existing_items ) ) {
			// Item 1: HOME
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'HOME',
				'menu-item-url'    => home_url( '/' ),
				'menu-item-status' => 'publish',
				'menu-item-type'   => 'custom',
			) );

			// Item 2: ABOUT (parent)
			$about_id = wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'ABOUT',
				'menu-item-url'    => home_url( '/about-us/' ),
				'menu-item-status' => 'publish',
				'menu-item-type'   => 'custom',
			) );

			// ABOUT Children
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'About BRIDGE',
				'menu-item-url'       => home_url( '/about-us/' ),
				'menu-item-parent-id' => $about_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Gallery',
				'menu-item-url'       => home_url( '/gallery-2/' ),
				'menu-item-parent-id' => $about_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Our Team',
				'menu-item-url'       => home_url( '/our-team/' ),
				'menu-item-parent-id' => $about_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Partners',
				'menu-item-url'       => home_url( '/partners/' ),
				'menu-item-parent-id' => $about_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Speakers',
				'menu-item-url'       => home_url( '/speakers/' ),
				'menu-item-parent-id' => $about_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			// Item 3: WHAT WE DO (parent)
			$what_id = wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'WHAT WE DO',
				'menu-item-url'    => home_url( '/services/' ),
				'menu-item-status' => 'publish',
				'menu-item-type'   => 'custom',
			) );

			// WHAT WE DO Children
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Events',
				'menu-item-url'       => home_url( '/events-bridge/' ),
				'menu-item-parent-id' => $what_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Services',
				'menu-item-url'       => home_url( '/services/' ),
				'menu-item-parent-id' => $what_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			// Item 4: GET INVOLVED (parent)
			$get_id = wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'GET INVOLVED',
				'menu-item-url'    => home_url( '/registration/' ),
				'menu-item-status' => 'publish',
				'menu-item-type'   => 'custom',
			) );

			// GET INVOLVED Children
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Registration',
				'menu-item-url'       => home_url( '/registration/' ),
				'menu-item-parent-id' => $get_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'     => 'Event Registration',
				'menu-item-url'       => home_url( '/event-registration/' ),
				'menu-item-parent-id' => $get_id,
				'menu-item-status'    => 'publish',
				'menu-item-type'      => 'custom',
			) );

			// Item 5: CONTACT US
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'CONTACT US',
				'menu-item-url'    => home_url( '/contact-us/' ),
				'menu-item-status' => 'publish',
				'menu-item-type'   => 'custom',
			) );
		}

		// Auto-assign to primary location if unassigned or assigned to demo one-page menu
		$locations = get_theme_mod( 'nav_menu_locations', array() );
		$reassign  = false;
		if ( empty( $locations['primary'] ) ) {
			$reassign = true;
		} else {
			$curr_menu = wp_get_nav_menu_object( $locations['primary'] );
			if ( ! $curr_menu ) {
				$reassign = true;
			} else {
				$curr_items = wp_get_nav_menu_items( $curr_menu->term_id );
				if ( ! empty( $curr_items ) ) {
					foreach ( $curr_items as $item ) {
						if ( strpos( $item->url, '#services' ) !== false || strpos( $item->url, '#why-us' ) !== false || strpos( $item->url, '#reviews' ) !== false ) {
							$reassign = true;
							break;
						}
					}
				}
			}
		}

		if ( $reassign ) {
			$locations['primary'] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}
	}

	update_option( 'permalink_structure', '/%postname%/' );
	flush_rewrite_rules( true );
	update_option( 'bridgenova_setup_version', '1.0.6' );
}
add_action( 'init', 'bridgenova_auto_setup_pages' );
add_action( 'after_switch_theme', 'bridgenova_auto_setup_pages' );

/**
 * Universal Fail-Safe Router: Intercept any slug request and ensure the template loads (Never 404)
 */
function bridgenova_fail_safe_router( $template ) {
	if ( is_admin() ) {
		return $template;
	}

	$routes = array(
		'services'           => 'page-services.php',
		'about-us'           => 'page-about-us.php',
		'about'              => 'page-about.php',
		'contact-us'         => 'page-contact-us.php',
		'contact'            => 'page-contact.php',
		'our-team'           => 'page-our-team.php',
		'team'               => 'page-our-team.php',
		'partners'           => 'page-partners.php',
		'speakers'           => 'page-speakers.php',
		'gallery-2'          => 'page-gallery-2.php',
		'gallery'            => 'page-gallery.php',
		'events-bridge'      => 'page-events-bridge.php',
		'events'             => 'page-events.php',
		'registration'       => 'page-registration.php',
		'event-registration' => 'page-event-registration.php',
	);

	// Case 1: Standard query has a resolved post
	if ( is_page() ) {
		global $post;
		if ( $post && isset( $routes[ $post->post_name ] ) ) {
			$target = get_template_directory() . '/' . $routes[ $post->post_name ];
			if ( file_exists( $target ) ) {
				return $target;
			}
		}
	}

	// Case 2: Query param like ?pagename=services or ?name=services
	if ( ! empty( $_GET['pagename'] ) && isset( $routes[ strtolower( $_GET['pagename'] ) ] ) ) {
		$target = get_template_directory() . '/' . $routes[ strtolower( $_GET['pagename'] ) ];
		if ( file_exists( $target ) ) {
			global $wp_query;
			$wp_query->is_404 = false;
			status_header( 200 );
			return $target;
		}
	}

	// Case 3: URL slug match (even if WP thought it was 404 or permalinks are default)
	$path = trim( parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	$segments = explode( '/', $path );
	$slug = strtolower( end( $segments ) );

	if ( isset( $routes[ $slug ] ) ) {
		$target = get_template_directory() . '/' . $routes[ $slug ];
		if ( file_exists( $target ) ) {
			global $wp_query;
			$wp_query->is_404 = false;
			status_header( 200 );
			return $target;
		}
	}

	return $template;
}
add_filter( 'template_include', 'bridgenova_fail_safe_router', 99 );

/**
 * Direct Admin Menu Shortcut to Theme Customizer Options
 */
function bridgenova_add_theme_admin_menu() {
	add_theme_page(
		__( 'BridgeNova Theme Options', 'bridgenova' ),
		__( 'Theme Options (Edit All Sections)', 'bridgenova' ),
		'edit_theme_options',
		'customize.php?autofocus[panel]=bridgenova_options'
	);
}
add_action( 'admin_menu', 'bridgenova_add_theme_admin_menu' );

/**
 * Load required files
 */
if ( file_exists( get_template_directory() . '/inc/template-functions.php' ) ) {
	require get_template_directory() . '/inc/template-functions.php';
}

if ( file_exists( get_template_directory() . '/inc/customizer.php' ) ) {
	require get_template_directory() . '/inc/customizer.php';
}

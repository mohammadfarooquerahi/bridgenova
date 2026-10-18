<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package BridgeNova
 */

if ( ! function_exists( 'bridgenova_get_social_links' ) ) :
	/**
	 * Returns an array of social links.
	 */
	function bridgenova_get_social_links() {
		$social_networks = array(
			'facebook'  => get_theme_mod( 'social_facebook' ),
			'instagram' => get_theme_mod( 'social_instagram' ),
			'linkedin'  => get_theme_mod( 'social_linkedin' ),
			'youtube'   => get_theme_mod( 'social_youtube' ),
		);

		return array_filter( $social_networks );
	}
endif;

if ( ! function_exists( 'bridgenova_breadcrumb' ) ) :
	/**
	 * Outputs breadcrumb HTML.
	 */
	function bridgenova_breadcrumb() {
		if ( is_front_page() || is_home() ) {
			return;
		}

		echo '<nav class="bridgenova-breadcrumbs" aria-label="breadcrumb">';
		echo '<ol class="breadcrumb">';
		echo '<li class="breadcrumb-item"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'bridgenova' ) . '</a></li>';

		if ( is_category() || is_single() ) {
			echo '<li class="breadcrumb-item">';
			the_category( ' &bull; ' );
			echo '</li>';
			if ( is_single() ) {
				echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
			}
		} elseif ( is_page() ) {
			echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
		} elseif ( is_search() ) {
			echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html__( 'Search Results', 'bridgenova' ) . '</li>';
		}

		echo '</ol>';
		echo '</nav>';
	}
endif;

if ( ! function_exists( 'bridgenova_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function bridgenova_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'bridgenova' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'bridgenova_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function bridgenova_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'bridgenova' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

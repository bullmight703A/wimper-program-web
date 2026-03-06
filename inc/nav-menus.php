<?php
/**
 * Navigation Menus with Tailwind Support
 *
 * @package wimper-theme
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Register navigation menus
 */
function wimper_register_menus()
{
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'wimper-theme'),
		'footer' => __('Footer Menu', 'wimper-theme'),
		'footer_contact' => __('Footer Contact Menu', 'wimper-theme'),
	));
}
add_action('init', 'wimper_register_menus');

/**
 * Primary Navigation with Tailwind classes
 */
function wimper_primary_nav()
{
	wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => false,
		'menu_class' => '',
		'fallback_cb' => 'wimper_primary_nav_fallback',
		'items_wrap' => '%3$s',
		'depth' => 1,
		'walker' => new wimper_primary_nav_walker(),
	));
}

/**
 * Primary Nav Fallback
 */
function wimper_primary_nav_fallback()
{
	$pages = array(
		'programs' => 'Programs',
		'locations' => 'Locations',
		'about' => 'About Us',
		'contact-us' => 'Contact'
	);

	foreach ($pages as $slug => $title) {
		$url = wimper_get_page_link($slug);
		echo '<a href="' . esc_url($url) . '" class="hover:text-wimper-blue transition">' . esc_html($title) . '</a>';
	}
}

/**
 * Footer Navigation
 */
function wimper_footer_nav()
{
	wp_nav_menu(array(
		'theme_location' => 'footer',
		'container' => false,
		'menu_class' => '',
		'fallback_cb' => 'wimper_footer_nav_fallback',
		'items_wrap' => '%3$s',
		'depth' => 1,
		'walker' => new wimper_footer_nav_walker(),
	));
}

/**
 * Footer Nav Fallback
 */
function wimper_footer_nav_fallback()
{
	$pages = array(
		'home' => 'Home',
		'programs' => 'All Programs',
		'parents' => 'Parents'
	);

	foreach ($pages as $slug => $title) {
		$url = ($slug === 'home') ? home_url('/') : home_url('/' . $slug . '/');
		echo '<a href="' . esc_url($url) . '" class="block hover:text-white transition">' . esc_html($title) . '</a>';
	}
}

/**
 * Footer Contact Navigation
 */
function wimper_footer_contact_nav()
{
	if (has_nav_menu('footer_contact')) {
		wp_nav_menu(array(
			'theme_location' => 'footer_contact',
			'container' => false,
			'menu_class' => 'mt-4 space-y-2 pt-4 border-t border-white/10',
			'fallback_cb' => false,
			'items_wrap' => '<div class="%2$s">%3$s</div>',
			'depth' => 1,
			'walker' => new wimper_footer_nav_walker(),
		));
	} else {
		$program_slug = wimper_get_program_base_slug();
		$pages = array(
			$program_slug => 'Programs',
			'locations' => 'Locations',
			'about' => 'About Us',
			'contact-us' => 'Contact',
		);

		foreach ($pages as $slug => $title) {
			$url = home_url('/' . $slug . '/');
			echo '<a href="' . esc_url($url) . '" class="block hover:text-white transition">' . esc_html($title) . '</a>';
		}
	}
}

/**
 * Custom Walker for Primary Navigation
 */
class wimper_primary_nav_walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$classes = 'hover:text-wimper-blue transition';

		if ($item->current) {
			$classes .= ' text-wimper-red';
		}

		$url = $item->url;
		// Enforce trailing slash for internal links
		if (strpos($url, home_url()) !== false) {
			$parts = explode('#', $url, 2);
			$path = user_trailingslashit($parts[0]);
			$url = $path . (isset($parts[1]) ? '#' . $parts[1] : '');
		}

		$output .= '<a href="' . esc_url($url) . '" class="' . esc_attr($classes) . '">';
		$output .= esc_html($item->title);
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		// No closing tag needed as we are not using li
	}
}

/**
 * Custom Walker for Footer Navigation
 */
class wimper_footer_nav_walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$url = $item->url;
		// Enforce trailing slash for internal links
		if (strpos($url, home_url()) !== false) {
			$parts = explode('#', $url, 2);
			$path = user_trailingslashit($parts[0]);
			$url = $path . (isset($parts[1]) ? '#' . $parts[1] : '');
		}

		$output .= '<a href="' . esc_url($url) . '" class="block hover:text-white transition">';
		$output .= esc_html($item->title);
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		// No closing tag needed as we are not using li
	}
}

/**
 * Mobile Navigation
 */
function wimper_mobile_nav()
{
	wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => false,
		'menu_class' => 'flex flex-col space-y-2',
		'fallback_cb' => 'wimper_mobile_nav_fallback',
		'items_wrap' => '%3$s',
		'depth' => 1,
		'walker' => new wimper_mobile_nav_walker(),
	));
}

/**
 * Mobile Nav Fallback
 */
function wimper_mobile_nav_fallback()
{
	$pages = array($program_slug, "curriculum", "schedule", "locations", "faq");
	foreach ($pages as $slug) {
		echo '<a href="#' . esc_attr($slug) . '" class="block py-3 border-b border-brand-ink/5 text-lg font-semibold text-brand-ink hover:text-wimper-blue transition">' . esc_html(ucwords(str_replace('-', ' ', $slug))) . '</a>';
	}
}

/**
 * Custom Walker for Mobile Navigation
 */
class wimper_mobile_nav_walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
		// No submenu wrapper needed
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$classes = 'block py-3 border-b border-brand-ink/5 text-lg font-semibold text-brand-ink hover:text-wimper-blue transition';

		if ($item->current) {
			$classes .= ' text-wimper-blue';
		}

		$url = $item->url;
		// Enforce trailing slash for internal links
		if (strpos($url, home_url()) !== false) {
			$parts = explode('#', $url, 2);
			$path = user_trailingslashit($parts[0]);
			$url = $path . (isset($parts[1]) ? '#' . $parts[1] : '');
		}

		$output .= '<a href="' . esc_url($url) . '" class="' . esc_attr($classes) . '">';
		$output .= esc_html($item->title);
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		// No closing tag needed as we are not using li
	}
}

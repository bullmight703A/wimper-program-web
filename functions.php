<?php
/**
 * WIMPER Theme Functions
 *
 * Homepage Template: front-page.php (WordPress default)
 *
 * @package wimper_Theme
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Increase Memory Limit
 */
@ini_set('memory_limit', '256M');

/**
 * Define theme constants
 */
define('WIMPER_VERSION', '1.2.0');
define('WIMPER_THEME_DIR', get_template_directory());
define('WIMPER_THEME_URI', get_template_directory_uri());

/**
 * Load core theme functionality
 */

// Core setup and configuration
require_once WIMPER_THEME_DIR . '/inc/setup.php';
require_once WIMPER_THEME_DIR . '/inc/enqueue.php';
require_once WIMPER_THEME_DIR . '/inc/nav-menus.php';
require_once WIMPER_THEME_DIR . '/inc/template-tags.php';
require_once WIMPER_THEME_DIR . '/inc/fix-alt-text.php';

/**
 * Remove Gutenberg Block Library CSS on Frontend
 * This theme doesn't use Gutenberg blocks, so we can remove these render-blocking styles
 */
function wimper_remove_block_library_css()
{
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-blocks-style');
        wp_dequeue_style('global-styles');
        wp_dequeue_style('wp-block-navigation');
        wp_dequeue_style('classic-theme-styles');
    }
}
add_action('wp_enqueue_scripts', 'wimper_remove_block_library_css', 100);

/**
 * Add CORS Headers for Font Files
 */
function wimper_add_cors_headers()
{
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    if (preg_match('/\.(woff2?|ttf|otf|eot)$/i', $request_uri)) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    }
}
add_action('send_headers', 'wimper_add_cors_headers');

/**
 * Lazy Load LeadConnector Widget
 */
function wimper_lazy_load_leadconnector()
{
    ?>
    <script>
        (function () {
            var loaded = false;
            var loadWidget = function () {
                if (loaded) return;
                loaded = true;
                var script = document.createElement('script');
                script.src = 'https://widgets.leadconnectorhq.com/loader.js';
                script.setAttribute('data-resources-url', 'https://widgets.leadconnectorhq.com/chat-widget/loader.js');
                script.async = true;
                document.body.appendChild(script);
            };

            var isMobile = window.innerWidth < 768;
            if (isMobile) {
                setTimeout(loadWidget, 3500);
                var events = ['mousedown', 'touchstart', 'keydown', 'scroll'];
                events.forEach(function (event) {
                    window.addEventListener(event, loadWidget, { once: true, passive: true });
                });
            } else {
                setTimeout(loadWidget, 100);
            }
        })();
    </script>
    </script>
    <?php
}
add_action('wp_footer', 'wimper_lazy_load_leadconnector', 999);

/**
 * Add Theme Support for Document Title
 */
function wimper_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wimper_theme_support');

/**
 * Inject FinancialService JSON-LD Schema
 */
function wimper_inject_financial_schema()
{
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FinancialService',
            'name' => 'WIMPER Financial Architecture',
            'url' => home_url('/'),
            'description' => 'The W.I.M.P.E.R. Program is a proprietary Section 125/105 chassis that engineers EBITDA expansion through FICA tax savings.',
            'areaServed' => 'United States',
            'offers' => array(
                '@type' => 'Offer',
                'name' => 'Section 125 Financial Strategy',
                'description' => 'FICA tax reduction and EBITDA recapture consulting.',
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'wimper_inject_financial_schema');

/**
 * Optimize Native WordPress XML Sitemaps (SEO Cleanup)
 * Remove 'users' and 'taxonomies' (tags/categories) to prevent sitemap bloat.
 */
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
    if (in_array($name, array('users', 'taxonomies'))) {
        return false;
    }
    return $provider;
}, 10, 2);

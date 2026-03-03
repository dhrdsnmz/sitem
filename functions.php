<?php

/**
 * lawgist theme functions and definitions
 */
// File Security Check
if (!defined('ABSPATH')) {
    exit;
}
/**
 * lawgist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lawgist
 */
if (!function_exists('lawgist_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lawgist_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on lawgist, use a find and replace
         * to change 'lawgist' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lawgist', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'lawgist'),
            )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
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
        // Set up the WordPress core custom background feature.
        $args = apply_filters(
            'lawgist_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        );
        add_theme_support('custom-background', $args);
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'lawgist_setup');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lawgist_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('lawgist_content_width', 1200);
}
add_action('after_setup_theme', 'lawgist_content_width', 0);



/**
 *
 * Intialize lawgist
 *
 */
require trailingslashit(get_template_directory()) . 'inc/init.php';

/**
 * Randevu Sistemi
 */
function lawgist_randevu_scripts() {
    wp_enqueue_style('randevu-css', get_template_directory_uri() . '/assets/css/randevu.css', array(), '1.0');
    wp_enqueue_script('randevu-js', get_template_directory_uri() . '/assets/js/randevu.js', array('jquery'), '1.0', true);
    wp_localize_script('randevu-js', 'randevuAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('randevu_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'lawgist_randevu_scripts');

function lawgist_randevu_isle() {
    check_ajax_referer('randevu_nonce', 'nonce');

    $ad_soyad = sanitize_text_field($_POST['ad_soyad'] ?? '');
    $telefon  = sanitize_text_field($_POST['telefon']  ?? '');
    $konu     = sanitize_text_field($_POST['konu']     ?? '');
    $tarih    = sanitize_text_field($_POST['tarih']    ?? '');
    $saat     = sanitize_text_field($_POST['saat']     ?? '');

    if (!$ad_soyad || !$telefon || !$konu || !$tarih || !$saat) {
        wp_send_json_error(array('message' => 'Eksik bilgi.'));
    }

    $to      = 'info@yakuthukuk.com.tr';
    $subject = 'Yeni Randevu Talebi: ' . $ad_soyad;
    $message = '
    <html><body style="font-family:Arial,sans-serif;color:#333;">
    <h2 style="color:#8B6914;">Yeni Randevu Talebi</h2>
    <table style="width:100%;border-collapse:collapse;">
        <tr><td style="padding:8px;border-bottom:1px solid #eee;font-weight:bold;">Ad Soyad</td><td style="padding:8px;border-bottom:1px solid #eee;">' . esc_html($ad_soyad) . '</td></tr>
        <tr><td style="padding:8px;border-bottom:1px solid #eee;font-weight:bold;">Telefon</td><td style="padding:8px;border-bottom:1px solid #eee;">' . esc_html($telefon) . '</td></tr>
        <tr><td style="padding:8px;border-bottom:1px solid #eee;font-weight:bold;">Danışmanlık Konusu</td><td style="padding:8px;border-bottom:1px solid #eee;">' . esc_html($konu) . '</td></tr>
        <tr><td style="padding:8px;border-bottom:1px solid #eee;font-weight:bold;">Randevu Tarihi</td><td style="padding:8px;border-bottom:1px solid #eee;">' . esc_html($tarih) . '</td></tr>
        <tr><td style="padding:8px;font-weight:bold;">Randevu Saati</td><td style="padding:8px;">' . esc_html($saat) . '</td></tr>
    </table>
    </body></html>';

    $headers = array('Content-Type: text/html; charset=UTF-8');
    $gonderildi = wp_mail($to, $subject, $message, $headers);

    if ($gonderildi) {
        wp_send_json_success(array('message' => 'Randevu oluşturuldu.'));
    } else {
        wp_send_json_error(array('message' => 'Mail gönderilemedi.'));
    }
}
add_action('wp_ajax_randevu_gonder', 'lawgist_randevu_isle');
add_action('wp_ajax_nopriv_randevu_gonder', 'lawgist_randevu_isle');
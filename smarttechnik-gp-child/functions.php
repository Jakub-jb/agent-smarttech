<?php
/**
 * smartTechnik GP Child functions and definitions.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;

require_once get_stylesheet_directory() . '/inc/setup.php';
require_once get_stylesheet_directory() . '/inc/navwalker.php';
require_once get_stylesheet_directory() . '/inc/meta-tags.php';
require_once get_stylesheet_directory() . '/inc/schema-localbusiness.php';

if ( ! function_exists( 'smarttechnik_menu_fallback' ) ) {
    /**
     * Fallback navigation markup showing top-level pages when no menu is assigned.
     */
function smarttechnik_menu_fallback() {
        $links = array(
            '/'                         => __( 'Startseite', 'smarttechnik-gp-child' ),
            '/leistungen'               => __( 'Leistungen', 'smarttechnik-gp-child' ),
            '/referenzen'               => __( 'Referenzen', 'smarttechnik-gp-child' ),
            '/ueber-uns'                => __( 'Über uns', 'smarttechnik-gp-child' ),
            '/faq'                      => __( 'FAQ', 'smarttechnik-gp-child' ),
            '/kontakt'                  => __( 'Kontakt', 'smarttechnik-gp-child' ),
            '/impressum'                => __( 'Impressum', 'smarttechnik-gp-child' ),
            '/datenschutz'              => __( 'Datenschutz', 'smarttechnik-gp-child' ),
        );

        echo '<ul class="menu">';
        foreach ( $links as $path => $label ) {
            printf(
                '<li class="menu-item"><a href="%1$s">%2$s</a></li>',
                esc_url( home_url( $path ) ),
                esc_html( $label )
            );
        }
        echo '</ul>';
    }
}

/**
 * Enqueue child theme assets.
 */
function smarttechnik_child_enqueue_scripts() {
    wp_enqueue_style(
        'smarttechnik-child-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@500;600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'smarttechnik-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'generate-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'smarttechnik-child-custom',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array( 'smarttechnik-child-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'smarttechnik-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
    wp_script_add_data( 'smarttechnik-child-main', 'defer', true );
}
add_action( 'wp_enqueue_scripts', 'smarttechnik_child_enqueue_scripts', 20 );

/**
 * Disable emoji scripts and styles for performance.
 */
function smarttechnik_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'smarttechnik_disable_emojis' );

/**
 * Remove WP generator tag.
 */
remove_action( 'wp_head', 'wp_generator' );

add_action( 'smarttechnik_render_meta', 'smarttechnik_render_meta' );
add_action( 'smarttechnik_render_schema', 'smarttechnik_render_schema' );

/**
 * Obsługa formularza kontaktowego z page-contact.php
 */
function smarttechnik_handle_contact_form() {
    // Kontynuuj tylko jeśli formularz został wysłany
    if ( ! isset( $_POST['submit_contact_form'] ) || ! isset( $_POST['contact_form_nonce'] ) ) {
        return;
    }

    // Weryfikuj nonce (zabezpieczenie)
    if ( ! wp_verify_nonce( $_POST['contact_form_nonce'], 'smarttechnik_contact_form_action' ) ) {
        // Jeśli weryfikacja się nie powiedzie, przekieruj z błędem
        wp_safe_redirect( add_query_arg( 'status', 'error', home_url( '/kontakt' ) ) );
        exit;
    }

    // Pobierz adres e-mail administratora z ustawień WordPress
    $admin_email = get_option( 'admin_email' );
    
    // Zabezpiecz (sanit) dane wejściowe
    $name    = sanitize_text_field( $_POST['contact-name'] );
    $email   = sanitize_email( $_POST['contact-email'] );
    $phone   = sanitize_text_field( $_POST['contact-phone'] );
    $message = sanitize_textarea_field( $_POST['contact-message'] );

    // Zbuduj treść e-maila
    $subject = "Nowe zapytanie (smartTechnik.eu) od: $name";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "From: $name <$email>", // Użyj adresu e-mail nadawcy
        "Reply-To: $name <$email>" // Ustaw nagłówek Reply-To
    );
    
    $body  = "Otrzymano nowe zapytanie ze strony internetowej:\n\n";
    $body .= "Imię / Firma: $name\n";
    $body .= "E-Mail: $email\n";
    $body .= "Telefon: $phone\n\n";
    $body .= "Treść wiadomości:\n";
    $body .= "--------------------------------------------------\n";
    $body .= $message . "\n";
    $body .= "--------------------------------------------------\n";

    // Wyślij e-mail
    $sent = wp_mail( $admin_email, $subject, $body, $headers );

    // Przekieruj na stronę kontaktową z odpowiednim statusem
    if ( $sent ) {
        wp_safe_redirect( add_query_arg( 'status', 'success', home_url( '/kontakt' ) ) . '#anfrage' );
    } else {
        wp_safe_redirect( add_query_arg( 'status', 'error', home_url( '/kontakt' ) ) . '#anfrage' );
    }
    exit;
}
add_action( 'init', 'smarttechnik_handle_contact_form' );
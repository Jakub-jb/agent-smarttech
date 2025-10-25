<?php
/**
 * LocalBusiness JSON-LD schema output.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

if ( ! function_exists( 'smarttechnik_render_schema' ) ) {
    /**
     * Echoes LocalBusiness schema JSON-LD.
     */
    function smarttechnik_render_schema() {
        if ( is_admin() ) {
            return;
        }

        $schema = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'LocalBusiness',
            'name'        => 'smartTechnik GmbH',
            'description' => 'Glasfaser-Spleißen, Netzwerktechnik, OTDR-Messtechnik und Abnahmeprotokolle in Frankfurt am Main und Rhein-Main.',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Odenwaldstr. 14',
                'postalCode'      => '63517',
                'addressLocality' => 'Rodenbach',
                'addressRegion'   => 'Hessen',
                'addressCountry'  => 'DE',
            ),
            'areaServed'  => array(
                'Frankfurt am Main',
                'Rhein-Main-Gebiet',
                'Offenbach',
                'Hanau',
                'Wiesbaden',
                'Mainz',
                'Darmstadt',
            ),
            'telephone'   => '+49 157 31685721',
            'url'         => esc_url_raw( home_url( '/' ) ),
            'serviceType' => array(
                'Glasfaser Spleißen',
                'OTDR-Messung',
                'Netzwerktechnik',
                'Strukturverkabelung',
                'Abnahmeprotokolle',
            ),
            'availability' => '24/7',
        );

        echo "\n<script type=\"application/ld+json\">" . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

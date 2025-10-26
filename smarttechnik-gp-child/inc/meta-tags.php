<?php
/**
 * Contextual meta titles and descriptions.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

if ( ! function_exists( 'smarttechnik_get_meta_config' ) ) {
    /**
     * Returns configuration for meta titles and descriptions.
     *
     * @return array<string, array<string, string>>
     */
    function smarttechnik_get_meta_config() {
        return array(
            'front_page'                  => array(
                'title'       => 'Glasfaser Spleißen & Netzwerktechnik in Frankfurt am Main | smartTechnik GmbH',
                'description' => 'Zertifiziertes Glasfaser-Spleißen, Netzwerktechnik, OTDR-Messungen und Server-Infrastruktur in Frankfurt am Main & Rhein-Main. Schnelle Reaktionszeiten vor Ort, dokumentierte Abnahmen, 24/7 Bereitschaft.',
            ),
            'leistungen'                  => array(
                'title'       => 'Leistungen | Glasfaser-Spleißen, Netzwerktechnik & Messtechnik Frankfurt am Main',
                'description' => 'Glasfaser spleißen, strukturierte Netzwerktechnik, OTDR-Messungen, Dokumentation und Abnahmeprotokolle im Rhein-Main-Gebiet. smartTechnik GmbH – zertifizierte Techniker vor Ort.',
            ),
            'glasfaser-spleissen-frankfurt' => array(
                'title'       => 'Glasfaser Spleißen & OTDR-Messung in Frankfurt am Main | smartTechnik GmbH',
                'description' => 'Professionelles Glasfaser-Spleißen (Singlemode/Multimode), OTDR-Messung, Dokumentation & Störungsbeseitigung – direkt vor Ort in Frankfurt am Main und Rhein-Main.',
            ),
            'netzwerktechnik-frankfurt'   => array(
                'title'       => 'Netzwerktechnik & strukturierte Verkabelung Frankfurt | smartTechnik GmbH',
                'description' => 'Planung, Strukturverkabelung, Rack- und Patchfeld-Installation, Beschriftung und Dokumentation. Netzwerk- und IT-Infrastruktur für Büros, Hallen und Rechenzentren im Raum Frankfurt.',
            ),
            'messtechnik-otdr-datenmessung' => array(
                'title'       => 'Messtechnik & Abnahmeprotokolle für Glasfaser und Datennetze | Rhein-Main',
                'description' => 'OTDR- und Dämpfungsmessungen, Netzwerk-Messprotokolle, Abnahme nach Norm. Mess- und Dokumentationsservice für Generalunternehmer, IT-Abteilungen und Bauleitung im Raum Frankfurt.',
            ),
            'referenzen'                  => array(
                'title'       => 'Referenzen & Projekte | smartTechnik GmbH Frankfurt Rhein-Main',
                'description' => 'Ausgewählte Projekte aus Frankfurt am Main und dem Rhein-Main-Gebiet: Glasfaser-Spleißen, Netzwerk-Installationen, Messtechnik mit Abnahmeprotokollen.',
            ),
            'ueber-uns'                   => array(
                'title'       => 'Über uns | smartTechnik GmbH – Glasfaser & Netzwerktechnik Frankfurt',
                'description' => 'smartTechnik GmbH: regionale Spezialisten für Glasfaser-Spleißen, Netzwerktechnik und Messtechnik im Rhein-Main-Gebiet. Zertifiziertes Team, schnelle Reaktionszeiten.',
            ),
            'faq'                         => array(
                'title'       => 'FAQ – Häufige Fragen zu Glasfaser, Netzwerktechnik & Messung | smartTechnik Frankfurt',
                'description' => 'Antworten auf die wichtigsten Fragen rund um Glasfaser-Spleißen, OTDR-Messungen, Netzwerkverkabelung und Abnahmeprotokolle im Raum Frankfurt am Main.',
            ),
            'kontakt'                     => array(
                'title'       => 'Kontakt | smartTechnik GmbH – Glasfaser & Netzwerktechnik Frankfurt am Main',
                'description' => 'Kontaktieren Sie unsere Techniker in Frankfurt/Rhein-Main. Angebot innerhalb von 24h für Glasfaser-Spleißen, Netzwerktechnik, OTDR-Messungen und Abnahmeprotokolle.',
            ),
            'impressum'                   => array(
                'title'       => 'Impressum | smartTechnik GmbH',
                'description' => 'Impressum der smartTechnik GmbH – Glasfaser, Netzwerktechnik, Messtechnik im Rhein-Main-Gebiet / Frankfurt am Main.',
            ),
            'datenschutz'                 => array(
                'title'       => 'Datenschutz / Privacy | smartTechnik GmbH Frankfurt Rhein-Main',
                'description' => 'Informationen zur Verarbeitung personenbezogener Daten durch smartTechnik GmbH (Kontaktformular, Telefon- und E-Mail-Anfragen).',
            ),
        );
    }
}

if ( ! function_exists( 'smarttechnik_resolve_meta' ) ) {
    /**
     * Determines the meta data for the current request.
     *
     * @return array{title:string,description:string}
     */
    function smarttechnik_resolve_meta() {
        static $cache = null;

        if ( null !== $cache ) {
            return $cache;
        }

        $config = smarttechnik_get_meta_config();
        $default = array(
            'title'       => 'smartTechnik GmbH – Glasfaser, Netzwerktechnik & Messtechnik Frankfurt am Main',
            'description' => 'smartTechnik GmbH – Glasfaser-Spleißen, Netzwerktechnik, Messtechnik und Server-Infrastruktur für Unternehmen im Rhein-Main-Gebiet mit schnellen Vor-Ort-Reaktionszeiten.',
        );

        if ( is_front_page() || is_home() ) {
            $cache = $config['front_page'];
            return $cache;
        }

        $object = get_queried_object();
        if ( $object instanceof WP_Post && ! empty( $object->post_name ) ) {
            $slug = $object->post_name;
            if ( isset( $config[ $slug ] ) ) {
                $cache = $config[ $slug ];
                return $cache;
            }
        }

        $cache = $default;
        return $cache;
    }
}

if ( ! function_exists( 'smarttechnik_render_meta' ) ) {
    /**
     * Prints the meta description tag in the head.
     */
    function smarttechnik_render_meta() {
        if ( is_admin() ) {
            return;
        }

        $meta = smarttechnik_resolve_meta();

        if ( ! empty( $meta['description'] ) ) {
            printf( "\n<meta name=\"description\" content=\"%s\" />\n", esc_attr( $meta['description'] ) );
        }
    }
}

if ( ! function_exists( 'smarttechnik_filter_document_title' ) ) {
    /**
     * Filters the WordPress document title to match the configured meta title.
     *
     * @param string $title Default title.
     *
     * @return string
     */
    function smarttechnik_filter_document_title( $title ) {
        if ( is_admin() ) {
            return $title;
        }

        $meta = smarttechnik_resolve_meta();
        if ( ! empty( $meta['title'] ) ) {
            return $meta['title'];
        }

        return $title;
    }
}
add_filter( 'pre_get_document_title', 'smarttechnik_filter_document_title', 1, 1 );

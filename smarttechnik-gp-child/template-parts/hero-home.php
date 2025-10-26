<?php
/**
 * Hero section for front page.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="section" aria-labelledby="hero-heading">
  <div class="container">
    <section class="hero">
    <div class="hero-content">
        <h1 id="hero-heading">Glasfaser‑, Netzwerktechnik & Messtechnik 24/7 – Frankfurt am Main</h1>
        <p>Wir splicen und messen Glasfaserleitungen für Unternehmen im Rhein‑Main‑Gebiet. Schnelle Reaktionszeiten und zertifizierte Messprotokolle.</p>
        <div class="hero-actions">
            <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="btn-primary">KOSTENLOSE Beratung anfragen</a>
            <a href="tel:+4915731685721" class="btn-secondary call-now">Jetzt anrufen</a>
        </div>
    </div>
    <div class="hero-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/hero.webp' ); ?>" width="1600" height="900" alt="Techniker beim Glasfaser‑Splicing" decoding="async" fetchpriority="high">
    </div>
</section>

  </div>
</section>

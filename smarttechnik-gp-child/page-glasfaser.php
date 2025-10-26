<?php
/**
 * Template Name: Glasfaser & Spleißen Frankfurt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="glasfaser-title">
    <div class="container">
      <h1 id="glasfaser-title">Glasfaser-Spleißen &amp; OTDR-Messung in Frankfurt am Main</h1>
      <p>Wenn Glasfaserverbindungen ausfallen, zählt jede Minute. Unser Team spleißt Singlemode- und Multimode-Fasern mit modernster Technik, misst jede Strecke (OTDR / Dämpfung) und liefert sofort verwertbare Protokolle für Ihre Abnahme oder Fehlersuche – direkt im Raum Frankfurt am Main.</p>
      <section class="card" aria-labelledby="services-heading">
        <h2 id="services-heading">Was wir für Sie übernehmen</h2>
        <ul>
          <li>Spleißen von LWL-Strecken (Singlemode / Multimode)</li>
          <li>Reparatur von Glasfaserbrüchen nach Bauschäden</li>
          <li>Montage von Muffen, Pigtails &amp; Patchpanels</li>
          <li>Entstörung kritischer Leitungen (24/7 nach Vereinbarung)</li>
          <li>OTDR-Messung inkl. Protokoll</li>
        </ul>
      </section>
      <section class="card" aria-labelledby="documentation-heading">
        <h2 id="documentation-heading">Dokumentation für Ihre Bauleitung / Ihren Kunden</h2>
        <p>Nach jedem Einsatz erhalten Sie:</p>
        <ul>
          <li>Messprotokolle (PDF / OTDR-Trace)</li>
          <li>Übersicht aller Spleißstellen</li>
          <li>Beschriftete Ports / Fasern</li>
          <li>Klar definierte Übergabepunkte</li>
        </ul>
        <p>Das reduziert Rückfragen vom Endkunden und vereinfacht spätere Audits.</p>
      </section>
      <section class="card" aria-labelledby="area-heading">
        <h2 id="area-heading">Einsatzgebiet</h2>
        <p>Wir bedienen Frankfurt am Main, Rhein-Main (Offenbach, Hanau, Wiesbaden, Mainz, Darmstadt) und angrenzende Industrie- und Rechenzentrumsstandorte.</p>
      </section>
      <div class="card cta-panel services-cta" aria-label="Glasfaser Kontakt CTA">
        <p>Glasfaser-Störung oder Neuanschluss in Frankfurt?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Notfall / Express kontaktieren</a>
        <p>Tel.: <a class="hero-phone" href="tel:+4915731685721">+49&nbsp;157&nbsp;31685721</a></p>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

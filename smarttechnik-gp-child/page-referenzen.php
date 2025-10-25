<?php
/**
 * Template Name: Referenzen Frankfurt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="references-title">
    <div class="container">
      <h1 id="references-title">Referenzen &amp; Projekte aus Frankfurt / Rhein-Main</h1>
      <p>Hier zeigen wir typische Einsatzszenarien aus der Region Frankfurt am Main. Aus Diskretionsgründen nennen wir keine sensiblen Kundennamen, aber wir beschreiben Problem, Vorgehen und Ergebnis.</p>
      <article class="card reference-case" aria-labelledby="case-dc-heading">
        <h2 id="case-dc-heading">Glasfaser-Notfallreparatur in einem Rechenzentrum Frankfurt am Main</h2>
        <p><strong>Problem:</strong> Glasfaserbruch während Umbauarbeiten.</p>
        <p><strong>Lösung:</strong> Sofortiger vor-Ort-Einsatz, Spleißen, OTDR-Messung, Abschlussprotokoll.</p>
        <p><strong>Ergebnis:</strong> Verbindung innerhalb von Stunden wieder stabil, Abnahme durch den Betreiber noch am selben Tag.</p>
      </article>
      <article class="card reference-case" aria-labelledby="case-logistics-heading">
        <h2 id="case-logistics-heading">Strukturierte Netzwerkverkabelung für ein Logistikzentrum in Hanau</h2>
        <p><strong>Problem:</strong> Unklare, historisch gewachsene Verkabelung → Ausfälle.</p>
        <p><strong>Lösung:</strong> Neuaufbau Rack + Patchfelder, durchgängige Beschriftung aller Ports/Leitungen.</p>
        <p><strong>Ergebnis:</strong> Schnellere Fehlersuche, reduzierte Downtime, saubere Dokumentation für internes IT-Team.</p>
      </article>
      <div class="card cta-panel services-cta" aria-label="Referenzen CTA">
        <p>Möchten Sie ein ähnliches Projekt starten oder ein Problem lösen?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt Projekt anfragen</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

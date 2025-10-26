<?php
/**
 * Template Name: FAQ Frankfurt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="faq-title">
    <div class="container">
      <h1 id="faq-title">FAQ – Häufige Fragen</h1>
      <div class="faq-list">
        <article class="card faq-item" aria-labelledby="faq-night-heading">
          <h2 id="faq-night-heading">Bieten Sie Glasfaser-Spleißen auch nachts / am Wochenende an?</h2>
          <p>Ja. Für kritische Infrastrukturen oder Störungen bieten wir Bereitschaft außerhalb der regulären Zeiten, auch nachts oder am Wochenende – nach Vereinbarung eines SLA.</p>
        </article>
        <article class="card faq-item" aria-labelledby="faq-protocol-heading">
          <h2 id="faq-protocol-heading">Liefern Sie OTDR-/Dämpfungsprotokolle für die Bauabnahme?</h2>
          <p>Ja. Unsere Messtechnik erstellt vollständige, prüffähige Protokolle. Diese Unterlagen können Sie direkt an die Bauleitung oder den Endkunden weitergeben.</p>
        </article>
        <article class="card faq-item" aria-labelledby="faq-region-heading">
          <h2 id="faq-region-heading">Arbeiten Sie nur in Frankfurt am Main?</h2>
          <p>Unser Kerngebiet ist Frankfurt am Main und das gesamte Rhein-Main-Gebiet (Offenbach, Hanau, Wiesbaden, Mainz, Darmstadt). Für größere Projekte fahren wir bundesweit nach Absprache.</p>
        </article>
        <article class="card faq-item" aria-labelledby="faq-cabling-heading">
          <h2 id="faq-cabling-heading">Übernehmen Sie auch komplette Netzwerkverkabelungen in Büros/Neubauten?</h2>
          <p>Ja. Wir planen strukturierte Verkabelung (Kupfer/LWL), montieren Racks, beschriften Ports, dokumentieren alles für Ihr IT-Team.</p>
        </article>
        <article class="card faq-item" aria-labelledby="faq-cost-heading">
          <h2 id="faq-cost-heading">Was kostet ein Glasfaser-Spleiß?</h2>
          <p>Das hängt von Strecke, Zugänglichkeit, Anzahl der Fasern und benötigter Dokumentation ab. Kontaktieren Sie uns, wir schicken ein transparentes Angebot innerhalb von 24h.</p>
        </article>
      </div>
      <div class="card cta-panel services-cta" aria-label="FAQ CTA">
        <p>Keine passende Antwort gefunden?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt Frage stellen</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

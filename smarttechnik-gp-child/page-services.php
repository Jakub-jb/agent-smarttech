<?php
/**
 * Template Name: Leistungen
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="services-title">
    <div class="container">
      <header class="section-intro">
        <h1 id="services-title">Unsere Leistungen im Rhein-Main-Gebiet</h1>
        <p>Als regionaler Dienstleister rund um Frankfurt am Main liefern wir komplette Netzwerk- und Glasfaser-Infrastruktur aus einer Hand: Planung, Installation, Spleißen, Messen, Dokumentieren und Abnahme.</p>
      </header>
      <article class="card service-detail" aria-labelledby="fiber-heading">
        <h2 id="fiber-heading">Glasfasertechnik &amp; Spleißen</h2>
        <p>Wir spleißen Singlemode- und Multimode-Fasern mit präziser Kernjustierung. Jede Spleißstelle wird geprüft, sauber dokumentiert und eindeutig beschriftet.</p>
        <p><strong>Leistungsbereiche:</strong></p>
        <ul>
          <li>Spleißen von LWL-Strecken (Singlemode / Multimode)</li>
          <li>Muffenmontage, Patchpanels, Pigtails</li>
          <li>OTDR-Messungen und Dämpfungsmessungen</li>
          <li>Abschlussdokumentation für Abnahme</li>
        </ul>
      </article>
      <article class="card service-detail" aria-labelledby="network-heading">
        <h2 id="network-heading">Netzwerktechnik &amp; strukturierte Verkabelung</h2>
        <p>Wir planen und installieren strukturierte Kupfer- (Cat6A/Cat7) und Glasfaserverkabelung für Offices, Lagerhallen, Produktionsflächen und Rechenzentren.</p>
        <p><strong>Leistungsbereiche:</strong></p>
        <ul>
          <li>Planung der Netzwerkstruktur (Patchfelder, Racks, Backbone)</li>
          <li>Montage von Serverschränken / Racks</li>
          <li>Beschriftung aller Ports / Leitungen</li>
          <li>Ordnung &amp; Kabelführung für langfristige Wartbarkeit</li>
        </ul>
      </article>
      <article class="card service-detail" aria-labelledby="measurement-heading">
        <h2 id="measurement-heading">Messtechnik &amp; Abnahmeprotokolle</h2>
        <p>Wir messen komplette Glasfaser- und Datennetze mit modernem Messequipment und erstellen nachvollziehbare Protokolle für Ihre Kunden, Auditoren oder Bauleitung.</p>
        <p><strong>Leistungsbereiche:</strong></p>
        <ul>
          <li>OTDR-Messung</li>
          <li>Dämpfungsmessung</li>
          <li>Dokumentation je Faser / Port</li>
          <li>Übergabefähige Abnahmeprotokolle (PDF)</li>
        </ul>
      </article>
      <article class="card service-detail" aria-labelledby="support-heading">
        <h2 id="support-heading">Support &amp; Bereitschaft in Frankfurt am Main</h2>
        <p>Wir sind schnell vor Ort im gesamten Rhein-Main-Gebiet (Frankfurt, Offenbach, Hanau, Wiesbaden, Mainz, Darmstadt).</p>
        <ul>
          <li>Entstörung kritischer Verbindungen</li>
          <li>Notfall-Spleiß bei Glasfaserbruch</li>
          <li>Temporäre Leitungsführung / Provisorien</li>
          <li>Erweiterungen bei laufendem Betrieb</li>
        </ul>
      </article>
      <div class="cta-panel services-cta">
        <p>Fragen zu einem konkreten Projekt in Frankfurt am Main oder Rhein-Main?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt unverbindlich anfragen</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

<?php
/**
 * Template Name: Netzwerktechnik Frankfurt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="network-title">
    <div class="container">
      <h1 id="network-title">Netzwerktechnik &amp; strukturierte Verkabelung im Raum Frankfurt</h1>
      <p>Stabile Netzwerke sind die Basis für produktive IT. Wir planen, installieren und dokumentieren komplette Netzwerk- und Verkabelungslösungen – inklusive sauberer Rack-Installation, Beschriftung aller Ports und strukturierter Übergabe.</p>
      <section class="card" aria-labelledby="network-services-heading">
        <h2 id="network-services-heading">Unsere Leistungen im Bereich Netzwerktechnik</h2>
        <ul>
          <li>Planung der Netzwerkstruktur (Kupfer &amp; LWL)</li>
          <li>Installation von Patchfeldern, Racks, Backbone-Verbindungen</li>
          <li>Ordnung &amp; Kabelführung nach Best Practice</li>
          <li>Dokumentierte Port-/Patchpläne für Ihr IT-Team</li>
          <li>Skalierbare Lösungen für Büros, Logistik &amp; Industrie</li>
        </ul>
      </section>
      <section class="card" aria-labelledby="importance-heading">
        <h2 id="importance-heading">Warum das wichtig ist</h2>
        <ul>
          <li>Weniger Ausfälle durch saubere Struktur</li>
          <li>Schnellere Fehlersuche dank eindeutiger Beschriftung</li>
          <li>Weniger Risiko bei Audits &amp; Abnahmen</li>
          <li>Bessere Skalierbarkeit beim Wachstum</li>
        </ul>
      </section>
      <section class="card" aria-labelledby="regional-heading">
        <h2 id="regional-heading">Regionale Nähe = schnelle Reaktionszeit</h2>
        <p>Wir sind im Rhein-Main-Gebiet stationiert. Das heißt: kurze Wege nach Frankfurt am Main, Hanau, Offenbach, Wiesbaden, Mainz, Darmstadt. Kurze Wege = weniger Ausfallzeit für Sie.</p>
      </section>
      <div class="card cta-panel services-cta" aria-label="Netzwerktechnik Kontakt CTA">
        <p>Projekt oder Störung in Ihrer Netzwerk-Infrastruktur?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt Kontakt aufnehmen</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

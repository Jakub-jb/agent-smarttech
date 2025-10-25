<?php
/**
 * Template Name: Messtechnik & OTDR Frankfurt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit();

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="messtechnik-title">
    <div class="container">
      <h1 id="messtechnik-title">Messtechnik &amp; Abnahmeprotokolle für Glasfaser- und Datennetze</h1>
      <p>Sie brauchen ein sauberes, prüffähiges Protokoll für die Abnahme? Wir messen Ihr Glasfaser- oder Datennetz mit professionellem Equipment, dokumentieren jede Strecke und liefern Berichte, die von Bauleitung, Auditoren und Endkunden akzeptiert werden.</p>
      <section class="card" aria-labelledby="measurement-services-heading">
        <h2 id="measurement-services-heading">Unser Mess-Service</h2>
        <ul>
          <li>OTDR-Messung und Dämpfungsmessung</li>
          <li>Fehleranalyse bei Störungen</li>
          <li>Vollständige Dokumentation pro Faser / Port</li>
          <li>Übernahme der Abnahmeprotokolle für den Endkunden</li>
        </ul>
      </section>
      <section class="card" aria-labelledby="target-heading">
        <h2 id="target-heading">Für wen ist das interessant?</h2>
        <ul>
          <li>Generalunternehmer / Bauleitung</li>
          <li>Rechenzentren und IT-Abteilungen</li>
          <li>Industrie &amp; Logistikstandorte</li>
          <li>Dienstleister, die externe QS / Abnahme brauchen</li>
        </ul>
      </section>
      <section class="card" aria-labelledby="result-heading">
        <h2 id="result-heading">Ergebnis für Sie</h2>
        <ul>
          <li>Weniger Eskalationen in der Übergabephase</li>
          <li>Transparenz gegenüber dem Endkunden</li>
          <li>Nachweisbare Qualität der Installation</li>
        </ul>
      </section>
      <div class="card cta-panel services-cta" aria-label="Messtechnik Kontakt CTA">
        <p>Sie benötigen kurzfristig OTDR-Messungen oder Abnahmeprotokolle?</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt Termin sichern</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

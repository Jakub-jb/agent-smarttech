<?php
/**
 * Template Name: Über uns
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section" aria-labelledby="about-title">
    <div class="container">
      <h1 id="about-title">Über smartTechnik GmbH</h1>
      <div class="two-col">
        <div>
          <h2>Wer wir sind</h2>
          <p>smartTechnik GmbH ist ein spezialisiertes Technikteam aus dem Rhein-Main-Gebiet (Standort Rodenbach bei Frankfurt am Main). Unser Fokus: Glasfaser-Spleißen, strukturierte Netzwerktechnik, Mess- und Abnahmedokumentation für Unternehmen, Rechenzentren und industrielle Standorte.</p>
          <h2>Unser Qualitätsanspruch</h2>
          <p>Zertifizierte Techniker mit jahrelanger Praxis im Feld, nicht nur Theorie.</p>
          <p>Moderne Mess- und Spleißtechnik, regelmäßig kalibriert.</p>
          <p>Klare, verständliche Dokumentation für Ihre Abnahme und Audits.</p>
          <p>Termintreue Umsetzung – auch unter Zeitdruck.</p>
        </div>
        <div>
          <h2>Unser Team</h2>
          <p>Vor Ort treffen Sie keine anonymen Subunternehmer, sondern unser eigenes Technikteam – Glasfaser-Spezialisten, Netzwerktechniker und Infrastruktur-Engineers.</p>
          <figure>
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="smartTechnik Team bei Glasfaser-Spleißen in Frankfurt am Main" loading="lazy" width="800" height="600">
            <!-- Photo by Mimi Thian on Unsplash | License: Unsplash License -->
            <figcaption>Technikteam für Glasfaser-Spleißen, OTDR-Analyse und Dokumentation.</figcaption>
          </figure>
          <figure>
            <img src="https://images.unsplash.com/photo-1517430816045-df4b7de1d0fe?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Server- und Netzwerktechniker von smartTechnik in Frankfurt" loading="lazy" width="800" height="600">
            <!-- Photo by Kevin Ku on Unsplash | License: Unsplash License -->
            <figcaption>Server- und Netzwerk-Spezialisten für Rechenzentren im Rhein-Main-Gebiet.</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="section section--alt" aria-labelledby="frankfurt-heading">
    <div class="container">
      <div class="card">
        <h2 id="frankfurt-heading">Warum regional wichtig ist</h2>
        <p>Im Rhein-Main-Gebiet zählt Geschwindigkeit. Wir sind lokal, reagieren schnell vor Ort in Frankfurt am Main, Offenbach, Hanau, Wiesbaden, Mainz, Darmstadt – ohne lange Anfahrtszeiten, ohne „Wir kommen nächste Woche“.</p>
      </div>
    </div>
  </section>
  <section class="section" aria-labelledby="responsibility-heading">
    <div class="container">
      <div class="card">
        <h2 id="responsibility-heading">Verantwortung &amp; Vertrauen</h2>
        <p>Wir arbeiten transparent. Sie erhalten:</p>
        <ul>
          <li>Messprotokolle, die man wirklich lesen kann</li>
          <li>Sauber beschriftete Racks, Leitungen und Ports</li>
          <li>Eine dokumentierte Infrastruktur, die Ihr internes Team direkt übernehmen kann</li>
        </ul>
        <p>Lernen Sie uns kennen oder fordern Sie direkt ein Angebot an.</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Jetzt Kontakt aufnehmen</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

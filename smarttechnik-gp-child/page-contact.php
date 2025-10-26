<?php
/**
 * Template Name: Kontakt
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;

// Sprawdź, czy formularz został wysłany z sukcesem (status z przekierowania)
$form_status = isset( $_GET['status'] ) ? sanitize_key( $_GET['status'] ) : '';
$form_message = '';

if ( 'success' === $form_status ) {
    $form_message = '<div class="form-success-message card" role="alert">Dziękujemy za zapytanie. Skontaktujemy się z Tobą w ciągu 24 godzin.</div>';
} elseif ( 'error' === $form_status ) {
    $form_message = '<div class="form-error-message card" role="alert">Wystąpił błąd podczas wysyłania formularza. Spróbuj ponownie.</div>';
}

get_header();
?>
<main id="primary" class="site-main container" role="main">
  <section class="section" aria-labelledby="contact-title">
    <h1 id="contact-title">Kontakt & Projektanfrage</h1>
    <p>Sie benötigen eine Express-Reparatur, möchten eine Abnahme dokumentieren lassen oder planen einen Ausbau? Senden Sie uns Ihr Anliegen – wir melden uns innerhalb von 24 Stunden.</p>
    
    <?php echo $form_message; // Wyświetl komunikat o statusie formularza ?>

    <div class="contact-grid">
      <section class="card" aria-labelledby="contact-form-heading">
        <h2 id="contact-form-heading">Direkte Anfrage</h2>
        <form class="contact-form" aria-label="Kontaktformular">
  <label for="cf-name">Name / Firma</label>
  <input id="cf-name" name="cf-name" type="text" autocomplete="name" required>

  <label for="cf-email">E-Mail</label>
  <input id="cf-email" name="cf-email" type="email" autocomplete="email" required>

  <label for="cf-phone">Telefon</label>
  <input id="cf-phone" name="cf-phone" type="tel" autocomplete="tel">

  <label for="cf-msg">Nachricht</label>
  <textarea id="cf-msg" name="cf-msg" rows="5" autocomplete="on"></textarea>

  <button type="submit" class="btn-primary">Anfrage senden</button>
</form>



      </section>
      <aside class="contact-details" aria-label="smartTechnik Kontaktinformationen">
        <h2>smartTechnik GmbH</h2>
        <p>Technikstandort: Odenwaldstr. 14<br>63517 Rodenbach · Rhein-Main (bei Frankfurt am Main)</p>
        <p><strong>Tel. Direkt:</strong> <a href="tel:+4915731685721">+49 157 31685721</a></p>
        <p><strong>Tel. Bereitschaft:</strong> <a href="tel:+4915782854321">+49 157 82854321</a></p>
        <p><strong>E-Mail:</strong> <a href="mailto:info@smarttechnik.eu">info@smarttechnik.eu</a></p>
        <p>Wir bieten Glasfaser-Spleißen, strukturierte Verkabelung, Messtechnik und dokumentierte Abnahmen für Unternehmen im Rhein-Main-Gebiet.</p>
      </aside>
    </div>
    <div class="contact-map" aria-label="Karte Frankfurt am Main">
    <iframe src="https://www.google.com/maps/embed?pb=..." title="Standort Frankfurt am Main" width="600" height="350" loading="lazy" style="border:0;" allowfullscreen></iframe>
</div>
  </section>
</main>
<?php
get_footer();
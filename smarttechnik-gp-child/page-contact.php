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
        <form method="post" action="" class="contact-form" id="anfrage">
          
          <?php wp_nonce_field( 'smarttechnik_contact_form_action', 'contact_form_nonce' ); ?>

          <div class="form-field">
            <label for="contact-name">Name / Firma</label>
            <input type="text" id="contact-name" name="contact-name" required>
          </div>
          <div class="form-field">
            <label for="contact-email">E-Mail</label>
            <input type="email" id="contact-email" name="contact-email" required>
          </div>
          <div class="form-field">
            <label for="contact-phone">Telefon</label>
            <input type="tel" id="contact-phone" name="contact-phone" required>
          </div>
          <div class="form-field">
            <label for="contact-message">Ihr Anliegen</label>
            <textarea id="contact-message" name="contact-message" rows="6" placeholder="z. B. Glasfaserbruch im Lager Frankfurt, OTDR-Abnahme für Neubau in Hanau" required></textarea>
          </div>
          <p>Ihre Angaben verwenden wir ausschließlich zur Bearbeitung Ihrer Anfrage. Details finden Sie in unserer <a href="<?php echo esc_url( home_url( '/datenschutz' ) ); ?>">Datenschutzerklärung</a>.</p>
          <button type="submit" class="btn-primary" name="submit_contact_form">Anfrage absenden</button>
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
    <div class="contact-map card" aria-label="Karte Frankfurt am Main">
      <iframe title="Frankfurt am Main" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163532.5539314468!2d8.532130095593855!3d50.12111497245606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Niemcy!5e0!3m2!1spl!2spl!4v1678886543210!5m2!1spl!2spl" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%; height: 360px;"></iframe>
    </div>
  </section>
</main>
<?php
get_footer();
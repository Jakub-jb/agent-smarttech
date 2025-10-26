<?php
/**
 * Default page template wrapper.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<main id="primary" class="site-main" role="main">
  <section class="section">
    <div class="container">
      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              the_content();
          }
      }
      ?>
    </div>
  </section>
</main>
<?php
get_footer();

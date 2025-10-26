<?php
/**
 * Theme header.
 *
 * @package smarttechnik-gp-child
 */

defined( 'ABSPATH' ) || exit;
?><!DOCTYPE html>
<html lang="de"> 
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" role="banner">
    <!-- Skip link umożliwia pominięcie nawigacji -->
    <a class="skip-link" href="#main">Pomiń nawigację</a>
    <div class="container header-inner">
        <div class="site-branding">
            <?php if ( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>
        </div>
        <nav class="main-nav" role="navigation" aria-label="Główna nawigacja">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'menu-list',
                'container'      => false,
            ) );
            ?>
            <!-- Przycisk burgera z odpowiednimi atrybutami ARIA -->
            <button class="menu-toggle" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu" aria-label="Menu">
                <span class="burger-icon"></span>
            </button>
        </nav>
        <div class="contact-cta">
            <!-- Stały kontakt (Consistent Help) -->
            <a class="call-now" href="tel:+4915731685721">Zadzwoń: +49 157 31685721</a>
            <a class="btn-primary" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Poproś o wycenę</a>
        </div>
    </div>
    <!-- Panel mobilnej nawigacji -->
    <nav id="mobile-menu" class="mobile-menu" hidden data-menu-panel role="navigation" aria-label="Menu mobilne">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'mobile-menu-list',
            'container'      => false,
        ) );
        ?>
    </nav>
</header>

<div id="content" class="site-content">

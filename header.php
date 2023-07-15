<?
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
**/

?>
<!doctype html>
<html <? language_attributes(); ?> <? twentytwentyone_the_html_classes(); ?>>
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <? wp_head(); ?>

  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

  <!-- <script src="https://unpkg.com/prop-types@15.6/prop-types.js"></script> -->
  <script src="https://unpkg.com/prop-types@15.6/prop-types.min.js"></script>

  <script src="https://unpkg.com/recharts/umd/Recharts.js"></script>

</head>

<body <? body_class(); ?>>
<? wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">
    <?
    /* translators: Hidden accessibility text. */
    esc_html_e( 'Skip to content', 'twentytwentyone' );
    ?>
  </a>

  <? get_template_part( 'template-parts/header/site-header' ); ?>

  <div id="content" class="site-content">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">

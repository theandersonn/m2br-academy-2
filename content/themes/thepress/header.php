<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <!--[if gte IE 8]>
  <div style="padding: 7.5px; background-color: #f44336; text-align: center; color: #fff;">
    <p>Você esta usando um navegador <strong>desatualizado</strong>. <a href="http://browsehappy.com/" target="_blank">Atualize seu navegador</a> para melhorar sua experiência.</p>
  </div>
  <![endif]-->

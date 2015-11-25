<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name');</title>
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong>PHOTO</strong> Boutique</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="how.html">Jak to działa?</a></li>
        <li><a href="#">Galeria</a></li>
        <li><a href="oferta.html">Oferta</a></li>
        <li><a href="#">Rezerwacja</a></li>
        <li><a href="contact.html">Kontakt</a></li>
      </ul>
    </div>
  </div>
</nav>

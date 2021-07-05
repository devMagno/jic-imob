<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <script src="https://kit.fontawesome.com/77daa57238.js" crossorigin="anonymous"></script>


  <title><?php bloginfo('name'); ?> - Página Inicial</title>
  <meta name="title" content="<?php bloginfo('name'); ?> - Página Inicial">
  <meta name="description" content="">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://devmagno.github.io/jic-skeleton">
  <meta property="og:title" content="<?php bloginfo('name'); ?> - Página Inicial">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://devmagno.github.io/jic-skeleton/img/og-image.png">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://devmagno.github.io/jic-skeleton">
  <meta property="twitter:title" content="<?php bloginfo('name'); ?> - Página Inicial">
  <meta property="twitter:description" content="">
  <meta property="twitter:image" content="https://devmagno.github.io/jic-skeleton/img/og-image.png">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#f26226">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#212121">
  <meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>


<body>

  <header class="header flex">
    <div class="header__inner container flex flex--items-c flex--justify-sb flex--wrap">
      <a class="header__logo" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-header.svg" alt="<?php bloginfo('name'); ?>">
      </a>
      <nav class="header__nav hide-on-mobile">
        <ul class="header__list flex flex--items-c flex--justify-sb flex--wrap">
          <li class="header__item"><a href="/" class="header__link header__link--active">Início</a></li>
          <li class="header__item"><a href="/sobre" class="header__link">Sobre</a></li>
          <li class="header__item"><a href="/servicos" class="header__link">Serviços</a></li>
          <li class="header__item"><a href="/anuncios" class="header__link">Anúncios</a></li>
          <li class="header__item"><a href="/contato" class="header__link">Contato</a></li>
        </ul>
      </nav>
      <button class="header__mobileButton hide-on-desk">
        <span class="hamburger"></span>
      </button>
    </div>
  </header>

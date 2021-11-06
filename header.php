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


    <?php
    if (!is_404()) { ?>
      <title><?php bloginfo("name"); ?> - <?php the_title(""); ?></title>
      <meta name="title" content="<?php bloginfo(`name`); ?> - <?php the_title(``); ?>">
    <?php } else { ?>
      <title><?php bloginfo("name"); ?> - Página não encontrada</title>
      <meta name="title" content="<?php bloginfo(`name`); ?> - Página não encontrada">
    <?php } ?>
  <meta name="description" content="<?php the_field('page-desc'); ?>">

  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php bloginfo('url'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php the_title(''); ?>">
  <meta property="og:description" content="<?php the_field('page-desc'); ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php bloginfo('url'); ?>">
  <meta property="twitter:title" content="<?php bloginfo('name'); ?> - <?php the_title(''); ?>">
  <meta property="twitter:description" content="<?php the_field('page-desc'); ?>">
  <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">

  <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg"
        color="#f26226">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/photoswipe/photoswipe.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/photoswipe/default-skin/default-skin.css">

  <meta name="msapplication-TileColor" content="#212121">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
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
        <?php
        $args = array(
            'menu' => 'header',
            'theme_location' => 'header-menu',
            'container' => false
        );
        wp_nav_menu($args);
        ?>
    </nav>
    <button class="header__mobileButton hide-on-desk">
      <span class="hamburger"></span>
    </button>
  </div>
</header>

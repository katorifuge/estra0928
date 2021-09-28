<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="http://katorifu41.com/wp-content/themes/wp-theme/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cantarell:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Noto+Serif+JP:wght@200;500&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">

  <title>株式会社estra</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="flex__item container">
      <div class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estra_logo.png" alt="estralogo"></a>
      </div>
      <nav class="header__nav">
        <ul class="header__nav-list flex__item">
          <li class="has__child"><a href="<?php echo home_url("about"); ?>" class="header__nav-list-link"><span class="border__bottom">About</span></a>
            <ul>
              <li><a href="<?php echo home_url("member"); ?>" class="header__nav-list-link-child">メンバー</a></li>
              <li><a href="<?php echo home_url("philosophy"); ?>" class="header__nav-list-link-child">経営理念</a></li>
              <li><a href="<?php echo home_url("company"); ?>" class="header__nav-list-link-child">会社概要</a></li>
              <li><a href="<?php echo home_url("greeting"); ?>" class="header__nav-list-link-child">代表挨拶</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url("news"); ?>" class="header__nav-list-link"><span class="border__bottom">News</span></a>
          </li>
          <li><a href="<?php echo home_url("service"); ?>" class="header__nav-list-link"><span class="border__bottom">Service</span></a>
          </li>
          <li class="has__child"><a href="<?php echo home_url("recruit"); ?>" class="header__nav-list-link"><span class="border__bottom">Recruit</span></a>
            <ul>
              <li><a href="<?php echo home_url("interview"); ?>" class="header__nav-list-link-child">インタビュー</a></li>
              <li><a href="<?php echo home_url("environment"); ?>" class="header__nav-list-link-child">働く環境</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url("contact"); ?>" class="header__nav-list-link"><span class="border__bottom">Contact</span></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!------------- sp ver.humburger menu ------------->
  <div class="sp-header">
    <section class="sp-header__inner">
      <div class="overlay" id="js-overlay"></div>
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__lineTop"></span>
        <span class="hamburger__lineCenter"></span>
        <span class="hamburger__lineBottom"></span>
      </div>
      <div class="sideMenu">
        <nav>
          <ul>
            <li><a href="<?php echo home_url("about"); ?>" class="sp-header__nav-list-link">About</a>
            </li>
            <li><a href="<?php echo home_url("member"); ?>" class="sp-header__nav-list-link-child">メンバー</a>
            </li>
            <li><a href="<?php echo home_url("philosophy"); ?>" class="sp-header__nav-list-link-child">経営理念</a>
            </li>
            <li><a href="<?php echo home_url("company"); ?>" class="sp-header__nav-list-link-child">会社概要</a>
            </li>
            <li><a href="<?php echo home_url("greeting"); ?>" class="sp-header__nav-list-link-child">代表挨拶</a>
            </li>
            <li><a href="<?php echo home_url("news"); ?>" class="sp-header__nav-list-link">News</a>
            </li>
            <li><a href="<?php echo home_url("service"); ?>" class="sp-header__nav-list-link">Service</a>
            </li>
            <li><a href="<?php echo home_url("recruit"); ?>" class="sp-header__nav-list-link">Recruit</a>
            </li>
            <li><a href="<?php echo home_url("interview"); ?>" class="sp-header__nav-list-link-child">インタビュー</a>
            </li>
            <li><a href="<?php echo home_url("environment"); ?>" class="sp-header__nav-list-link-child">働く環境</a>
            </li>
            <li><a href="<?php echo home_url("contact"); ?>" class="sp-header__nav-list-link">Contact</a>
            </li>
            <li><a href="<?php echo home_url("privacy"); ?>" class="sp-header__nav-list-link">個人情報保護方針</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
  </div>
  <!------------- end   sp ver.humburger menu ------------->
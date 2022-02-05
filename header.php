<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="noindex , nofollow" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="#" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="/"><img src="<?php echo esc_url(get_theme_file_uri('/images/CodeUps.svg')); ?>." alt="CodeUps" /></a>
      </h1>
      <!-- /.header-logo -->
      <nav class="header__nav-pc pc-header-nav u-desktop">
        <ul class="pc-header-nav__items">
          <li class="pc-header-nav__item"><a href="#">お知らせ</a></li>
          <li class="pc-header-nav__item"><a href="#">事業内容</a></li>
          <li class="pc-header-nav__item"><a href="#">制作実績</a></li>
          <li class="pc-header-nav__item"><a href="#">企業概要</a></li>
          <li class="pc-header-nav__item"><a href="#">ブログ</a></li>
          <li class="pc-header-nav__item"><a href="">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- /.header__nav-pc -->
      <nav class="header__nav-sp sp-header-nav">
        <ul class="sp-header-nav__items">
          <li class="sp-header-nav__item"><a href="#">トップ</a></li>
          <li class="sp-header-nav__item"><a href="#">お知らせ</a></li>
          <li class="sp-header-nav__item"><a href="#">事業内容</a></li>
          <li class="sp-header-nav__item"><a href="#">制作実績</a></li>
          <li class="sp-header-nav__item"><a href="#">企業概要</a></li>
          <li class="sp-header-nav__item"><a href="#">ブログ</a></li>
          <li class="sp-header-nav__item"><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- /.header__nav-sp -->
      <button id="MenuButton" class="header__drawer-btn hamburger u-mobile js-drawer-open">
        <span class="hamburger__bar hamburger__bar-top"></span>
        <span class="hamburger__bar hamburger__bar-mid"></span>
        <span class="hamburger__bar hamburger__bar-bottom"></span>
      </button>
      <!-- /.sp-header-nav__btn -->
    </div>
    <!-- /.header__inner -->
  </header>
  <!-- /.header -->
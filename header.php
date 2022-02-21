<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/CodeUps.svg')); ?>." alt="CodeUps" /></a>
      </h1>
      <!-- /.header-logo -->
      <nav class="header__nav-pc pc-header-nav u-desktop">
        <ul class="pc-header-nav__items">
          <li class="pc-header-nav__item<?php if (is_home('news')) echo ' current'; ?>"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="pc-header-nav__item<?php if (is_page('content')) echo ' current'; ?>"><a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
          <li class="pc-header-nav__item<?php if (is_post_type_archive('works') || is_tax('works_category') || is_singular('works')) echo ' current'; ?>"><a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></li>
          <li class="pc-header-nav__item<?php if (is_page('overview')) echo ' current'; ?>"><a href="<?php echo esc_url(home_url('/overview')); ?>">企業概要</a></li>
          <li class="pc-header-nav__item<?php if (is_post_type_archive('blog') || is_tax('blog_category') || is_singular('blog')) echo ' current'; ?>"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="pc-header-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- /.header__nav-pc -->
      <nav class="header__nav-sp sp-header-nav">
        <ul class="sp-header-nav__items">
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/overview')); ?>">企業概要</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="sp-header-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- /.header__nav-sp -->
      <button id="MenuButton" class="header__drawer-btn hamburger u-mobile js-drawer-open">
        <span class="hamburger__bar hamburger__bar-top"></span>
        <span class="hamburger__bar hamburger__bar-mid"></span>
        <span class="hamburger__bar hamburger__bar-bottom"></span>
      </button>
      <!-- /.header__drawer-btn -->
    </div>
    <!-- /.header__inner -->
  </header>
  <!-- /.header -->

  <main>
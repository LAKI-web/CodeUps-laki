<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/blog-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/blog-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">ブログ</h2>
  </div>
</section>
<!-- /.common-mv -->

<div class="l-margin--breadcrumb"></div>
<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="section-inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
<!-- breadcrumb -->

<div class="category">
  <div class="section-inner category__inner">
    <ul class="category__items">
      <li class="category__item">
        <a class="is-active" href="">ALL</a>
      </li>
      <li class="category__item">
        <a href="">カテゴリ１</a>
      </li>
      <li class="category__item">
        <a href="">カテゴリカテゴリ</a>
      </li>
      <li class="category__item">
        <a href="">カテ</a>
      </li>
    </ul>
  </div>
</div>
<!-- /.category -->

<section class="page-blog">
  <div class="page-blog__inner section-inner">
    <div class="page-blog__items cards">
      <a href="#" class="cards__item cards__item--top card">
        <figure class="card__img">
          <img src="/images/Blog/blog1.jpg" alt="コーディングの画面のPC画像" />
        </figure>
        <div class="card__body">
          <h3 class="card__title">
            タイトルが入ります。タイトルが入ります。
          </h3>
          <p class="card__text">
            説明文が入ります。説明文が入ります。説明文が入ります。
          </p>
          <div class="card__info">
            <span class="card__category">カテゴリ</span>
            <time datetime="2021-07-20" class="card__date">2021.07.20</time>
          </div>
        </div>
      </a>
      <a href="#" class="cards__item card">
        <figure class="card__img">
          <img src="/images/Blog/blog2.jpg" alt="テーブルに置かれたPC画像" />
        </figure>
        <div class="card__body">
          <h3 class="card__title">
            タイトルが入ります。タイトルが入ります。
          </h3>
          <p class="card__text">
            説明文が入ります。説明文が入ります。説明文が入ります。
          </p>
          <div class="card__info">
            <span class="card__category">カテゴリ</span>
            <time datetime="2021-07-20" class="card__date">2021.07.20</time>
          </div>
        </div>
      </a>
      <a href="#" class="cards__item card">
        <figure class="card__img">
          <img src="/images/Blog/blog3.jpg" alt="暗い背景のPC画像" />
        </figure>
        <div class="card__body">
          <h3 class="card__title">
            タイトルが入ります。タイトルが入ります。
          </h3>
          <p class="card__text">
            説明文が入ります。説明文が入ります。説明文が入ります。
          </p>
          <div class="card__info">
            <span class="card__category">カテゴリ</span>
            <time datetime="2021-07-20" class="card__date">2021.07.20</time>
          </div>
        </div>
      </a>
    </div>
    <!-- /.blog__items -->
  </div>
  <!-- /.blog__inner -->
</section>
<!-- /.blog -->
<div class="l-margin--contact"></div>
<section class="contact">
  <div class="contact__inner section-inner">
    <div class="contact__header section-header">
      <h2 class="section-header__title section-header__title--contact">
        お問い合わせ
      </h2>
      <div class="section-header__subtitle section-header__subtitle--contact">
        contact
      </div>
    </div>
    <p class="contact__text">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <div class="contact__btn">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button button--contact">お問い合わせへ</a>
    </div>
  </div>
  <!-- /.contact__inner -->
</section>
<!-- /.contact -->

<?php get_footer(); ?>
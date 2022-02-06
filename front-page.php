<?php get_header(); ?>

<section class="mv">
  <div class="swiper swiper--mv">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/MV/MV.jpg')); ?>" alt="スライダー画像1" />
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/MV/MV2.jpg')); ?>" alt="スライダー画像2" />
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/MV/MV3.jpg')); ?>" alt="スライダー画像3" />
        </div>
      </div>
    </div>
  </div>
  <!-- /.swiper -->
  <div class="mv__wrapper">
    <h2 class="mv__title">メインタイトルが入ります</h2>
    <div class="mv__subtitle">サブタイトルが入ります</div>
  </div>
</section>
<!-- /.mv -->

<div class="l-margin"></div>
<div class="news">
  <div class="section-inner news__inner">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="news__content news-post">
          <a class="news-post__link" href="<?php the_permalink(); ?>">
            <div class="news-post__info">
              <time class="news-post__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <div class="news-post__category">
                <?php $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                echo $cat_name; ?>
              </div>
            </div>
            <div class="news-post__text news-post__text--top">
              <?php the_title(); ?>
            </div>
          </a>
          <div class="news-post__btn">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="button button--news">すべて見る</a>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!-- /.news__inner -->
</div>
<!-- /.news -->

<section class="top-content">
  <div class="top-content__inner section-inner">
    <div class="top-content__header section-header">
      <h2 class="section-header__title">事業内容</h2>
      <div class="section-header__subtitle">content</div>
    </div>
  </div>
  <div class="top-content__container">
    <div class="top-content__box">
      <a href="<?php echo esc_url(home_url('/content')); ?>" class="top-content__item">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/Content/pc-ManagementPhilosophy.jpg')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Content/sp-ManagementPhilosophy.jpg ')); ?>" alt="電球を両手で持った画像" />
        </picture>
        <p class="top-content__text">経営理念ページへ</p>
      </a>
      <a href="<?php echo esc_url(home_url('/content/#philosophy1')); ?>" class="top-content__item">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/Content/pc-Philosophy1.jpg')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Content/sp-Philosophy1.jpg ')); ?>" alt="オフィスでの三人の画像" />
        </picture>
        <p class="top-content__text">理念1へ</p>
      </a>
    </div>
    <!-- /.top-content__box -->
    <div class="top-content__box">
      <a href="<?php echo esc_url(home_url('/content/#philosophy2')); ?>" class="top-content__item">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/Content/pc-Philosophy2.jpg')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Content/sp-Philosophy2.jpg ')); ?>" alt="折れ線グラフの画像" />
        </picture>
        <p class="top-content__text">理念2へ</p>
      </a>
      <a href="<?php echo esc_url(home_url('/content/#philosophy3')); ?>" class="top-content__item">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/Content/pc-Philosophy3.jpg')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Content/sp-Philosophy3.jpg')); ?>" alt="PCとスマホの画像" />
        </picture>
        <p class="top-content__text">理念3へ</p>
      </a>
    </div>
    <!-- /.top-content__box -->
  </div>
  <!-- /.top-content__container -->
</section>
<!-- /.top-content -->

<section class="works">
  <div class="works__inner section-inner">
    <div class="works__header section-header">
      <h2 class="section-header__title section-header__title--works">
        制作実績
      </h2>
      <div class="section-header__subtitle section-header__subtitle--works">
        works
      </div>
    </div>
    <!-- /.works__header -->
  </div>
  <!-- /.works__inner -->
  <div class="works__wrapper">
    <div class="works__contents section-inner">
      <div class="works__container">
        <div class="swiper swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide works__slide">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/Woks/works1.jpg')); ?>" alt="" />
            </div>
            <div class="swiper-slide works__slide">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/Woks/works2.jpg')); ?>" alt="" />
            </div>
            <div class="swiper-slide works__slide">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/Woks/works3.jpg')); ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <!-- /.works__container -->
      <div class="works__body section-body">
        <div class="section-body__inner">
          <h3 class="section-body__title">メインタイトルが入ります</h3>
          <p class="section-body__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="works__btn">
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="button">詳しく見る</a>
          </div>
        </div>
      </div>
      <!-- /.woks__body -->
    </div>
    <!-- /.works__contents -->
  </div>
  <!-- /.works__wrapper -->
</section>
<!-- /.works -->

<section class="overview">
  <div class="overview__inner section-inner">
    <div class="overview__header section-header">
      <h2 class="section-header__title section-header__title--overview">
        企業概要
      </h2>
      <div class="section-header__subtitle section-header__subtitle--overview">
        overview
      </div>
    </div>
    <!-- /.overview__header -->
  </div>
  <!-- /.overview__inner -->
  <div class="overview__wrapper">
    <div class="overview__contents section-inner">
      <figure class="overview__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/Overview/overview.jpg')); ?>" alt="オフィスの廊下の画像" />
      </figure>
      <div class="overview__body section-body">
        <div class="section-body__inner">
          <h3 class="section-body__title">メインタイトルが入ります</h3>
          <p class="section-body__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="overview__btn">
            <a href="<?php echo esc_url(home_url('/overview')); ?>" class="button">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.overview__contents -->
  </div>
  <!-- /.overview__wrapper -->
</section>
<!-- /.overview -->

<section class="blog">
  <div class="blog__inner section-inner">
    <div class="blog__header section-header">
      <h2 class="section-header__title section-header__title--blog">
        ブログ
      </h2>
      <div class="section-header__subtitle section-header__subtitle--blog">
        blog
      </div>
    </div>
    <div class="blog__items cards">
      <a href="#" class="cards__item cards__item--top card">
        <figure class="card__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Blog/blog1.jpg')); ?>" alt="コーディングの画面のPC画像" />
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
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Blog/blog2.jpg')); ?>" alt="テーブルに置かれたPC画像" />
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
          <img src="<?php echo esc_url(get_theme_file_uri('/images/Blog/blog3.jpg')); ?>" alt="暗い背景のPC画像" />
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
    <div class="blog__btn">
      <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">詳しく見る</a>
    </div>
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
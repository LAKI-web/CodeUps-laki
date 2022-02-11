<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/works-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/works-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">制作実績</h2>
  </div>
</section>
<!-- /.common-mv -->

<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="section-inner breadcrumb__inner">
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

<section class="page-works">
  <div class="page-works___contents">
    <a href="#" class="page-works__content my-work">
      <div class="my-work__category">カテゴリ１</div>
      <img class="my-work__img" src="/images/page-works/woks-1-sp.jpg" alt="" />
      <h3 class="my-work__title">CodeUps株式会社</h3>
    </a>
    <!-- /.page-works__content -->
    <a href="#" class="page-works__content my-work">
      <div class="my-work__category">カテゴリ１</div>
      <img class="my-work__img" src="/images/page-works/woks-1-sp.jpg" alt="" />
      <h3 class="my-work__title">CodeUps株式会社</h3>
    </a>
    <!-- /.page-works__content -->
    <a href="#" class="page-works__content my-work">
      <div class="my-work__category">カテゴリ１</div>
      <img class="my-work__img" src="/images/page-works/woks-1-sp.jpg" alt="" />
      <h3 class="my-work__title">CodeUps株式会社</h3>
    </a>
    <!-- /.page-works__content -->
    <a href="#" class="page-works__content my-work">
      <div class="my-work__category">カテゴリ１</div>
      <img class="my-work__img" src="/images/page-works/woks-1-sp.jpg" alt="" />
      <h3 class="my-work__title">CodeUps株式会社</h3>
    </a>
    <!-- /.page-works__content -->
    <a href="#" class="page-works__content my-work">
      <div class="my-work__category">カテゴリ１</div>
      <img class="my-work__img" src="/images/page-works/woks-1-sp.jpg" alt="" />
      <h3 class="my-work__title">CodeUps株式会社</h3>
    </a>
    <!-- /.page-works__content -->
  </div>
  <!-- /.page-works__contents -->
</section>
<!-- /.page-works -->

<div class="l-margin--pagenavi"></div>
<?php wp_pagenavi(); ?>
<!-- /.pagenation -->

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
      <a href="" class="button button--contact">お問い合わせへ</a>
    </div>
  </div>
  <!-- /.contact__inner -->
</section>
<!-- /.contact -->

<?php get_footer(); ?>
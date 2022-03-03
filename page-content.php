<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/content-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/content-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">事業内容</h2>
  </div>
</section>
<!-- /.common-mv -->

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
<!-- breadcrumb -->

<div class="l-margin--content"></div>
<section class="page-content">
  <div class="page-content__inner section-inner">
    <div class="page-content__header section-header">
      <h3 class="section-header__title">企業理念</h3>
      <p class="section-header__text">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div>
  
  <div class="page-content__contents">
    <div id="philosophy1" class="page-content__content">
      <div class="page-content__img">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-1-pc.jpg')); ?>" media="(min-width: 768px)" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-1-sp.jpg')); ?>" alt="" />
        </picture>
      </div>
      <div class="page-content__wrapper">
        <h3 class="page-content__title">企業理念1</h3>
        <p class="page-content__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
    <!-- /.page-content__content -->
    <div id="philosophy2" class="page-content__content">
      <div class="page-content__img">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-2-pc.jpg')); ?>" media="(min-width: 768px)" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-2-sp.jpg')); ?>" alt="" />
        </picture>
      </div>
      <div class="page-content__wrapper">
        <h3 class="page-content__title">企業理念2</h3>
        <p class="page-content__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
    <!-- /.page-content__content -->
    <div id="philosophy3" class="page-content__content">
      <div class="page-content__img">
        <picture>
          <source srcset="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-3-pc.jpg')); ?>" media="(min-width: 768px)" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/page-content/content-3-sp.jpg')); ?>" alt="" />
        </picture>
      </div>
      <div class="page-content__wrapper">
        <h3 class="page-content__title">企業理念3</h3>
        <p class="page-content__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
    <!-- /.page-content__content -->
  </div>
  <!-- /.page-content__contents -->
  </div>
</section>
<!-- /.page-content -->

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
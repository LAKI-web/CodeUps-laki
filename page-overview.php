<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/overview-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/overview-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">企業概要</h2>
  </div>
</section>
<!-- /.common-mv -->

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
<!-- breadcrumb -->

<div class="l-margin--overview"></div>
<div class="page-overview">
  <div class="section-inner">
    <dl class="page-overview__info explain">
      <div class="explain__block">
        <dt class="explain__header">会社名</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">設立</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">資本金</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">売上高</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">代表者</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">従業員数</dt>
        <dd class="explain__description">テキストが入ります。</dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">事業内容</dt>
        <dd class="explain__description">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </dd>
      </div>
      <div class="explain__block">
        <dt class="explain__header">所在地</dt>
        <dd class="explain__description">東京駅</dd>
      </div>
    </dl>
  </div>
</div>

<div class="l-margin--map"></div>
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975468369!2d139.7432442156191!3d35.658580480199596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1643713595714!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
</div>

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
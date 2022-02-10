<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/news-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/news-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">お知らせ</h2>
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

<div class="l-margin--news"></div>
<div class="news">
  <div class="section-inner news__inner--page">
    <?php if (have_posts()) : ?>
      <ul class="news__wrapper">
        <?php while (have_posts()) : the_post(); ?>
          <li class="news__content news-post news-post--page">
            <a class="news-post__link" href="<?php the_permalink(); ?>">
              <div class="news-post__info">
                <time class="news-post__date news-post__date--page" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <div class="news-post__category">
                  <?php $category = get_the_category();
                  $cat_name = $category[0]->cat_name;
                  echo $cat_name; ?>
                </div>
              </div>
              <div class="news-post__text news-post__text--page">
                <?php the_title(); ?>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
  <!-- /.news__inner--page -->
</div>
<!-- /.news -->

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
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button button--contact">お問い合わせへ</a>
    </div>
  </div>
  <!-- /.contact__inner -->
</section>
<!-- /.contact -->

<?php get_footer(); ?>
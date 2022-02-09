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
      <li>
        <a href="<?php echo esc_url(home_url('/blog')); ?>">ALL</a>
      </li>
      <?php
      $args = [
        'taxonomy' => 'blog_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) {
        echo '<li class="category__item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
      }
      ?>
    </ul>
  </div>
</div>
<!-- /.category -->

<section class="page-blog">
  <div class="page-blog__inner section-inner">
    <div class="page-blog__items cards">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('loop-card'); ?>
        <?php endwhile; ?>
      <?php else :
        //記事が存在しなかった場合
        echo '<div class="p-blog__row">';
        echo '<a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a>';
        echo '</div>';
      ?>
      <?php endif; ?>
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
<?php get_header(); ?>

<div class="l-margin--breadcrumb"></div>
<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="section-inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
<!-- breadcrumb -->

<div class="l-margin--article"></div>
<article class="article">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="article__inner">
          <h1 class="article__title">
            <?php the_title(); ?>
          </h1>
          <div class="article__info article-meta">
            <time datetime="<?php the_time('Y/m/d'); ?>" class="article-meta__date"><?php the_time('Y/m/d'); ?></time>
            <div class="article-meta__category">
              <?php
              $terms = get_the_terms($post->ID, 'blog_category');
              foreach ($terms as $term) {
                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
              }
              ?>
            </div>
          </div>
          <figure class="article__thumbnail">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>" alt="NO-IMAGE">
            <?php endif; ?>
          </figure>
          <div class="article__content">
            <?php the_content(); ?>
          </div>
          <!-- /.article__content -->
        </div>
        <!-- /.article__inner -->
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</article>
<!-- /.article -->

<div class="l-margin--article-recommend"></div>
<div class="article-recommend">
  <div class="section-inner">
    <h3 class="article-recommend__title">おすすめ記事</h3>
    <div class="article-recommend__items cards">
      <a href="#" class="cards__item cards__item--recommend card">
        <figure class="card__img card__img--recommend">
          <img src="/images/Blog/blog1.jpg" alt="コーディングの画面のPC画像" />
        </figure>
        <div class="card__body">
          <h3 class="card__title card__title--recommend">
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
    <!-- /.article-recommend__items -->
  </div>
  <!-- /.section-inner -->
</div>
<!-- /.article-recommend -->

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
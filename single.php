<?php get_header(); ?>

<div class="l-margin--header"></div>

<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="section-inner breadcrumb__inner">
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
              $terms = get_the_terms($post->ID, 'category');
              foreach ($terms as $term) {
                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
              }
              ?>
            </div>
          </div>
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

<div class="article__links">
  <?php if (get_previous_post_link()) : ?>
    <div class="article__link article__link--prev"><?php previous_post_link('%link', 'PREV'); ?></div>
  <?php endif; ?>
  <a class="article__home" href="<?php echo esc_url(home_url('/blog')); ?>">一覧</a>
  <?php if (get_next_post_link()) : ?>
    <div class="article__link article__link--next"><?php next_post_link('%link', 'NEXT'); ?></div>
  <?php endif; ?>
</div>
<!-- /.article__links -->

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
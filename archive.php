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

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
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
                  <?php
                  $terms = get_the_terms($post->ID, 'category');
                  foreach ($terms as $term) {
                    echo $term->name;
                  }
                  ?>
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

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
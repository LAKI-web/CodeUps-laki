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

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
<!-- breadcrumb -->

<div class="category">
  <div class="section-inner category__inner">
    <ul class="category__items">
      <li class="category__item">
        <a href="<?php echo esc_url(home_url('/blog')); ?>">ALL</a>
      </li>
      <?php
      $args = [
        'taxonomy' => 'blog_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
      ?>
        <li class="category__item">
          <a href=" <?php echo get_term_link($term); ?>" class="<?php if (is_object_in_term(get_the_ID(), 'blog_category', $term->slug)) {
                                                                  echo 'cat-current';
                                                                } ?>">
            <?php echo $term->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<!-- /.category -->

<section class="page-blog">
  <div class="page-blog__inner section-inner">
    <div class="page-blog__items cards">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/loop', 'card'); ?>
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

<div class="l-margin--pagenavi"></div>
<?php wp_pagenavi(); ?>
<!-- /.pagenation -->

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
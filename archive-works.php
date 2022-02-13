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
        <a href="<?php echo esc_url(home_url('/works')); ?>" <?php if (!is_front_page() && get_post_type() === 'blog') echo ' class="cat-current"'; ?>>ALL</a>
      </li>
      <?php
      $args = [
        'taxonomy' => 'works_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) {
        echo '<li class="category__item">';
        echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
        echo '</li>';
      }
      ?>
    </ul>
  </div>
</div>
<!-- /.category -->

<section class="page-works">
  <div class="page-works___contents">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="page-works__content my-work">
          <figure class="my-work__img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>" alt="NO-IMAGE">
            <?php endif; ?>
            <div class="my-work__category">
              <?php
              $terms = get_the_terms($post->ID, 'works_category');
              foreach ($terms as $term) {
                echo $term->name;
              }
              ?>
            </div>
          </figure>
          <h3 class="my-work__title">
            <?php the_title(); ?>
          </h3>
        </a>
        <!-- /.page-works__content -->
      <?php endwhile; ?>
    <?php else :
      //記事が存在しなかった場合
      echo '<div class="page-works__row">';
      echo '<a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a>';
      echo '</div>';
    ?>
    <?php endif; ?>
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
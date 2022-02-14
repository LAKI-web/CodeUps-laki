<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/blog-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/blog-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">制作実績</h2>
  </div>
</section>
<!-- /.common-mv -->

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
<!-- breadcrumb -->

<div class="category">
  <div class="section-inner category__inner">
    <ul class="category__items">
      <li class="category__item">
        <a href="<?php echo esc_url(home_url('/works')); ?>">ALL</a>
      </li>
      <?php
      $args = [
        'taxonomy' => 'works_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
      ?>
        <li class="category__item">
          <a href=" <?php echo get_term_link($term); ?>" class="<?php if (is_object_in_term(get_the_ID(), 'works_category', $term->slug)) {
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

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
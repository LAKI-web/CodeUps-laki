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
              $terms = get_the_terms($post->ID, 'blog_category');
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

<div class="l-margin--article-recommend"></div>
<div class="article-recommend">
  <div class="section-inner">
    <h3 class="article-recommend__title">おすすめ記事</h3>
    <div class="article-recommend__items cards">
      <?php
      $terms = get_the_terms($post->ID, 'blog_category');
      foreach ($terms as $term) {
        $term_slug = $term->slug; // 現在表示している投稿に属しているタームを取得
      }
      $args = array(
        'post_type' => 'blog', // 投稿タイプのスラッグを指定
        'post__not_in' => array($post->ID), // 現在表示している投稿を除外
        'posts_per_page' => 4, // 表示件数9件
        'orderby' =>  'rand', // ランダム
        'tax_query' => array( // タクソノミーの指定
          array(
            'taxonomy' => 'blog_category',
            'field' => 'slug',
            'terms' => $term_slug, // 取得したタームを指定
          )
        )
      );
      $my_query = new WP_Query($args);
      ?>
      <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="cards__item cards__item--recommend card">
            <figure class="card__img card__img--recommend">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>" alt="NO-IMAGE">
              <?php endif; ?>
            </figure>
            <div class="card__body">
              <h3 class="card__title card__title--recommend">
                <?php
                $word_count = '20'; //表示する文字数
                $post_title = get_the_title(); //タイトル取得
                $post_title_count = mb_strlen($post_title); //タイトルの文字数取得
                $post_title = mb_substr($post_title, 0, $word_count); //タイトルの頭16文字取得
                echo $post_title; //タイトル表示
                if ($post_title_count > $word_count) { //表示文字数がタイトル文字数より多い場合
                  echo '...'; //三点リーダ表示
                }
                ?>
              </h3>
              <div class="card__info">
                <div class="card__category tag">
                  <ul class="tag__items">
                    <?php
                    $terms = get_the_terms($post->ID, 'blog_category');
                    foreach ($terms as $term) {
                      echo '<li class="tag__item">' . $term->name . '</li>';
                    }
                    ?>
                  </ul>
                </div>
                <time class="card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else :
        //記事が存在しなかった場合
        echo '<div class="p-blog__row">';
        echo '<a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a>';
        echo '</div>';
      ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
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
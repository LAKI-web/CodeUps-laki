<?php get_header(); ?>

<div class="l-margin--header"></div>

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
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
            <?php if (is_singular('post')) : ?>
              <div class="article-meta__category">
                <?php the_category(); ?>
              </div>
            <?php elseif (is_singular('blog')) : ?>
              <div class="article-meta__category">
                <?php
                $terms = get_the_terms($post->ID, 'blog_category');
                foreach ($terms as $term) {
                  echo '<a href="' . esc_url(get_term_link($term)) . '">' . $term->name . '</a>';
                }
                ?>
              </div>
            <?php endif; ?>
          </div>
          <!-- /.article__info -->
          <div class="article__content">
            <?php the_content(); ?>
          </div>
          <!-- /.article__content -->
        </div>
        <!-- /.article__inner -->
      </div>

      <div class="article__links">
        <?php if (get_previous_post_link()) : ?>
          <div class="article__links-prev">
            <?php previous_post_link('%link', 'PREV'); ?>
          </div>
        <?php endif; ?>

        <?php if (is_singular('post')) : ?>
          <a href="<?php echo esc_url(home_url('/news')); ?>">一覧</a>
        <?php elseif (is_singular('blog')) : ?>
          <a href="<?php echo esc_url(home_url('/blog')); ?>">一覧</a>
        <?php endif; ?>

        <?php if (get_next_post_link()) : ?>
          <div class="article__links-next">
            <?php next_post_link('%link', 'NEXT'); ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- /.article__links -->

    <?php endwhile; ?>
  <?php endif; ?>
</article>
<!-- /.article -->


<div class="l-margin--article-recommend"></div>
<div class="article-recommend">
  <div class="section-inner">
    <h3 class="article-recommend__title">おすすめ記事</h3>
    <div class="article-recommend__items cards">
      <?php if (is_singular('post')) : ?>
        <!-- 投稿ページ -->
        <?php
        $terms = get_the_terms($post->ID, 'category');
        foreach ($terms as $term) {
          $term_slug = $term->slug; // 現在表示している投稿に属しているタームを取得
        }
        $args = array(
          'post_type' => 'post', // 投稿タイプのスラッグを指定
          'post__not_in' => array($post->ID), // 現在表示している投稿を除外
          'posts_per_page' => 4, // 表示件数4件
          'orderby' =>  'rand', // ランダム
          'tax_query' => array( // タクソノミーの指定
            array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => $term_slug, // 取得したタームを指定
            )
          )
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) :  ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                  <?php echo esc_html(text_restriction(get_the_title(), 20, '...')); ?>
                </h3>
                <div class="card__info">
                  <div class="card__category tag">
                    <ul class="tag__items">
                      <?php
                      $terms = get_the_terms($post->ID, 'category');
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
          <?php wp_reset_postdata(); ?>
        <?php else :
          //記事が存在しなかった場合
          echo '<div class="p-blog__row">';
          echo '<a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a>';
          echo '</div>';
        ?>
        <?php endif; ?>


      <?php elseif (is_singular('blog')) : ?>
        <!-- ブログページ -->
        <?php
        $terms = get_the_terms($post->ID, 'blog_category');
        foreach ($terms as $term) {
          $term_slug = $term->slug; // 現在表示している投稿に属しているタームを取得
        }
        $args = array(
          'post_type' => 'blog', // 投稿タイプのスラッグを指定
          'post__not_in' => array($post->ID), // 現在表示している投稿を除外
          'posts_per_page' => 4, // 表示件数4件
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
                  <?php echo esc_html(text_restriction(get_the_title(), 20, '...')); ?>
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
          <?php wp_reset_postdata(); ?>
        <?php else :
          //記事が存在しなかった場合
          echo '<div class="p-blog__row">';
          echo '<a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a>';
          echo '</div>';
        ?>
        <?php endif; ?>

      <?php endif; ?>
    </div>
    <!-- /.article-recommend__items -->
  </div>
  <!-- /.section-inner -->
</div>
<!-- /.article-recommend -->

<?php get_template_part('template-parts/loop', 'contact'); ?>
<!-- /.contact -->

<?php get_footer(); ?>
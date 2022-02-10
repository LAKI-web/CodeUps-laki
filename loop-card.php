<a href="<?php the_permalink(); ?>" class="cards__item card">
  <figure class="card__img">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('full'); ?>
    <?php else : ?>
      <img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>" alt="NO-IMAGE">
    <?php endif; ?>
  </figure>
  <div class="card__body">
    <h3 class="card__title">
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
    <p class="card__text">
      <?php the_excerpt(); ?>
    </p>
    <div class="card__info">
      <span class="card__category">
        <?php
        $terms = get_the_terms($post->ID, 'blog_category');
        foreach ($terms as $term) {
          echo  $term->name;
        }
        ?>
      </span>
      <time class="card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    </div>
  </div>
</a>
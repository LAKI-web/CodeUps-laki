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
      <?php echo esc_html(text_restriction(get_the_title(), 20, '...')); ?>
    </h3>
    <div class="card__text">
      <?php the_excerpt(); ?>
    </div>
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
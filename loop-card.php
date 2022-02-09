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
      <?php the_title(); ?>
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
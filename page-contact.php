<?php get_header(); ?>

<section class="common-mv">
  <div class="common-mv__img">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri('/images/common-mv/contact-pc.jpg')); ?>" media="(min-width: 768px)" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common-mv/contact-sp.jpg')); ?>" alt="" />
    </picture>
  </div>
  <div class="common-mv__wrapper">
    <h2 class="common-mv__title">お問い合わせ</h2>
  </div>
</section>
<!-- /.common-mv -->

<?php get_template_part('template-parts/loop', 'breadcrumb'); ?>
<!-- breadcrumb -->

<div class="l-margin--contact-form"></div>
<div class="contact-form">
  <div class="contact-form__inner">
    <?php echo do_shortcode('[contact-form-7 id="363" title="お問い合わせ"]'); ?>
    <!-- /.contact-form__items -->
  </div>
  <!-- /.section-inner -->
</div>
<!-- /.contact-form -->

<?php get_footer(); ?>
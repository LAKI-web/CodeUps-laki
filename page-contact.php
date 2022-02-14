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
  <div class="section-inner">
    <div class="contact-form__items">
      <div class="contact-form__item">
        <p class="contact-form__item-label">※会社名</p>
        <input type="text" class="contact-form__text" placeholder="テキストがはいります" />
      </div>
      <div class="contact-form__item">
        <p class="contact-form__item-label">※お名前</p>
        <input type="text" class="contact-form__text" placeholder="テキストがはいります" />
      </div>
      <div class="contact-form__item">
        <p class="contact-form__item-label">※ふりがな</p>
        <input type="text" class="contact-form__text" placeholder="テキストがはいります" />
      </div>
      <div class="contact-form__item">
        <p class="contact-form__item-label">※メールアドレス</p>
        <input type="text" class="contact-form__text" placeholder="テキストがはいります" />
      </div>
      <div class="contact-form__item">
        <p class="contact-form__item-label">※お問い合わせ内容</p>
        <textarea class="contact-form__textarea" placeholder="テキストがはいります"></textarea>
      </div>
      <div class="contact-form__submit-btn">
        <input class="contact-form__submit" type="submit" value="送信" />
      </div>
    </div>
    <!-- /.contact-form__items -->
  </div>
  <!-- /.section-inner -->
</div>
<!-- /.contact-form -->

<?php get_footer(); ?>
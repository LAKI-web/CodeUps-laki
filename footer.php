</main>
<!-- /.main -->

<footer class="footer">
  <div class="footer__wrapper">
    <div class="footer__head">
      <div class="footer__logo">
        <a href="#">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/CodeUps.svg')); ?>" alt="CodeUps" />
        </a>
      </div>
      <!-- /.footer-logo -->
      <nav class="footer__nav footer-nav">
        <ul class="footer-nav__items">
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/overview')); ?>">企業概要</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
          </li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <!-- /.footer__nav -->
    </div>
    <!-- /.footer__head -->
    <div class="footer__bottom">
      <p class="footer__copyright">&copy; 2021 CodeUps Inc.</p>
    </div>
    <!-- /.footer__bottom -->
  </div>
  <!-- /.footer__wrapper -->
</footer>
<!-- /.footer -->

<div class="page-top"><a href="#"></a></div>
<!-- /.page-top -->

<?php wp_footer(); ?>
</body>

</html>
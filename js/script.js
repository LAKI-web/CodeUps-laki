jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    $(".js-drawer-open").toggleClass("open");
    $(".sp-header-nav").toggleClass("open");
    $(".page-top").fadeOut();
    $("html").toggleClass("is-fixed");
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on("click", 'a[href*="#"]', function () {
    let time = 300;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  //ヘッダー途中から色変更
  var elemTop = $(".mv,.common-mv,.breadcrumb__inner").outerHeight();
  $(window).on("scroll", function () {
    if (elemTop < $(this).scrollTop()) {
      $(".header__inner").addClass("header__inner--color");
    } else {
      $(".header__inner").removeClass("header__inner--color");
    }
  });

  //top-worksのSwiper
  var top_worksSwiper = new Swiper(".swiper--top-works", {
    autoplay: {
      delay: 4000,
    },
    speed: 2000,
    loop: true, //最後に達したら先頭に戻る
    //ページネーション表示の設定
    pagination: {
      el: ".swiper-pagination",
      //ページネーションの要素
      type: "bullets",
      //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
  });

  //メインビューのSwiper
  var mvSwiper = new Swiper(".swiper--mv", {
    loop: true,
    //最後に達したら先頭に戻る
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  });

  //worksのSwiperメイン

  //メイン
  var slider = new Swiper(".gallery__slider", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 6, //スライドの枚数と同じ値を指定
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 4000,
    },
    speed:2000,
  });

  //サムネイル
  var thumbs = new Swiper(".gallery__thumbs", {
    slidesPerView: "auto",
    spaceBetween: 24,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
  });

  //4系～
  //メインとサムネイルを紐づける
  slider.controller.control = thumbs;
  thumbs.controller.control = slider;

  //固定ヘッダー時のリンク位置調整
  //ページ内リンク
  var headerHight = 80; //ヘッダの高さ
  $("a[href^=#]").click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    return false;
  });

  //別ページリンク
  $(window).on("load", function () {
    // ページのURLを取得
    const url = $(location).attr("href"),
      // headerの高さを取得してそれに30px追加した値をheaderHeightに代入
      headerHeight = $("header").outerHeight() + 80;
    // urlに「#」が含まれていれば
    if (url.indexOf("#") != -1) {
      // urlを#で分割して配列に格納
      const anchor = url.split("#"),
        // 分割した最後の文字列（#◯◯の部分）をtargetに代入
        target = $("#" + anchor[anchor.length - 1]),
        // リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
        position = Math.floor(target.offset().top) - headerHeight;
      // positionの位置に移動
      $("html, body").animate({ scrollTop: position }, 100);
    }
  });
});

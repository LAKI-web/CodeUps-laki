
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
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  //ヘッダー途中から色変更
  var elemTop = $(".mv,.common-mv").outerHeight();
  $(window).on("scroll", function () {
    if (elemTop < $(this).scrollTop()) {
      $(".header__inner").addClass("header__inner--color");
    } else {
      $(".header__inner").removeClass("header__inner--color");
    }
  });

  
  //Swiper
  var worksSwiper = new Swiper(".swiper2", {
    autoplay: {
      delay: 2000,
    },
    loop: true,
    //最後に達したら先頭に戻る
    //ページネーション表示の設定
    pagination: {
      el: ".swiper-pagination",
      //ページネーションの要素
      type: "bullets",
      //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
  });
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
});

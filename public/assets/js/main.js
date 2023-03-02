"use strict";

// ハンバーガーメニュー開閉
$(window).on('load resize', function () {
  var winW = $(window).width();
  var devW = 1079;
  if (winW <= devW) {
  $(".g-nav").addClass('slide-out');
  $(".g-nav").removeClass('slide-in');
  $(".hamburger").removeClass('active');
  $(".header__logo").removeClass('none');
    $(".hamburger").click(function () {
      $(this).toggleClass('active');
      $(".g-nav").toggleClass('slide-in');
      $(".g-nav").toggleClass('slide-out');
      $(".header__logo").toggleClass('none');
    });
  } else {
    $(".g-nav").removeClass('slide-out');
  }
});


// TOPに戻るボタン スクロールしながらページ上部へ
$('#topreturn').click(function () {
  var scroll = $(window).scrollTop(); //スクロール値を取得
  if (scroll > 0) {
    $(this).addClass('floatAnime');//クリックしたらfloatAnimeというクラス名が付与
    $('body,html').animate({
      scrollTop: 0
    }, 2000, function () {//スクロールの速さ。数字が大きくなるほど遅くなる
      $('#topreturn').removeClass('floatAnime');//上までスクロールしたらfloatAnimeというクラス名を除く
    });
  }
  return false;//リンク自体の無効化
})

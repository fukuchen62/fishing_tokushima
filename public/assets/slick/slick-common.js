

// スライド
// $(function () {
//     var $slider6 = $('#js-slider-6');

//     /*--- 連動サムネイル（ドット）設定 -----------------------*/
//     // スライダー初期化時
//     $slider6.on('init', function (event, slick, currentSlide, nextSlide) {
//     // スライドアイテム取得
//     slideItem = $('#js-slider-6 .slick-slide')
//     // スライドの数だけループ
//     for (var i = 0; i < slick.slideCount; i++) {
//       // ループ回数をキーにn番目のスライドを取得
//     var slideImg = slideItem.filter(function () {
//         return $(this).data('slick-index') === i;
//     }).find('img').clone();
//       // n番目のドットを取得
//     var dot = $('.thumbs_list').find("li").eq(i);
//       // n番目のスライド画像のURLを取得
//     var src = slideImg.attr('src');
//       // n番目のドットにn番目のスライド画像を背景に当て込み
//     dot.css('background', "url(".concat(src, ")"));
//       // 背景の表示の仕方を指定
//     dot.css('background-size', 'cover');
//     }
//     });

//     $slider6.slick({
//     arrows: false, // 前・次のボタンを表示しない
//     dots: true, // ドットナビゲーションを表示する
//     dotsClass: 'thumbs_list', // ドットのクラス名を変更
//     appendDots: $('.thumbs_dots'), // ドットの生成位置を変更
//     customPaging: function (slick, index) { // ドットの中身を空にする
//     return '';
//     },
//     fade: true, // スライド切り替えをフェード
//     autoplay: false, //自動再生させない
//     slidesToShow: 1, // 表示させるスライド数
//     });

// });

// スライダー２
$(function () {
  $(".js-sub-imge1 .s-img").on("click", function () {
    // メイン画像に切り替えるimgのsrc取得
    img = $(this).attr("src");
    // currentクラス付け替え(枠線などを変えたい時に)
    $(".js-sub-img1 .sl").removeClass("current1");
    $(this).parent().addClass("current1");
    // fadeOutできたらsrc変更してfadeIn
    $(".js-main-img1 .m-img").fadeOut(50, function () {
      $(".js-main-img1 .m-img")
        .attr("src", img)
        .on("load", function () {
          $(this).fadeIn(500);
        });
    });
  });
});


// スライダー２
$(function () {
  $(".js-sub-img img").on("click", function () {
    // メイン画像に切り替えるimgのsrc取得
    img = $(this).attr("src");
    // currentクラス付け替え(枠線などを変えたい時に)
    $(".js-sub-img li").removeClass("current");
    $(this).parent().addClass("current");
    // fadeOutできたらsrc変更してfadeIn
    $(".js-main-img img").fadeOut(50, function () {
      $(".js-main-img img")
        .attr("src", img)
        .on("load", function () {
          $(this).fadeIn(500);
        });
    });
  });
});

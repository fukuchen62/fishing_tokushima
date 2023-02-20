

// スライダー1
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

// スライダー２
  $('.center').slick({
    infinite: true,
    dots: true,
    centerMode: true, //要素を中央寄せ
    centerPadding: '10%', //両サイドの見えている部分のサイズ
    autoplay: true,
    speed: 500,
  });

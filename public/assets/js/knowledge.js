"use strict";

$(function () {
  $('.tab').on('click', function() {
    $('.tab, .panel').removeClass('active');
    $(this).addClass('active');
    var index = $('.tab').index(this);
    $('.panel').eq(index).addClass('active');
  });
});

$(window).on('load', function () {
  $('.tab_item:first-child').addClass('active');

  const $category = $('input:hidden[name="category"]').val();

  switch ($category) {
    case "1":
      // カテゴリ１を選択
      $('.active').removeClass('active');
      $('.category1').addClass('active');
      break;

    case "2":
        // カテゴリ２を選択
        $('.active').removeClass('active');
        $('.category2').addClass('active');
      break;

    case "3":
        // カテゴリ３を選択
        $('.active').removeClass('active');
        $('.category3').addClass('active');
      break;

    case "4":
        // カテゴリ４を選択
        $('.active').removeClass('active');
        $('.category4').addClass('active');
      break;
  }
})


// クリックしたらタブのスタイルが変わる
// $(function () {
//   $('.tab_item').on('click', function () {
//     $('.tab_item').removeClass('active');
//     $(this).addClass('active');
//   });
// });

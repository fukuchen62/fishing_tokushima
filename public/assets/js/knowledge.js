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

  // カテゴリ１を選択
  // $('.active').removeClass('active');
  // $('category1').addClass('active');

  // カテゴリ２を選択
  // $('.active').removeClass('active');
  // $('category2').addClass('active');

    // カテゴリ３を選択
  // $('.active').removeClass('active');
  // $('category3').addClass('active');

    // カテゴリ４を選択
  // $('.active').removeClass('active');
  // $('category4').addClass('active');
})


// クリックしたらタブのスタイルが変わる
// $(function () {
//   $('.tab_item').on('click', function () {
//     $('.tab_item').removeClass('active');
//     $(this).addClass('active');
//   });
// });

"use strict";


// クリックしたらタブのスタイルが変わる
$(window).on('load', function () {
    // $('.tab_item:first-child').addClass('active');

    const $category = $('input:hidden[name="category"]').val();

    switch ($category) {
    case "1":
      // カテゴリ１を選択
      $('.active').removeClass('active');
      $('.city_id1').addClass('active');
      break;

    case "2":
        // カテゴリ２を選択
        $('.active').removeClass('active');
        $('.city_id2').addClass('active');
      break;

    case "3":
        // カテゴリ３を選択
        $('.active').removeClass('active');
        $('.city_id3').addClass('active');
      break;

    case "4":
        // カテゴリ４を選択
        $('.active').removeClass('active');
        $('.city_id4').addClass('active');
      break;
  }
})

"use strict";


// タブの変更
$(window).on('load', function () {
    // デフォルト
    $('.tab_item:first-child').addClass('active');

    const $category = $('input:hidden[name="category"]').val();

if ($category=="spot"){
    //   スポットを選択
    $('.active').removeClass('active');
    $('.spot').addClass('active');
}else if($category=="plan"){
    //   プランを選択
    $('.active').removeClass('active');
    $('.plan').addClass('active');
    }
})

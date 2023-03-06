"use strict";

/**
 * 指定月のURLを生成してサーバーに送る
 */
// function make_page(id) {
//     var url = location.href;

//     var num = url.indexOf("?");
//     if (num > 0) {
//         url = url.substring(0, num);
//     }

//     location.href = url + "/?month=" + id;
// }

// jQuery
// $(function () {
// 指定月を変数に代入
// var month = "2";
// if (month == "n") {
//     month = 11;
// }
// if (month == "d") {
//     month = 12;
// }

// 当月を選択している状態にしている
//     $("button#" + month).addClass("this-month");
// });

// クリックしたらタブのスタイルが変わる
$(window).on("load", function () {
    const $month_choice = $('input:hidden[name="month_choice"]').val();

    switch ($month_choice) {
        case "1":
            // 1月を選択
            $(".active2").removeClass("active2");
            $(".secList1").addClass("active2");
            break;

        case "2":
            // 2月を選択
            $(".active2").removeClass("active2");
            $(".secList2").addClass("active2");
            break;

        case "3":
            // 3月を選択
            $(".active2").removeClass("active2");
            $(".secList3").addClass("active2");
            break;

        case "4":
            // 4月を選択
            $(".active2").removeClass("active2");
            $(".secList4").addClass("active2");
            break;

        case "5":
            // 5月を選択
            $(".active2").removeClass("active2");
            $(".secList5").addClass("active2");
            break;

        case "6":
            // 6月を選択
            $(".active2").removeClass("active2");
            $(".secList6").addClass("active2");
            break;

        case "7":
            // 7月を選択
            $(".active2").removeClass("active2");
            $(".secList7").addClass("active2");
            break;

        case "8":
            // 8月を選択
            $(".active2").removeClass("active2");
            $(".secList8").addClass("active2");
            break;

        case "9":
            // 9月を選択
            $(".active2").removeClass("active2");
            $(".secList9").addClass("active2");
            break;

        case "a":
            // 10月を選択
            $(".active2").removeClass("active2");
            $(".secList10").addClass("active2");
            break;

        case "b":
            // 11月を選択
            $(".active2").removeClass("active2");
            $(".secList11").addClass("active2");
            break;

        case "c":
            // 12月を選択
            $(".active2").removeClass("active2");
            $(".secList12").addClass("active2");
            break;
    }
});

// クリックしたらタブのスタイルが変わる
// $(function () {
//   $('.tab_item').on('click', function () {
//     $('.tab_item').removeClass('active');
//     $(this).addClass('active');
//   });
// });

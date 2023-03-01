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
            $(".active").removeClass("active");
            $(".secList1").addClass("active");
            break;

        case "2":
            // 2月を選択
            $(".active").removeClass("active");
            $(".secList2").addClass("active");
            break;

        case "3":
            // 3月を選択
            $(".active").removeClass("active");
            $(".secList3").addClass("active");
            break;

        case "4":
            // 4月を選択
            $(".active").removeClass("active");
            $(".secList4").addClass("active");
            break;

        case "5":
            // 5月を選択
            $(".active").removeClass("active");
            $(".secList5").addClass("active");
            break;

        case "6":
            // 6月を選択
            $(".active").removeClass("active");
            $(".secList6").addClass("active");
            break;

        case "7":
            // 7月を選択
            $(".active").removeClass("active");
            $(".secList7").addClass("active");
            break;

        case "8":
            // 8月を選択
            $(".active").removeClass("active");
            $(".secList8").addClass("active");
            break;

        case "9":
            // 9月を選択
            $(".active").removeClass("active");
            $(".secList9").addClass("active");
            break;

        case "a":
            // 10月を選択
            $(".active").removeClass("active");
            $(".secList10").addClass("active");
            break;

        case "b":
            // 11月を選択
            $(".active").removeClass("active");
            $(".secList11").addClass("active");
            break;

        case "c":
            // 12月を選択
            $(".active").removeClass("active");
            $(".secList12").addClass("active");
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

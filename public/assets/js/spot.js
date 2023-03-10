"use strict";

// //任意のタブにURLからリンクするための設定
// function GethashID(hashIDName) {
//     if (hashIDName) {
//         //タブ設定
//         $('.tab li').find('a').each(function () { //タブ内のaタグ全てを取得
//             var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
//             if (idName == hashIDName) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
//                 var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
//                 $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
//                 $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
//                 //表示させるエリア設定
//                 $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
//                 $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
//             }
//         });
//     }
// }

// //タブをクリックした
// $('.tab a').on('click', function () {
//     var idName = $(this).attr('href'); //タブ内のリンク名を取得
//     GethashID(idName);//設定したタブの読み込みと
//     return false;//aタグを無効にする
// });

// // 上記の動きをページが読み込まれたらすぐに動かす
// $(window).on('load', function () {
//     $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
//     $('#east').addClass("is-active"); //最初の.areaにis-activeクラスを追加
//     var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
//     GethashID(hashName);//設定したタブの読み込み
// });

// クリックしたらタブのスタイルが変わる
// $(function () {
//     $('.tab_item').on('click', function () {
//     $('.tab_item').removeClass('active2');
//     $(this).removeClass('tab_item');
//     $(this).parent().addClass('active2');
//     $(this).parent().addClass('tab_item');
//     });
// });

$(window).on('load', function () {
    // $('.tab_item:first-child').addClass('active');
    const $category = $('input:hidden[name="category"]').val();

    // console.log($category);

    switch ($category) {
        case "1":
            // カテゴリ１を選択
            $('.active2').removeClass('active2');
            $('.category1').addClass('active2');
            break;

        case "2":
            // カテゴリ２を選択
            $('.active2').removeClass('active2');
            $('.category2').addClass('active2');
            break;
    }
})

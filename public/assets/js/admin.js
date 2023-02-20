/**
 * 新規登録・編集時の確認
 * @returns
 */
function saveComfirm(title) {
    let res = confirm("「" + title + "」を登録します、よろしいでしょうか。");
    if (res == true) {
        return true;
    } else {
        return false;
    }
}

/**
 * メンバー削除の確認
 * @param {*} title
 * @param {*} id
 */
function deleteComfirm(title, url) {

    let res = confirm("「" + title + "」を削除します、よろしいでしょうか。");
    if (res == true) {
        // OKなら移動
        window.location.href = url;
    }
}

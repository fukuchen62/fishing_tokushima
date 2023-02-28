$(function() {
  $('.tab').on('click', function() {
    $('.tab, .panel').removeClass('active');
    $(this).addClass('active');
    var index = $('.tab').index(this);
    $('.panel').eq(index).addClass('active');
  });
});

$(window).on('load', function () {
  $('.tab_item:first-child').addClass('active')
})


// クリックしたらタブのスタイルが変わる
$(function () {
  $('.tab_item').on('click', function () {
    $('.tab_item').removeClass('active');
    $(this).addClass('active');
  });
});

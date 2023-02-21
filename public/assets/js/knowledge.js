$(function() {
  $('.tab').on('click', function() {
    $('.tab, .panel').removeClass('active');
    $(this).addClass('active');
    var index = $('.tab').index(this);
    $('.panel').eq(index).addClass('active');
  });
});

$(window).on('load', function () {
  $('.tab:first-child').addClass('active');
})

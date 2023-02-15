$(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 1080;
    if (winW <= devW) {
    $(".g-nav").addClass('slide-out');
    $(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".g-nav").toggleClass('slide-in');
    $(".g-nav").toggleClass('slide-out');
    $(".header__logo").toggleClass('none');
});
  } else {
    $(".g-nav").removeClass('slide-out');
  }
});

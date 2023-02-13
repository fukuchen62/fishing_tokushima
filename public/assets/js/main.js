$(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".g-nav").toggleClass('g-nav__slide');
    $(".header__logo").toggleClass('none');
});

$(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".sidemenu").toggleClass('sidemenu__slide');
    $(".header__logo").toggleClass('none');
});

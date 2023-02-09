$(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".sidemenu").toggleClass('sidemenu__slide');
    // $(".logo__img").toggleClass('none');
    $(".header__box").toggleClass('sidemenu__slide');
});

var lastScrollTop = 0;
$(function () {
    $(window).scroll(function () {
        var st = $(this).scrollTop();
        var $nav = $(".scroll-fixed-top");
        if (st > lastScrollTop){
            $nav.removeClass('scrolled');
        } else {

            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        }
        lastScrollTop = st;

    });

});

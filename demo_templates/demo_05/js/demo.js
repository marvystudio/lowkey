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

$(window).scroll(function() {

    var wScroll = $(this).scrollTop();
    $('.eco-nike').css({
        'transform' : 'translateX(-'+ wScroll /4 +'%)'
    });
    $('.eco-airforce').css({
        'transform' : 'translateX('+ wScroll /4 +'%)'
    });
    $('.ass').css({
        'transform' : 'translateX('+ wScroll /4 +'vh)'
    });
    if(wScroll > $('.eco-browse-all').offset().top - $(window).height()){
        var opacity = (wScroll - $('.eco-browse-all').offset().top + 400) / (wScroll / 5);

        $('.eco-window-tint').css({'opacity': opacity});

    }
    if(wScroll > $('.is-large').offset().top - $(window).height()){
        $('.eco-product-wrapper').css({
            'transform' : 'translateY(-'+ wScroll /100 +'%)'
        });


    }
    if(wScroll > $('.eco-product-wrapper').offset().top - ($(window).height() / 1.2)) {

        $('.eco-product-wrapper .eco-product-box').each(function(i){

            setTimeout(function(){
                $('.eco-product-wrapper .eco-product-box').eq(i).addClass('is-showing');
            }, 150 * (i+1));
        });

    }
});


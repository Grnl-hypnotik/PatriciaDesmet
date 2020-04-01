if (window.matchMedia("(min-width: 600px)").matches) {
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 500) {
            $('#wrapper-navbar').addClass('fixed-header');
        }
        else {
            $('#wrapper-navbar').removeClass('fixed-header');
        }
    });
}
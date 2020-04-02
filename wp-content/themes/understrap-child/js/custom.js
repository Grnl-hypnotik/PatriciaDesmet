$(document).ready(function() {

    if (window.matchMedia("(min-width: 992px)").matches) {
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 800) {
                $('#wrapper-navbar').addClass('fixed-header');
                $('.navbar-brand').addClass('d-lg-block');
            }
            else {
                $('#wrapper-navbar').removeClass('fixed-header');
                $('.navbar-brand').removeClass('d-lg-block');
            }
        });
    }

    AOS.init({
        disable: 'mobile'
    });

});

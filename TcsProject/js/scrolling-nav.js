//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        //$(".navbar-brand small").css('display','none');

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        //$(".navbar-brand small").css('display','block');
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
// not required as we have drop downs
/*$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
*/ 
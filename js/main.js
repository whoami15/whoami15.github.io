(function($) {
    'use strict';

    // SCROLLSPY
    $('body').scrollspy({ target: '' });

    // SMOOTH SCROLLING
    $(function() {
        $("#main-menu li a, #slide-nav li a, .demo-action-btn a").bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Auto Hide and Visible Header
    $(".header-area").autoHidingNavbar();

    // Expand Menu Slide
    var CloseMu = $('.close-menu');
    var ExMu = $('.mainmenu-expand');
    var ExMuOp = $('.expand-menu-open');
    CloseMu.on('click', function() {
        $(this).parent(ExMu).removeClass('slide_right');
    });
    ExMuOp.on('click', function() {
        CloseMu.parent(ExMu).addClass('slide_right');
    });


    // WOW JS Activation
    new WOW().init();

    // Portfolio Image Loded with Masonry
    var $PortfolioMasonry = $('.portfolio-masonry');
    if (typeof imagesLoaded === 'function') {
        imagesLoaded($PortfolioMasonry, function() {
            setTimeout(function() {
                $PortfolioMasonry.isotope({
                    itemSelector: '.portfolio-item',
                    resizesContainer: false,
                    layoutMode: 'masonry',
                    filter: '*'
                });
            }, 500);

        });
    };

    // Set Active Class for Portfolio filter
    $('.portfolio-filter li').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

    // Filter JS for Porrtfolio
    $('.portfolio-filter').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $PortfolioMasonry.isotope({ filter: filterValue });
    });

    // Venobox Gallary Image View
    $('.venobox').venobox();


    // Service Slider
    $('.service-slider').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 991, settings: { slidesToShow: 2 } },
            { breakpoint: 767, settings: { slidesToShow: 1 } },
            { breakpoint: 479, settings: { slidesToShow: 1 } },
        ]
    });

    // Testimonial Slider
    $('.testimonial-slider').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            { breakpoint: 991, settings: { slidesToShow: 1 } },
            { breakpoint: 767, settings: { slidesToShow: 1 } },
            { breakpoint: 479, settings: { slidesToShow: 1 } },
        ]
    });

    // Client Logo Slider 
    $('.client-logo-slider').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [
            { breakpoint: 991, settings: { slidesToShow: 4 } },
            { breakpoint: 767, settings: { slidesToShow: 3 } },
            { breakpoint: 479, settings: { slidesToShow: 2 } },
        ]
    });


    // CounterUp JS 
    $('.counter-number').counterUp({
        delay: 10,
        time: 1000
    });


    // Back to Top Button Activated
    $('body').append('<a id="back-top" href="#top"><i class="ti-angle-up"></i></a>');
    if ($('#back-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-top').addClass('show-btn');
                } else {
                    $('#back-top').removeClass('show-btn');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#back-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });
    };

})(jQuery);

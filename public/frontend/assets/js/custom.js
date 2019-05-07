jQuery(document).ready(function() {
    jQuery('.search-icon').click(function() {
        jQuery('.top-searchbar-wrapper').fadeToggle();
    });
    jQuery('.icon-back').click(function() {
        parent.history.back();
        return false;
    });
    jQuery(".login-menu-trigger").click(function() {
        jQuery(this).toggleClass('active');
        jQuery('.login-user-menu-outer').fadeToggle("slow", "linear");
    });
    var winwidth = jQuery(window).width();
    if (winwidth <= 800) {
        jQuery('.login-user-menu-outer').hide();
    } else {
        jQuery('.login-user-menu-outer').show();
    }
    jQuery(window).resize(function() {
        var winwidth = jQuery(window).width();
        if (winwidth <= 800) {
            jQuery('.login-user-menu-outer').hide();
        } else {
            jQuery('.login-user-menu-outer').show();
        }
    });
    jQuery(".dropit-btn").click(function() {
        jQuery(this).toggleClass('active');
        jQuery('.main-nav-bar').toggleClass('visible');
    });
    jQuery(".navbar > li > a").click(function() {
        jQuery(".navbar > li > a").removeClass('active');
        jQuery(this).addClass('active');
    });
    var winwidth = jQuery(window).width();
    jQuery("#sel1").change(function() {
        var optionvalue = jQuery(this).val();
        if (optionvalue == 1) {
            jQuery(".doctor-form").show();
            jQuery(".form-hospitals").hide();
        } else {
            jQuery(".doctor-form").hide();
            jQuery(".form-hospitals").show();
        }
    });
    jQuery(".btn-viewDirection").click(function() {
        jQuery(".map-outer").fadeIn();
    });
    jQuery(".close-doctor-practice-map").click(function() {
        jQuery(".map-outer").fadeOut();
    });
    jQuery(".services-link").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("#services").offset().top
        }, 2000);
    });
    jQuery(".owl-locations-slider").owlCarousel({
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left text-white'></i>", "<i class='fa fa-chevron-right text-white'></i>"],
        slideSpeed: 400,
        paginationSpeed: 500,
        singleItem: true,
        pagination: false,
        lazyLoad: true,
        autoPlay: true,
        autoHeight: true,
        autoplayHoverPause: false
    });
    jQuery(".owl-hosp-banner-slider").owlCarousel({
        navigation: true,
        slideSpeed: 400,
        paginationSpeed: 500,
        singleItem: true,
        pagination: false,
        autoPlay: true
    });
    jQuery(".slider-ftr").owlCarousel({
        navigation: true,
        slideSpeed: 400,
        paginationSpeed: 3000,
        singleItem: false,
        pagination: false,
        autoPlay: true
    });
    jQuery(".news-outer").owlCarousel({
        navigation: true,
        slideSpeed: 400,
        paginationSpeed: 3000,
        singleItem: true,
        pagination: false,
        autoPlay: true
    });
    jQuery('.back-to-top').click(function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 400) {
            jQuery('.back-to-top').css("display", "block");
        } else {
            jQuery('.back-to-top').css("display", "none");
        }
    });
    $(".fb_iframe_widget ._1_c3").height();
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('.advance-search-holder').addClass('stiky');
        } else {
            $('.advance-search-holder').removeClass('stiky');
        }
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 160) {
            $('.filter-doctor-outer').addClass('fixed-header');
            $('.doctor-filter-inner .form-group').addClass('col-md-9 col-sm-9 col-xs-12');
        } else {
            $('.filter-doctor-outer').removeClass('fixed-header');
            $('.doctor-filter-inner .form-group').removeClass('col-md-9 col-sm-9 col-xs-12');
        }
    });
    $(".fixed-menu-right li").click(function() {
        $(".fixed-menu-right li").removeClass('active');
        $(this).addClass('active');
    });
    jQuery("#goto_doctors").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery(".our-doc").offset().top
        }, 2000);
    });
});
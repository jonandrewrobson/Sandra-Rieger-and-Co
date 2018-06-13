(function($) { 
"use strict"; 

    jQuery(document).ready(function ($) {
    //Slider Option for Gallery Post

    if ($('.post-gallery.slider').length) {
    $('.post-gallery.slider').owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<span class='diane-prev'></span>","<span class='diane-next'></span>"],
        dots: false,
        loop: true
        });
    }

    //Classic layout for featured slider
    $('.diane-classic-slider').addClass('slider');

    if ($('.diane-classic-slider.slider').length) {
        $('.diane-classic-slider.slider').owlCarousel({
            items: 1,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<span class='diane-prev'></span>","<span class='diane-next'></span>"],
            dots: true,
            loop: true
        });
    }

    var slider_fix = document.getElementsByClassName('.slider-bg');
    if( slider_fix == true ) {

        var contentOffset = $('.slider-bg').offset();

        $(window).scroll(function () {
            var currentOffset = $('body').scrollTop();
            var percent = Math.floor(currentOffset * 100 / contentOffset.top) / 100;

            if (percent < 1) {
                $('.diane-shade').css({"opacity": percent });
            }
        });
    }
    

    //Instagram slider
    $('.diane-widget-area .instagram-size-original').addClass('slider');

    if ($('.diane-widget-area .instagram-size-original.slider').length) {
        $('.diane-widget-area .instagram-size-original.slider').owlCarousel({
            items: 1,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            smartSpeed: 1000,
            margin: 30,
            dots: true,
            loop: true
        });
    }

    //Grid layout for Featured slider
    $('.diane-slider-grid').addClass('slider');

    if ($('.diane-slider-grid.slider').length) {
        $('.diane-slider-grid.slider').owlCarousel({
            items: 3,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            smartSpeed: 1000,
            margin: 0,
            navText: ["<span class='diane-prev'></span>","<span class='diane-next'></span>"],
            dots: true,
            loop: true
        });
    }

    //Recent posts slider
    $('.rpwe-ul').addClass('slider');

    if ($('.rpwe-ul.slider').length) {
        $('.rpwe-ul.slider').owlCarousel({
            items: 1,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            smartSpeed: 1000,
            margin: 30,
            dots: true,
            loop: true
        });
    }     

    //Slider Option for Promo Box
    var $promo_box = '.diane-rotate';
    $($promo_box).addClass('slider');

    if ($('.diane-promo-area.slider').length) {
        $('.diane-promo-area.slider').owlCarousel({
            items: 3,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            margin: 30,
            dots: false,
            loop: true
        });
    }

    //menu
    $('.diane-main-navigation .menu-item-has-children').prepend('<span class="menu-icon"></span>');
    $('.diane-main-navigation .menu .menu-icon').click( function() {
        var $submenu = $(this).closest('.menu-item-has-children').find(' > .sub-menu');
        $submenu.toggle();
    return false;
    });

    //open nav search
    $('.nav-search-icon').click(function() {
        $('.nav-search').toggleClass('active');
    });

    //win sidebar
    $('.site-sidebar').click(function() {
        $('.diane-win-sidebar').addClass('active');
        $('body').addClass('active-sidebar');
        $('.back-top').toggleClass('active');
    });

    //nav button
    $('.diane-nav-button').click(function() {
        $('.menu').toggleClass('active');
        $('body').toggleClass('active');
    });

    $('.diane-background').click(function() {
        $('body.active').removeClass('active');
        $('body.active-sidebar').removeClass('active-sidebar');
        $('.diane-win-sidebar.active').removeClass('active');
        $('.menu.active').removeClass('active');
        $('.back-top').removeClass('active');
     });

    $('.site-sidebar').click(function(){
        $('.menu.active').removeClass('active');
        $('body.active').removeClass('active');
    });

    $('.diane-nav-button').click(function(){
        $('.diane-win-sidebar.active').removeClass('active');
        $('body.active-sidebar').removeClass('active-sidebar');
    });

        //close nav search
        $('.site-content').click(function() {
            $('.nav-search').removeClass('active');
        });

        $('.menu-icon').click(function() {
            $(this).toggleClass('active');
        });
  
        $(window).scroll(function () {


            var nav = $('.admin-bar > .site > .diane-main-navigation');
            //classic header
            var nav_menu = $('.admin-bar > .site > .diane-main-navigation > .nav-area > div > .menu');
            var nav_button = $('.admin-bar > .site > .diane-nav-button');
             //classic header
            var nav_classic_search = $('.admin-bar > .site > .diane-main-navigation > .nav-area > .site-search');
            //classic header
            var nav_sidebar = $('.admin-bar > .site > .diane-main-navigation > .nav-area > .diane-win-sidebar');
            //classic header
            var site_sidebar = $('.admin-bar > .site > .diane-main-navigation > .nav-area > .site-sidebar');
            var width = $(window).width();

            if ( $(this).scrollTop() === 0 && width <= 600 ) {
               nav.css({'top': '46px'});
               nav_menu.css({'top': '110px'});
               nav_sidebar.css({'top': '110px'});
               nav_button.css({'top': '46px'});
               site_sidebar.css({'top': '46px'});
               nav_classic_search.css({'top': '46px'});
            } else if ( $(this).scrollTop() >= 0 && width <= 600 ) {
                nav.css({'top': '0px'});
                nav_menu.css({'top': '65px'});
                nav_sidebar.css({'top': '65px'});
                nav_button.css({'top': '0px'});
                site_sidebar.css({'top': '0px'});
                nav_classic_search.css({'top': '0px'});
            }
        });

        // Search settings

        $('input[name="s"]').attr('placeholder', 'Write and hit enter...');
        $('input[name="post_password"]').attr('placeholder', 'Write Password and hit enter...');

        //fitvids
        $(".post-video").fitVids();

        $(function (){
            $("#back-top").hide();

            $(window).scroll(function (){
                if ($(this).scrollTop() > 700){
                    $("#back-top").fadeIn();
                } else{
                    $("#back-top").fadeOut();
                }
            });

            $("#back-top").click(function () {
                $("body,html").animate({
                    scrollTop:0
                }, 800);
                return false;
            });
        });
    });
})(jQuery);
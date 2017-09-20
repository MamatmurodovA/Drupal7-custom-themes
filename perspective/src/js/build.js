"use strict";

$(document).ready(function() {
    $('.page-carousel.owl-carousel').owlCarousel({
        items: 1,
        margin: 70,
        nav: false
    });

    $('').owlCarousel({
        items: 3,
        margin: 70,
        nav: false
    });
    
    $('.new-project.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin: 32,
        responsive:{
            0:{
                items:1
            },
            500: {
                items:2
            },
            767: {
                items:3
            }
        }
    });
    
    $('.sliderNews.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin: 30,
        responsive:{
            0:{
                items:1
            },
            500: {
                items:2
            },
            767: {
                items:3
            }
        }
    });

    $('.filter__single').click(function() {
        $(this).parent().toggleClass('with-drop');
        return false;
    });
});
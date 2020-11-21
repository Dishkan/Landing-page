$(function(){
	'use strict';
	new WOW({
		offset: 100
	}).init();



});

    $("#scrollDown").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#speakers").offset().top - 15
        }, 1500);
    });

        $("#scrollProduct").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#myCarousel").offset().top - 15
        }, 1500);
    });

            $("#scrollQuality").on('click', function () {
        $('html, body').animate({
            scrollTop: $(".quality").offset().top - 15
        }, 1500);
    });

            $("#scrollContact").on('click', function () {
        $('html, body').animate({
            scrollTop: $(".contact").offset().top - 15
        }, 1500);
    });

    // MDB Lightbox Init



/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    let height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });

});




$(document).ready(function() {   
    $(".panel a").fancybox({
        minWidth: 200
    });  
});


   
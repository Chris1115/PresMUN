$(function(){

    $('.front-image').mouseenter(function () { 
        $(this).css('opacity','1');
        $(this).siblings().css('opacity','0');
    });

    $('.front-image').mouseleave(function () { 
        $(this).css('opacity', '0');
        $(this).siblings().css('opacity','1');
    });

});
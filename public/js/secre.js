$(function(){

    $('.profile-card').mouseenter(function () { 
        $(this).children('img').css('filter', 'blur(2px)');
    });

    $('.profile-card').mouseleave(function () { 
        $(this).children('img').css('filter', 'blur(0px)');
    });
});
$(function(){
    
    $('#chacos-view').mouseenter(function () { 
        $('#hover-menu').css('height', 'fit-content');
        $('#hover-menu').css('opacity', '1');
    });

    // $('#chacos-view').mouseleave(function () { 
        $('#hover-menu').mouseleave(function () { 
            $('#hover-menu').css('height', '0');
            $('#hover-menu').css('opacity', '0');
        });
    // });
});
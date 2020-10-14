$(document).ready(function(){
    $('#resources').mouseenter(function(){
        $('#resources-item').slideDown('slow');
    });

    $('#registerbtn').click(function(){
        $('#loginbtn').removeClass('tab-active');
        $(this).addClass('tab-active');
    });

    $('#loginbtn').click(function(){
        $('#registerbtn').removeClass('tab-active');
        $(this).addClass('tab-active');

    });

    $('#iconsdiv').mouseenter(function(){
        $('.socialicons').slideDown('slow');
    });
    $('#iconsdiv').mouseleave(function(){
        $('.socialicons').slideUp('slow');
    });
});
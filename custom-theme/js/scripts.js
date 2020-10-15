$(document).ready(function(){
    //Resources animated dropdown
    $('#resources').mouseenter(function(){
        $('#resources-item').slideDown('slow');
    });
    //Resources animated dropdown

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


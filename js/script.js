//Resources animated dropdown
$(document).ready(function(){
    $('#resources').mouseenter(function(){
        $('#resources-item').slideDown('slow');
    });
});


//arrow animated dropdown
$('.arrow').on('click', function() {
    $(this).toggleClass('active');
});

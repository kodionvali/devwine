$(document).ready(function() {
    $('.nav-data').on('click', function(e) {
        e.preventDefault();
        var tabId = $(this).data('tab');
        $('.overlay-loader').show();
        $.ajax({
            url: '/tab_content/' + tabId,
            type: 'GET',
            success: function(response) {
                $('#tab_content').html(response);
                $('.overlay-loader').hide();
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('.userNav .nav-pills li').on('click',function(){
        $('.userNav .nav-pills li').removeClass('active');
        $(this).addClass('active');
    });
});
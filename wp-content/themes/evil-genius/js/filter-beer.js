jQuery(document).ready(function($) {
    $("[data-filter]").on('click', function() {
        $(".eg-beers__list").hide()
        var filterName = $(this).attr('data-filter')
        $("#" + $(this).attr('data-filter')).show()
    })
    $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
    $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
    $('.acc-head:not(.acc-head--for-wholesalers)').on('click', function() {
        if($(this).hasClass('active')) {
            $(this).siblings('.acc-content').slideUp();
            $(this).removeClass('active');
        }
        else {
            $('.acc-content').slideUp();
            $('.acc-head').removeClass('active');
            $(this).siblings('.acc-content').slideToggle();
            $(this).toggleClass('active');
        }
    });     
  })
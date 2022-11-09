jQuery(document).ready(function($) {
    $("[data-filter]").on('click', function() {
        $(".eg-beers__list").hide()
        var filterName = $(this).attr('data-filter')
        $("#" + $(this).attr('data-filter')).show()
    })
  })
$(function() {

    // tooltip
    $('body').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // datepicker
    $('.date_picker').datepicker({
        format: "dd/mm/yyyy"
    }).attr("readonly", "readonly")


    $("a.fancybox").each(function () {
        var $a = $(this);
        var h = $a.data("height");
        var w = $a.data("width");
        $a.fancybox({
            'width': w,
            'height': h
        });
    })

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    //star rating-input
    $('#rating-input').rating({
        min: 0,
        max: 5,
        step: 1,
        'stars':'3',
        size: 'lg',
        showClear: false
    });
})



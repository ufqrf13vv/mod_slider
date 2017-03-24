(function ($) {
    $(document).ready(function () {

        filter();

        function filter() {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    option: 'com_ajax',
                    module: 'slider',
                    format: 'json'
                },
                success: function(data, status) {
                    var params = data.data;
                    var dots, autoplay, arrows;

                    dots = hasOwnProperty('dots');
                    autoplay = hasOwnProperty('autoplay');
                    arrows = hasOwnProperty('arrows');

                    function hasOwnProperty(name) {
                        if (params.hasOwnProperty(name)) {
                            return true;
                        } else {
                            return false;
                        }
                    }

                    startSlider(dots, autoplay, params.count, params.slideToShow, arrows);
                }
            });
        }

        function startSlider(dots, autoplay, toShow, toScroll, arrows) {
            $('.main-slider-1').slick({
                autoplay: autoplay,
                arrows: arrows,
                slidesToShow: parseInt(toShow),
                slidesToScroll: parseInt(toScroll),
                dots: dots
            });
        }
    });
})(jQuery);

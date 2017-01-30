        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                navigation: true
                , singleItem: true
                , autoPlay: true
                , autoPlay: 5000
                , pagination: true
                , paginationSpeed: 1000
            });
        })
        $(document).ready(function () {
            $('#close').click(function () {
                $('#shadow').hide();
                $('#window').hide();
            });
            $('.poput_okay').click(function () {
                $('#shadow').show();
                $('#window').slideToggle(500);
            });
        })

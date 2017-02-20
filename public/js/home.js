jQuery(document).ready(function($) {
    $('#datetimepicker').datepicker();
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            stagePadding: 51,
          },
          600: {
            items: 3,
          },
          970: {
            items: 3,
            loop: false,
            margin: 20
          }
        }
    });
    $('.customize-nh-left').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('.customize-nh-right').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    })
});
 $(document).ready(function() {
     $('.multiple-items').slick({
         infinite: false,
         slidesToShow: 3,
         slidesToScroll: 3,
         responsive: [
             {
                 breakpoint: 1024,
                 settings: {
                     slidesToShow: 3,
                     slidesToScroll: 3,
                     dots: true
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             }
         ]
     });

     $('.home-banner').slick({
         infinite: false,
         slidesToShow: 1,
         slidesToScroll: 1
     });

     $('.ul-w-mainmenu-toggle-button').on('click', function () {
         $(this).parents('.ul-w-mainmenu').toggleClass('ul-w-mainmenu-collapse-in');
     })
});




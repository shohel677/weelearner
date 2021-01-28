(function ($) {
    "use strict";
   
    //Data Background
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
    });
     // meanmenu
  $("#mobile-menu-active").meanmenu();
   // Counter up
  $('.counter').counterUp({
    delay: 10,
    time: 1000
    });
  // Slick slider



  $('.testimonial-active').slick({
    slidesToShow: 3,
    slidesToScroll: 1,   
    dots: false,
    centerMode: true,
    accessibility: false,
    focusOnSelect: true,
    centerPadding:'0px',
    arrows: false,
    autoplay:true,
    autoplaySpeed:1500,
    responsive: [
        {
          breakpoint: 769,
          settings: {
       
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
      
   
  });
  $('.creator-active').slick({
    slidesToShow: 3,
    slidesToScroll: 1,   
    dots: false,
    centerMode: true,
    accessibility: false,
    focusOnSelect: true,
    centerPadding:'0px',
    arrows: false,
    autoplay:true,
    autoplaySpeed:1500,
    responsive: [
        {
          breakpoint: 769,
          settings: {
       
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
      
   
  });
    
    
  })(jQuery);
  
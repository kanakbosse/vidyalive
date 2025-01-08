
    $('.responsive').slick({
  dots: true,
  infinite: true,
  autoplay:true,
  speed: 200,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

 
    $('.respons').slick({
  dots: true,
  infinite: true,
  autoplay:true,
  speed: 100,
  slidesToShow: 6,
  slidesToScroll: 6,
  responsive: [
  {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});
    $('.respexam').slick({
  dots: true,
  infinite: true,
  autoplay:true,
  speed: 100,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
   
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});
 
    $('.respo').slick({
  dots: true,
  infinite: true,
  autoplay:true,
  speed: 100,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
   
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

    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 1,   // Show one slide at a time
            slidesToScroll: 1, // Scroll one slide at a time
            infinite: true,    // Infinite loop
            dots: true,        // Show dots for navigation
            arrows: true,      // Show next/previous arrows
            autoplay: true,    // Enable auto sliding
            autoplaySpeed: 10000, // Slide every 3 seconds
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: .25,
                        slidesToScroll: .25
                    }
                },
                {
      breakpoint: 600,
      settings: {
        slidesToShow: .25,
        slidesToScroll: .25
      }
    },
                {
      breakpoint: 480,
      settings: {
        slidesToShow:.50,
        slidesToScroll:.50
      }
    }
                
                
                
            ]
        });
    });


   
    

    $(document).ready(function(){
      $('.toggleMenu').click(function(){
        $('.MobileMenu').css("right", "0")
    });
    $('.BackBtn').click(function(){
      // alert('clicked')
      $('.MobileMenu').css("right", "-300px")
  });
        
});
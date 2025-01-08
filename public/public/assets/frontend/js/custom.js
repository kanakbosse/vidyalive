//Design by Nitin Saxena

$(document).ready(function(){
    
    $('body').on('click','.nit-pwd-show i.fa-eye',function(){
        $(this).parent().siblings('[type="password"]').attr('type','text');
        $(this).attr('class','fa fa-eye-slash');
    });
    $('body').on('click','.nit-pwd-show i.fa-eye-slash',function(){
        $(this).parent().siblings('[type="text"]').attr('type','password');
        $(this).attr('class','fa fa-eye');
    });
    
     $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
    infinite: false,
  centerMode: false,
  focusOnSelect: true
});
    
    
    
	$('.slider-carousel,.home-carousel').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		slideSpeed : 700,
		paginationSpeed : 800,
        rewindSpeed : 1000,
		slideSpeed : 700,
		dots:false,
        nav:false
	});
    
$('#accordion .card-link').click(function(){
    var acrtv = $(this).parent('.card-header').siblings('.collapse').attr('class'),crtv = $(this).siblings('.fas').attr('class'),acrtva = 'collapse show',acrtvb = 'collapse',crtva = 'fas fa-chevron-down',crtvb = 'fas fa-chevron-up';
    
    $(this).parent('.card-header').parent('.card').siblings('.card').children('.card-header').children('i').attr('class',crtva);
    
    if(acrtv == acrtva) $(this).siblings('.fas').attr('class','fas fa-chevron-down');
    else if(acrtv == acrtvb) $(this).siblings('.fas').attr('class',crtvb);
});

$('body').on('click','.nit-search-branch-tab-header ul li a',function(e){
    var getHash = $(this).prop('hash');
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    $('.nit-search-branch-tab-body .nit-tab-box').removeClass('active');
    $('.nit-search-branch-tab-body .nit-tab-box'+getHash).addClass('active');
    e.preventDefault();
});
$('body').on('click','.nit-below-slider .nit-right-box .nit-tab-form .nit-form-box .nit-header ul li a',function(e){
    var getHash = $(this).prop('hash');
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    $('.nit-below-slider .nit-right-box .nit-tab-form .nit-form-box .nit-body .nit-tab-content').removeClass('active');
    $('.nit-below-slider .nit-right-box .nit-tab-form .nit-form-box .nit-body '+getHash).addClass('active');
    e.preventDefault();
});
    
    
    
$('.nit-tracking-id-box input.form-control').focusin(function(){
    $(this).parent('.input-group').addClass('boxshadow');
    $(this).css('background','#fff');
});
$('.nit-tracking-id-box input.form-control').focusout( function(){
    $(this).parent('.input-group').removeClass('boxshadow');
        if(!($(this).val())) $(this).css('background','transparent');
});
$('.navbar-toggler').click(function(){$('.nit-navigation,.nit-mobile-overlay').css('right','0')});	
$('.nit-close,.nit-mobile-overlay').click(function(){$('.nit-navigation,.nit-mobile-overlay').css('right','-100%')});

// Typed Initiate
    var typed = new Typed('.nit-tracking-id-box label', {
        strings: ['Enter Tracking Id','hint-----3459864322'],
        typeSpeed: 40,
        backSpeed: 40,
        smartBackspace: true,
        loop: true
    });
    
});

 
$('.Explore_Program_Slider').slick({
    dots: false,
    infinite: true,
    arrows:true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows:false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          arrows:false,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  function Explore_Program() {
    // alert("function run")
    setTimeout(function() {
        document.querySelector('Explore_Program_Slider').style.display = 'block';
    }, 1000); // Delay in milliseconds (3000 ms = 3 seconds)
}



function respons() {
    // alert("function run")
    setTimeout(function() {
        document.querySelector('respons').style.display = 'block';
    }, 1000); // Delay in milliseconds (3000 ms = 3 seconds)
}
respons();
Explore_Program();
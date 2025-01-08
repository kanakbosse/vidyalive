
<!DOCTYPE html>
<html lang="en">
  
<!-- index-two18:22  -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
            <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
            <meta property="og:title" content="{{ $metaTitle ?? 'Default Title' }}">
            <meta property="og:description" content="{{ $metaDescription ?? 'Default OG description' }}">
            <meta property="og:image" content="{{ $metaImage ?? asset('default-image.jpg') }}">
            <meta property="og:url" content="{{ $metaUrl ?? url()->current() }}">
            <meta property="og:type" content="website">
    
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        {{-- <title>VidyaLive</title> --}}
        <!-- Css Files -->
    
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/bootstrap.css") }}"/> 
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-two.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-three.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-four.css") }}"/>  
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/font-awesome.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/flaticon.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/slick-slider.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/slick-theme.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/prettyphoto.css") }}"/>   
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/responsive.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/owl.carousel.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/owl.theme.default.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/style.css") }}"/>
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.8.1/swiper-bundle.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
<style>
    /* Preloader styles */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loader {
    border: 4px solid #fff;
    border-top: 4px solid #fff;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 2s linear infinite;
}

/* Loading spinner animation */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Hide preloader when the content is fully loaded */
body.loaded .preloader {
    display: none;
}
 
</style>
</head>
    <body>

    <!-- <div class="preloader">
        <div class="loader"></div>
    </div> -->
        <div class="wm-main-wrapper">
               <!--//  Banner start \\-->
             
            <!--// Banner End \\-->
            <x-frontend.header/>
           
                @yield("content")
            <x-frontend.footer/>   
                
            <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/prettyphoto.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.js') }}"></script>
            <script src="{{ asset('assets/frontend/build/mediaelement-and-player.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    

            <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
            <script src="{{ asset("assets/frontend/js/jQuery_v3.4.1_min.js") }}"></script>
            {{-- <script src="{{ asset("js/bootstrap_v4.3.1_min.js") }}"></script> --}}
            <script src="{{ asset("assets/frontend/js/owl.carousel.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/typed.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slick.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/custom.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/customjs.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slide.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slider.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/tab.js") }}"></script> 
            <script src="{{ asset("assets/frontend/js/filter.js") }}"></script> 
            <script src="{{ asset("assets/frontend/js/swipe.js") }}"></script> 
            <script src='https://unpkg.com/swiper@6.8.1/swiper-bundle.min.js'></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            @yield("script")
        </div>
        <script>
            window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    const body = document.querySelector('body');

    // Hide the preloader and add a class to the body when the page is fully loaded
    preloader.style.opacity = '0';
    body.classList.add('loaded');
});

        </script>
    </body>
</html>
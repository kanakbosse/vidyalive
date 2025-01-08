@extends("frontend.master")

@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

@section("content")
    <section class="wm-main-wrapper">      
                @include("frontend.home.inc.banner")
                @include("frontend.home.inc.program")
                @include("frontend.home.inc.exploreprogram")
                @include("frontend.home.inc.university")
                @include("frontend.home.inc.entrance")
                @include("frontend.home.inc.preferedlocation")
                @include("frontend.home.inc.blog")
                @include("frontend.home.inc.welcome")  
    </section>
@endsection
     
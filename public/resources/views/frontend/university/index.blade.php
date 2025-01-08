@extends("frontend.master")

@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

@section("content")
    <section class="wm-main-wrapper">  
        @include("frontend.university.leftsection")
        @include("frontend.university.rightsection")
        @include("frontend.university.contentslider")
        @include("frontend.university.tabsidebar")
        @include("frontend.university.tabcontent")
    </section>
@endsection


@extends("frontend.master")

@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

@section("content")
  <section class="wm-main-wrapper">
          @include("frontend.Filter.filtertitle")
          @include("frontend.Filter.sidebar")
          @include("frontend.filter.filtercontent")        
  </section>
@endsection
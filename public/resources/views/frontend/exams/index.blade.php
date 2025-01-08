@extends("frontend.master")

@section("title", $exam->title." - ".config('app.sitesettings')::first()->site_title)

@section("content")
<div class="section-heading">
    <div class="container-fluid">
         <div class="section-heading-2">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-heading-2-title">
                         <h1>{{ $exam->title }}</h1>
                         <p class="links"><a href="{{ route("frontend.home") }}">Home <i class="las la-angle-right"></i></a> {{ $exam->title }}</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
<section class="post-single mt-1">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="description">
                    {!! $exam->content !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

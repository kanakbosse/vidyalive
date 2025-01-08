
@extends("frontend.master")

@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

@section("content")
    <section class="wm-main-wrapper">
        <section class="hero">
            <div class="overlay"></div> <!-- This div will act as the transparent layer -->
            <div class="container">
            <h2>{{ $category->title }}</h2>

            <p>{!! $category->sort_description !!}</p>
            </div>
        </section>
       
     
        <div class="container">
          <div class="row"> 
            <div class="slidernew"> 
             @if ($banners->count() > 0)
             <div class="container">
                 <div class="row"> 
                    <div class="slidernew">
                       @foreach ($banners as $banner)
                       {{-- {{dd($banners)}} --}}
                       <div class="item-img"><a href="">
                         <img src="{{ asset("uploads/unibanner/".($banner->image ?? "default.webp")) }}" alt="{{ $banner->title }}" class="img-fluid"></a>
                       </div>
                       @endforeach                
                    </div>            
                  </div>
                </div> 
                @endif  
            </div>            
          </div>
        </div>
         
        
        <div class="container">
        <div class="row">          
                   
                   <div class="text-scrolling-slider">
                     <div class="scrolling-content">
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                         <span class="scroll-course-text ">ugyyuigi</span>
                    
                       </div>
                    </div>       
                 </div>
        </div>
        <div class="container">
            <div class="row">      
              <div class="container-side">
                <div class="sidebar">
                    <h2>Related Courses</h2>
                   <h3> {{ $category->name }}</h3>
                   @foreach ($category->pages as $page)
                       <a href="{{ url($category->slug . '/' . $page->slug) }}" >{{ $page->title }}</a>                  
                   @endforeach            
                </div>
                <div class="content">
                    <h1>{{$category->title}}</h1>
                    <p>{!! $category->description !!}</p>
                </div>
            </div> 
    
        </div>
    </div>
          
            {{-- @include("frontend.course.coursetitle") 
            @include("frontend.course.universitylogo")   
            @include("frontend.course.relatedcourses") 
            @include("frontend.course.content")  --}}
    </section>
@endsection

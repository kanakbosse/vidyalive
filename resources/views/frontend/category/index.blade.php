
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
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IGNOU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Amity_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Bharati_Vidyapeeth.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/BITS_Pilani.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/CU_Distance_Learning.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/CU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/DPU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIIT_Bangalore.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIM_Ranchi.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIM_Rohtak.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIT_Delhi.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIT_Madras.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Lingayas_Vidyapeth.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/LPU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Maharishi_Dayanand_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/MU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/NMIMS.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Online_Manipal.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Parul_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SCDL.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SMU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SPJ_Global.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Uttaranchal_University.png')}}"></a></div>
              
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
                       <a href="{{ $category->slug }}/{{ $page->slug}}">{{ $page->title }}</a>                  
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
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IGNOU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Amity_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Bharati_Vidyapeeth.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/BITS_Pilani.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/CU_Distance_Learning.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/CU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/DPU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIIT_Bangalore.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIM_Ranchi.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIM_Rohtak.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIT_Delhi.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/IIT_Madras.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Lingayas_Vidyapeth.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/LPU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Maharishi_Dayanand_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/MU_Online.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/NMIMS.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Online_Manipal.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Parul_University.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SCDL.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SMU.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/SPJ_Global.png')}}"></a></div>
                 <div class="item-img"><a href=""><img src="{{asset('assets/frontend/images/university_logo/Uttaranchal_University.png')}}"></a></div>
              
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
                    <h3>Pages in {{ $category->name }}</h3>
          
                @foreach ($pages as $sidebarPage)
                   
                        <a 
                            href="{{ route('frontend.category.index', ['categorySlug' => $category->slug, 'pageSlug' => $sidebarPage->slug]) }}"
                            @if ($sidebarPage->id === $page->id) style="font-weight: bold;" @endif>
                            {{ $sidebarPage->title }}
                        </a>
                  
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

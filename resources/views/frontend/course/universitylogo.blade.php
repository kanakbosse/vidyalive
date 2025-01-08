<div class="container">
    <div class="row"> 
       <div class="slidernew">
     
        @if ($banners->count() > 0)
        <div class="container">
            <div class="row"> 
               <div class="slidernew">
                  @foreach ($banners as $banner)
                  {{dd($banner)}}
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
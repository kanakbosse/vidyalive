<div class="wm-main-section bg-white">
    <!-- <span class="wm-light-transparent wm-more-light"></span> -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="wm-parallex">
                    <h2 class="mb-mobile-0 ">Blog News</h2>
                    <!-- <span>Conservatory album produced projects for students!</span>
                    <a class="wm-classic-button wm-bgcolor-two" href="#"><i class="wmicon-shop"></i> Start Shopping</a> -->
                </div>
            </div>

        </div>
    </div>
</div>



    
<div class="wm-main-section ">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
                <div class="respo">
                    
                    @for ($i = 0 ; $i < count($recentposts); $i++)
                    {{-- <h2>{{$recentposts[$i]->title}}</h2> --}}
                    <div class="col-md-2">
                        <div class="slidecl">                        
                            <div class="wm-newsgrid-text">
                                <ul class="wm-post-options">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset("uploads/post/" .($recentposts[$i]->thumbnail ?? "default.webp"))}}" alt="" />
                                        </a>
                                    </li>
                                
                                </ul>
                                <h5>
                                    <a href="#" class="wm-color">
                                        {{$recentposts[$i]->title}}
                                    </a>
                                </h5>
                                <p>{{$recentposts[$i]->content}}</p>
                                <a class="wm-banner-btn" href="#">read article</a>
                            </div>
                                                                                
                        </div>                  
                    </div>
                    @endfor
                    


                </div>
            </div>
        </div>
    </div>
</div>  
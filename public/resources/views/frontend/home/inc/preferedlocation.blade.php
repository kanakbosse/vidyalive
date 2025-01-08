     <!--// Main Section \\-->
    <div class="wm-main-section bg-white ">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-parallex">
                        <h2 class="mb-mobile-0 mb-0">Your Prefered Location</h2>
                        <!-- <span>Conservatory album produced projects for students!</span>
                        <a class="wm-classic-button wm-bgcolor-two" href="#"><i class="wmicon-shop"></i> Start Shopping</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->
    <!--// Main Section \\-->
    
<div class="wm-main-section bg-white  ">        
    <div class="container">

        <div class="row">
            <div class="col-md-12">                     

                <div class="col-md-12">
                    <div class="responsive mt-0">                                            
                        @for ($i = 0; $i < count($location); $i += 2)
                       
                        {{-- @dd(count($location)); --}}
                        <div class="col-md-2">
                            <div class="slidecl">
                                
                                <div class="slidec width-100">
                                    <img src="{{ asset("uploads/location/" .($location[$i]->image ?? "default.webp")) }}" alt=""><div class="firstslide">{{$location[$i]->title}}</div></div>
                                @for ($j =$i + 1; $j < $i + 2; $j++ )
                        
                        
                                <div class="slidec width-100">
                                    @if (isset($location[$j]->title))
                                    
                                    <img src="{{ asset("uploads/location/".($location[$j]->image ?? "default.webp")) }}" alt="" /><div class="firstslide">{{$location[$j]->title}}</div></div>
                                    @else
                                    <img src="{{ asset("uploads/location/".($location[0]->image ?? "default.webp")) }}" alt="" /><div class="firstslide">{{$location[0]->title}}</div></div>
                                    @endif
                                @endfor
                            </div>                                                
                        </div>
                        @endfor

                        {{-- <div class="col-md-2">
                            <div class="slidecl">
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Bhubaneshwar.png')}}" alt=""><div class="firstslide">BHUBANESHWAR</div></div>
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Chandigarh.png')}}" alt=""><div class="firstslide">CHANDIGARH</div></div>
                            </div>                                                
                        </div>
                        <div class="col-md-2">
                            <div class="slidecl wm-partners-layer">
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Chennai.png')}}" alt=""><div class="firstslide">CHENNAI</div></div>
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Cochin.png')}}" alt=""><div class="firstslide">COCHIN</div></div>
                            </div>                                                
                        </div>
                    
                        <div class="col-md-2">
                            <div class="slidecl wm-partners-layer">
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Coimbatore.png')}}" alt=""><div class="firstslide">COIMBATORE</div></div>
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Pune.png')}}" alt=""><div class="firstslide">PUNE</div></div>
                            </div>                                                
                        </div>   
                        <div class="col-md-2">
                            <div class="slidecl wm-partners-layer">
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Hyderabad.png')}}" alt=""><div class="firstslide">HYDERABAD</div></div>
                                <div class="slidec width-100"><img src="{{asset('assets/frontend/images/location/Delhi_NCR.png')}}" alt=""><div class="firstslide">DELHI NCR</div></div>
                            </div>                                                
                        </div>                                                --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<div class="wm-main-section">
    <span class="wm-light-transparent wm-more-light"></span>
    <!--// Explore Program Start \\-->

<div class="wm-main-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-parallex">
                    <h2>Explore Program</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wm-main-section">
    <span class="wm-light-transparent wm-more-light"></span>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="Explore_Program_Slider py-4">
                    


                    {{-- @for ($i = 0; $i < count($homecategories); $i += 2) --}}
                    @for ($i = 0; $i < count($homecategories); $i += 2)
                    
                    
                    {{-- @dd(count($homecategories)); --}}
                    <div class="item"> 
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <h2>{{$i}}</h2> --}}
                                <div class="card mt-2">
                                    <div class="column w-100">
                                       <a href="{{ route("frontend.category", $homecategories[$i]->slug) }}" ><div class="header-box">
                                            <p class="duration">{{ $homecategories[$i]->duration }}</p>
                                        </div>
                                        {{-- <img src="{{ asset("uploads/banner/".($banner->image ?? "default.webp")) }}" alt="{{ $banner->title }}" class="img-fluid"> --}}
                                        <img src="{{ asset("uploads/category/" .($homecategories[$i]->image ?? "default.webp"))  }}" alt="{{ $homecategories[$i]->title }}">
                                        <p class="name">{{ $homecategories[$i]->title }}</p>
                                        <div class="footer-box">{{ $homecategories[$i]->college_name }}</div>
                                       </a>
                                    </div>
                                </div>
                            </div>
                        
                            @for ($j = $i + 1; $j < $i + 2; $j++ )
                            {{-- {{ $homecategories[$j]->duration }} --}}
                            <div class="col-md-12">
                                    @if (isset($homecategories[$j]->title))
                                    <div class="card mt-2">
                                        <div class="column w-100">
                                            <div class="header-box">
                                                <p class="duration">{{ $homecategories[$j]->duration }}</p>
                                            </div>
                                            <img src="{{ asset("uploads/category/" .($homecategories[$j]->image ?? "default.webp"))  }}" alt="{{ $homecategories[$j]->title }}">
                                            <p class="name">{{ $homecategories[$j]->title}}</p>
                                            <div class="footer-box">{{ $homecategories[$j]->college_name }}</div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="card mt-2">
                                        <div class="column w-100">
                                            <div class="header-box">
                                                <p class="duration">{{ $homecategories[0]->duration }}</p>
                                            </div>
                                            <img src="{{ asset("uploads/category/" .($homecategories[0]->image ?? "default.webp"))  }}" alt="{{ $homecategories[0]->title }}">
                                            <p class="name">{{ $homecategories[0]->title}}</p>
                                            <div class="footer-box">{{ $homecategories[0]->college_name }}</div>
                                        </div>
                                    </div>
                                    {{-- No --}}
                                    @endif
                                    
                                </div>
                            @endfor
                        </div>
            </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!--// Explore Program End \\-->

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="Explore_Program_Slider py-4">
                    @for ($i = 0; $i < count($homecategories); $i += 2)
                    <div class="item">
                        <div class="row">
                            <!-- First record in the pair -->
                            @if (isset($homecategories[$i]))
                                <div class="col-md-12">
                                    <div class="card mt-2">
                                        <div class="column w-100">
                                            <div class="header-box">
                                                <p class="duration">{{ $homecategories[$i]->duration }}</p>
                                            </div>
                                            <img src="{{ asset('assets/frontend/images/icons/' . $homecategories[$i]->image) }}" alt="{{ $homecategories[$i]->title }}">
                                            <p class="name">{{ $homecategories[$i]->title }}</p>
                                            <div class="footer-box">{{ $homecategories[$i]->college_name }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Second record in the pair -->
                            @if (isset($homecategories[$i + 2]))
                                <div class="col-md-12">
                                    <div class="card mt-2">
                                        <div class="column w-100">
                                            <div class="header-box">
                                                <p class="duration">{{ $homecategories[$i + 1]->duration }}</p>
                                            </div>
                                            <img src="{{ asset('assets/frontend/images/icons/' . $homecategories[$i + 1]->image) }}" alt="{{ $homecategories[$i + 1]->title }}">
                                            <p class="name">{{ $homecategories[$i + 1]->title }}</p>
                                            <div class="footer-box">{{ $homecategories[$i + 1]->college_name }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--// Explore Program End \\-->

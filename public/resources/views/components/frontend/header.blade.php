<header id="wm-header" class="wm-header-two">
    <!--// MainHeader \\-->
    <div class="wm-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">  
                     <a href="{{ route("frontend.home") }}" class="wm-logo">
                        <img src="{{ asset("uploads/logo/".$sitesettings->logo_light) }}" alt="{{ $sitesettings->site_title }}" class="logo-dark"/>
                        <!-- <img src="{{ asset("uploads/logo/".$sitesettings->logo_dark) }}" alt="{{ $sitesettings->site_title }}" class="logo-white"/> -->
                    </a>
                </div>
                <div class="col-md-9 menuIconMobile">
                    <!--// Navigation \\-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed toggleMenu" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                          
                           @if (count($menu) > 0)
                                <ul class="nav navbar-nav">
                                        @foreach ($menu as $item)
                                        <li class="nav-item">
                                            <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                                        </li>
                                        @endforeach
                                </ul>
                          @endif
                        </div>
                    </nav>
                    <!--// Navigation \\-->
                
                </div>
            </div>
        </div>
    </div>
    <!--// MainHeader \\-->

    <!-- start Mobile menu  -->
     <div class="MobileMenu">
        <p class="BackBtn"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/back.png" alt="back"/><span>Back</span></p>
        
        <hr />
        <div class="filetrSearch mt-2">                        
            <input type="text." id="myInputNew" onkeyup="myFunctionNew()" class="form-control">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1">
        </div>
        
          
        <ul id="myULMenu" class="mt-1">   
            <li class="d-flex"> <div class="checkbox-wrapper-48">
                <label><input type="checkbox" name="cb"></label>
              </div> <a class="text-black" href="#">B TECH</a></li>
            <li class="d-flex"><div class="checkbox-wrapper-48">
                <label><input type="checkbox" name="cb"></label>
              </div><a class="text-black" href="#">MSC</a></li>
            <li class="d-flex"><div class="checkbox-wrapper-48">
                <label><input type="checkbox" name="cb"></label>
              </div><a class="text-black" href="#">BCA</a></li>
            <li class="d-flex"><div class="checkbox-wrapper-48">
                <label><input type="checkbox" name="cb"></label>
              </div><a class="text-black" href="#">MCA</a></li>

            
           
        </ul>
        <hr />
        @if (count($menu) > 0)
            <ul class="nav navbar-nav">
                    @foreach ($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                    </li>
                    @endforeach
            </ul>
        @endif
                          
     </div>
     <!-- end of MobileMenu -->
    <!-- end Mobile menu  -->
    <!--// TopStrip \\-->
    <div class="wm-topstrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="MobileFixedMenuIconSide"></div> --}}
                    <!-- <div class="wm-stripinfo"> <ul> <li><i class="wmicon-technology4"></i>  +91 92898 66815</li> <li><i class="wmicon-letter"></i>info@vidyalive.com</li> </ul> </div> -->
                            @if (count($menu) > 0)
                                <ul class="wm-adminuser-section adminUserSectionMenu">
                                    {{-- <div class="closeIconForSecoundMenu"> <i class="fa fa-close"></i></div> --}}
                                        @foreach ($menu as $item)
                                        <li>
                                            <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                                        </li>
                                        @endforeach
                                </ul>
                            @endif                             
                </div>
            </div>
        </div>
    </div>
    <!--// TopStrip \\-->
    <script>
        function myFunctionNew() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInputNew");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myULMenu");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        </script>
</header>



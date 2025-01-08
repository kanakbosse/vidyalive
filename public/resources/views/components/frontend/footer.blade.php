  <!--// Footer \\-->
  <footer id="wm-footer" class="wm-footer-one">
                <!--// FooterWidgets \\-->
                <div class="wm-footer-widget">
                    <div class="container">
                        <div class="row">
                            <aside class="widget widget_contact_info-footer col-md-3">
                                    <a href="{{ route("frontend.home") }}" class="wm-footer-logo"><img src="{{ asset("uploads/logo/".$sitesettings->logo_dark) }}" alt="{{ $sitesettings->site_title }}" class="logo-white"/></a>
                                @if ($socialmedia->count() > 0)
                                    <div class="col-md-3">
                                        <div class="menu">                       
                                            <ul>
                                                @foreach ($socialmedia as $media)
                                            <a href="{{ $media->link }}" target="_blank"><i class= "wmli-color wmicon-pin {{ $media->icon }}"></i>{{ $media->title }}</a>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif                            
                            </aside>
                                
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>Top Universities</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>Top PG Programs</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>Top Entrance Exams</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>Data Science Courses</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>
                                      Cloud Technologies </h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>MBA Dual Specializations</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif 
                            @if (count($menu) > 0)
                                <aside class="widget widget_contact_info-footer col-md-3">                            
                                      <div class="wm-footer-widget-title"><h5>Top Universities</h5></div>
                                        <ul>
                                            @foreach ($menu as $item)
                                             <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                            @endforeach
                                        </ul>                                
                                </aside>
                            @endif                             
                        </div>
                    </div>
                </div>
                <!--// FooterWidgets \\-->

                <!--// FooterCopyRight \\-->
                <div class="wm-copyright">
                    <div class="container">
                        <div class="row">                        
                            <div class="col-md-7"> <p><a target="_blank" href="https://www.vidyalive.com/">{{ $sitesettings->copyright_text }}</a></p></div>                            
                        </div>
                    </div>
                </div>
                <!--// FooterCopyRight \\-->

            </footer>
		<!--// Footer \\-->
        
	    <div class="clearfix"></div>
        
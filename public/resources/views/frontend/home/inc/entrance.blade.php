   <!--// Main Section \\-->
   <div class="wm-main-section bg-white">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="wm-parallex">
                    <h2>Entrance Exams</h2>
                    <!-- <span>Conservatory album produced projects for students!</span>
                    <a class="wm-classic-button wm-bgcolor-two" href="#"><i class="wmicon-shop"></i> Start Shopping</a> -->
                </div>
            </div>

        </div>
    </div>
</div>
<!--// Main Section \\-->

<div class="wm-main-section ">                                
    <div class="container">
        <span class="wm-light-transparent wm-more-light"></span>

        
        <div class="row">
           <div class="col-md-12">                        
                <div class="respexam">
                  @for ($i = 0; $i < count($exam); $i++)
                  <div class="col-md-2">
                    <div class="slidecl">                                    
                        <div class="exam-card">                                        
                            <div class="text-columns">
                              <div class="column">
                                <div class="circle">
                                  <img src="{{asset('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="exam">
                                </div>
                              </div>
                              <div class="column">
                                <div class="circle-text">
                                  <span class="text">Online Exam</span>
                                  <h3 class="heading">{{$exam[$i]->title}}</h3>
                                </div>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <span class="text">Participating Colleges</span>
                              </div>
                              <div class="column">
                                <h5 >{{$exam[$i]->Participating_college}}</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                                <div class="column">
                                  <span class="text">Exam Date</span>
                                </div>
                                <div class="column">
                                    <h5 >{{$exam[$i]->Exam_Date}}<h5 >
                                </div>
                            </div>
                            <div class="text-columns">
                                <div class="column">
                                  <span class="text">Exam Level</span>
                                </div>
                                <div class="column">
                                    <h5 >{{$exam[$i]->Exam_Level}} <h5 >
                                </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">
                                    <h5 >Application Process <h5>                                           
                                </div>
                                <div class="column">
                                    <span>></span>
                                </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">
                                    <h5 >Exam Info<h5>                                           
                                </div>
                                <div class="column">
                                    <span>></span>
                                </div>
                            </div>
                        </div>  
                                                                                                               
                    </div>                                                                                       
                </div>
                  @endfor
                   
               </div>
           </div>
      </div>
  </div> 
</div>

    <!--// Main Section \\-->
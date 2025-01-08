<section class="wm-main-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="category-lists-slider">
                    <div class="swiper-container" id="catgory-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-button active" data-id="data1">
                                 ALL
                                </div>
                            </div>
                           
                          @foreach ($categories as $category)
                            <div class="swiper-slide">
                                <div class="category-button" data-id="data2">
                                  {{ $category->title }}
                                </div>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="slider-button slider-prev slick-prev slick-arrow"></div>
                    <div class="slider-button slider-next slick-next slick-arrow"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">               
                <div class="data-text active" id="data1"> 
                  <h6></h6>                   
                      <div class="row row-flex">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column Column3">
                                @foreach ($exam as $exams)                                
                                 
                                <a href=""> <h5 >   {{ $exams->title }}</h5>   </a>                                
                                @endforeach
                                </div>
                              </div>                              
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                   <a href=""> <h5 >More  <span>></span> <h5> </a>
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">  
                                                                                                           
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column Column3">
                             
                              @foreach ($course as $courses)  
                              <a href="{{ route("frontend.category", $courses->slug) }}">                               
                              <h5 >  {{ $courses->title }}  </h5>      
                            </a>                           
                              @endforeach
                               
                              </div>
                            </div>                              
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                      </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>                               
                <div class="data-text" id="data2"> 
                  <h6>BE/B.Tech</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data3"> 
                  <h6>MBA/PGDM</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data4"> 
                  <h6>MBBS</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data5"> 
                  <h6>ME/B.Tech</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data6"> 
                  <h6>B.Sc</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data7"> 
                  <h6>BA</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data8"> 
                  <h6>B.Com</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data9"> 
                  <h6>BCA</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data10"> 
                  <h6>BBA/BMS</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                <div class="data-text" id="data11"> 
                  <h6>B.Sc(Nursing)</h6>                   
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="tab-exam-cards">                                        
                              <div class="tab-text-columns">                                    
                                <div class="column">                                                                             
                                    <h3 class="boxheading">Exam</h3>                                      
                                </div>
                                <div class="column">                                     
                                  <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                              </div>
                            </div>
                            <div class="large-exam-card"> 
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >MAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >XAT 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >CLAT 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >AIIMS MBBS 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >NEET 2025</h5>
                                </div>
                              </div>
                              <div class="text-columns">
                                <div class="column">
                                  <h5 >JEE 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET PG 2025</h5>
                                </div>
                                <div class="column">
                                  <h5 >CUET UG 2025</h5>
                                </div>
                              </div>
                              <hr>
                              <div class="text-columns">
                                  <div class="column">                                                                                 
                                  </div>
                                  <div class="column">
                                    <h5 >More  <span>></span> <h5> 
                                  </div>
                              </div>
                            
                             </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Courses</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >MCA</h5>
                              </div>
                              <div class="column">
                                <h5 >BCA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.Tech</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >M.Tech</h5>
                              </div>
                              <div class="column">
                                <h5 >MJMC</h5>
                              </div>
                              <div class="column">
                                <h5 >Nursing</h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >BA</h5>
                              </div>
                              <div class="column">
                                <h5 >BBA</h5>
                              </div>
                              <div class="column">
                                <h5 >B.COM</h5>
                              </div>
                            </div>
                          
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                          <div class="tab-exam-cards">                                        
                            <div class="tab-text-columns">                                    
                              <div class="column">                                                                             
                                  <h3 class="boxheading">Explore Colleges</h3>                                      
                              </div>
                              <div class="column">                                     
                                <img src="{{('assets/frontend/images/icons/GATE 2025 Logo.webp')}}" alt="Exam 4 Icon">                                     
                            </div>
                          </div>
                          <div class="large-exam-card"> 
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Chandigarh University</h5>
                              </div>
                              <div class="column">
                                <h5 >Amrita University
                                </h5>
                              </div>
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 > IGNOU University
                                </h5>
                              </div>
                              <div class="column">
                                <h5 >Mangalayatan University
                                </h5>
                              </div>
                            
                            </div>
                            <div class="text-columns">
                              <div class="column">
                                <h5 >Uttaranchal University</h5>
                              </div>
                              <div class="column">
                                <h5 >Jain University</h5>
                              </div>
                            </div>
                            <hr>
                            <div class="text-columns">
                                <div class="column">                                                                                 
                                </div>
                                <div class="column">
                                  <h5 >More  <span>></span> <h5> 
                                </div>
                            </div>
                          
                           </div>
                          </div>
                        </div>
                      </div> 
                </div>
                           
             </div>
        </div>
    </div>
</section>
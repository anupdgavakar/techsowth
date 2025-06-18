@include('layouts.header')
   
         <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url('assets/images/videobackside.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": [""], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                        <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Download"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h2>
                    </div> 
                    <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <a href="#down-section" class="section-link">
                            <div class="text-white">
                                <i class="line-icon-Down icon-medium"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        






        <section class="cover-background pt-5 xs-pt-8"> 
            <div class="container">  
                @foreach($download as $key => $val)
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs",  "translateY": [0, 0], "perspective": [1200, 1200], "scale": [1.05, 1], "rotateX": [50, 0], "opacity": [0,1], "duration":600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                            <div class="feature-box-icon mb-30px"> 
                                <img src="images/demo-hosting-home-icon-02.svg" class="h-50px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <h6>{{$val->title}}</h6>
                                <p class="mb-10px">{{$val->description}}</p>
                                <a href="{{ url('upload/'.$val->file) }}" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-uppercase-inherit">
                                    <span>
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-down"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-down"></i></span>
                                    </span> 
                                </a>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                   
                  @endforeach
                   
                </div>
            </div>
        </section>
        <!-- end section --> 


        <!-- start footer -->
        @include('layouts.footer')
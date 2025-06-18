@include('layouts.header')
    
    
    
              <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url('assets/images/backsidegallary.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": [""], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                         <h4 class="title mb-4">{!! ucfirst($result->title)!!}</h4>
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
        <!-- end page title -->
    
    
    
    
    
    <section class="bg-half">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title">
                        
                        <p class="text-muted mb-0 mt-4">{!! ucfirst($result->description)!!}</p>
                    </div>

                </div>
            </div>
        </div>

        
    </section>
    
    
     
        <!-- start section -->
        <section class="pt-0 overflow-hidden">
            
             @php $blog = DB::table('blog_images')->where('blog_id',$result->id)->get(); @endphp
                    @if($blog)
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    <div class="col-6 position-relative swiper-dark-pagination magic-cursor drag-cursor" data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                         
                       
                        <div class="swiper overflow-visible" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "centeredSlides": "true", "loop": true, "pagination": { "el": ".swiper-pagination-bullets-01", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1.8 }, "768": { "slidesPerView": 1.8 }, "320": { "slidesPerView": 1.3 } }, "effect": "slide" }'>
                           
                           
                            <div class="swiper-wrapper align-items-center">
                                 @foreach ($blog as $key => $data)
                                <!-- start carousal item --> 
                                <div class="swiper-slide">
                                    <img class="border-radius-6px w-100" src="{{ asset('/upload/'.$data->image ) }}" alt="" />
                                </div>
                                <!-- end carousal item -->
                                  @endforeach
                            </div>    
                         
                        </div>  
                        
                        <!-- start slider pagination -->
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-style-01 swiper-pagination-bullets-01 position-static mt-40px"></div> 
                        <!-- end slider pagination -->
                    </div>
                    
                     @endif
                </div>
            </div>
        </section>
        <!-- end section -->
@include('layouts.footer')
        @include('layouts.header')



        <script type='text/javascript' src='https://www.google.com/jsapi'></script>




        <!-- end header -->
        <!-- start section -->

        <!-- end section -->
        <!-- start section -->

         
      <section class="section-dark p-0 bg-dark-gray" > 
            <div class="swiper lg-no-parallax   full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
               
            
                <div class="swiper-wrapper">

                    <!-- start slider item -->

                
                @foreach ($slider as $key=>$data)
                   <div class="swiper-slide overflow-hidden">

                     @php $slider = DB::table('slider_images')->where('slider_id',$data->id)->first(); @endphp
                        <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" 
                        style="background-image:url({{ asset('/upload/'.$slider->image) }});">

                            <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                            <div class="container h-100" data-swiper-parallax="-500">
                                <div class="row align-items-center h-100">
                                    <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        
                                        <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px"> 
                    <span class="fw-600">{!! ucfirst($data->title) !!}</span></h1>

 <div>
                                            <span class="fs-30 opacity-20 mb-25px sm-mb-45px d-inline-block fw-300">{!! ucfirst($data->description)!!}
</span>
                                        </div>
                                        <a href="https://wa.me/7385101392?text=I recently explored your website, www.techsowth.com, and was impressed by your services. I'm interested in gaining a deeper understanding of both your company and services. Could you provide additional information?" target="_blank" class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get started now<span class="bg-white text-base-color"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="position-absolute bottom-minus-45px" data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'><span class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">01</span></div>
                            </div>
                        </div>
                    </div>
                   
                 @endforeach
                   
                </div>
              
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                
            </div>
        </section>
        <!-- end section -->


       <div id="watermark">
           <img src="assets/images/techsowth.png">
       </div>
     
       
        <!-- start section -->
        <section class="pb-8 md-pb-17 xs-pb-28">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-6 col-md-9 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About Techsowth Electrical Infra</span>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">About Techsowth Electrical Infra</h3>
                        <p>Techsowth Electrical Infra is an electrical services company established in January 2019. The company's mission is to provide technical, social, and growth-oriented solutions to its customers.</p>


                        <p>Techsowth prides itself on being a customer-centric company that not only offers the best technical services but also helps customers grow socially with them. The company's team consists of architects, engineers, designers, operational managers, sales executives, and expert field workers, including electricians and fabricators.</p>

                        <p>Techsowth offers a diverse portfolio of services, including captive solar power farms, off-grid and grid-tied solar energy systems for both domestic and commercial use, and solutions for residential, commercial, industrial, schools, hospitals, and government buildings. In addition to solar PV systems, the company also works on solar street lights, solar water heaters, solar home light systems, and manufacturing and repairing transformers, electrical maintenance work, and government tendering.</p>

                        <p>Techsowth has a vision to expand its services in the future to a wide range of electrical works and renewable energy solutions, ensuring that its customers receive all the necessary services under one roof.</p>

                        <p>Founded by Makarand Vivek Ayachit, Techsowth Electrical Infra is committed to providing innovative solutions that exceed customer expectations while promoting sustainable growth in the electrical sector.Regenerate res</p>

                        <p>Energize Your Life: Techsowth Electrical Infra – Leaders in Solar Energy Solutions.
Unleashing the Power of the Sun: Techsowth Electrical Infra's Solar Water Heaters.
Illuminate Your Space Sustainably: Techsowth Electrical Infra's Solar Home Lights Brighten the Future.</p>

                      
                    </div>
                    <div class="col-xl-4 col-lg-6 offset-xl-1 position-relative">
                        <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="assets/images/twophotos.jpg" alt="" class="border-radius-5px">
                        </div>
                        <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px" data-shadow-animation="true" data-animation-delay="500" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                            <img src="assets/images/twophotos2.jpg" alt="" class="border-radius-5px box-shadow-quadruple-large" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



















   <!-- start section -->
            <section class="pt-0 position-relative">
                <div class="position-absolute top-minus-70px lg-top-minus-50px left-minus-80px lg-left-minus-60px lg-w-300px opacity-3 w-350px z-index-1 d-none d-lg-inline-block"><img src="assets/images/techsowth.png" alt="" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"></div>
                <div class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 md-pt-50px md-pb-50px overflow-hidden position-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-5 md-mb-30px" data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                                <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i class="bi bi bi-shield-check text-base-color fs-22"></i></span></span>
                                <h2 class="fw-800 text-dark-gray ls-minus-2px">Significant Achievements Summary</h2>
                                <p class="mb-30px">We accomplished significant milestones and successes in our past journey</p>
                              
                            </div>
                           
                        </div> 
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 mt-5 align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <!-- start content box item -->
                            <div class="col md-mb-40px border-end xs-border-end-0 border-color-transparent-dark-very-light">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">2.5MW +</h4>
                                    </div>
                                    <div> 
                                        <div class="fs-18 lh-32 last-paragraph-no-margin text-dark-gray">
                                            
                                        </div>
                                        <span class="fs-18 lh-26 d-block fw-600 text-dark-gray">Portfolio Managed</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end content box item -->
                            <!-- start content box item -->
                            <div class="col md-mb-40px border-end md-border-end-0 border-color-transparent-dark-very-light">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">500 +<sup class="fs-30"></sup></h4>
                                    </div>
                                    <div> 
                                        <span class="fs-18 text-dark-gray lh-26 d-block fw-600">Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end content box item -->
                            <!-- start content box item -->
                            <div class="col text-dark-gray fw-600">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">150 +<sup class="fs-30"></sup></h4>
                                    </div>
                                    <div> 
                                        <span class="fs-18 lh-26 d-block fw-600">Locations</span>
                                    </div>
                                </div>
                            </div>


    <div class="col text-dark-gray fw-600">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">15K+<sup class="fs-30"></sup></h4>
                                    </div>
                                    <div> 
                                        <span class="fs-18 lh-26 d-block fw-600">Deforestation Reduced</span>
                                    </div>
                                </div>
                            </div>



                            <!-- end content box item -->
                        </div>




  <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2 mt-5 align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <!-- start content box item -->
                           
                            <!-- end content box item -->
                            <!-- start content box item -->
                            <div class="col md-mb-40px border-end md-border-end-0 border-color-transparent-dark-very-light">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">10,85,638 KG +<sup class="fs-30"></sup></h4>
                                    </div>
                                    <div> 
                                        <span class="fs-18 text-dark-gray lh-26 d-block fw-600">Tons Reduction In Carbon Emissions / Year</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end content box item -->
                            <!-- start content box item -->
                            <div class="col text-dark-gray fw-600">
                                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                                    <div class="flex-shrink-0 me-25px sm-me-0">
                                        <h4 class="mb-0 text-dark-gray fw-800 ls-minus-2px">5,56,378 KG +<sup class="fs-30"></sup></h4>
                                    </div>
                                    <div> 
                                        <span class="fs-18 lh-26 d-block fw-600">Tons Of Coal Saved / Year</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end content box item -->
                        </div>






                    </div>
                </div>
            </section>
            <!-- end section -->



        <!-- start section -->
        <section class="bg-solitude-blue">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-xl-10 col-lg-9 col-md-10 text-center">
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>The services we offer to our customers</h3>
                    </div>
                </div>
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#tab_four1" class="nav-link d-flex align-items-center active"><i class="feather icon-feather-edit icon-extra-medium text-dark-gray"></i><span>Solar Power Plant</span></a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_four2"><i class="feather icon-feather-edit icon-extra-medium text-dark-gray"></i><span>Solar Water Heater</span></a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_four3"><i class="feather icon-feather-edit icon-extra-medium text-dark-gray"></i><span>Solar Street Light</span></a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_four4"><i class="feather icon-feather-edit icon-extra-medium text-dark-gray"></i><span>Solar Off Grid System</span></a></li>
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_four1">
                                <div class="row align-items-center">
                                    <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                        <img src="assets/images/SolarPowerPlant.jpg" alt="" class="border-radius-6px w-100" />
                                    </div>
                                    <div class="col-xl-4 col-md-6 offset-xl-1 text-center text-md-start">
                                        <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-briefcase fs-22"></i></span></span>
                                        <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span class="fw-600">Solar Power Plant</h5>
                                        <p>Techsowth Electrical Infra offers photovoltaic solar solutions for rooftop electricity generation, providing a modern and sustainable energy alternative.</p>
                                        <a href="demo-business-services-details.html" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four2">
                                <div class="row align-items-center">
                                    <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                        <img src="assets/images/SolarWaterHeater.jpg" alt="" class="border-radius-6px w-100" />
                                    </div>
                                    <div class="col-xl-4 col-md-6 offset-xl-1 text-center text-md-start">
                                        <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-edit fs-22"></i></span></span>
                                        <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span class="fw-600">Solar Water Heater</h5>
                                        <p>Techsowth Electrical Infra offers state-of-the-art solar panels designed for street lighting and a variety of other applications, ensuring top-notch quality.</p>
                                        <a href="demo-business-services-details.html" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four3">
                                <div class="row align-items-center">
                                    <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                        <img src="assets/images/SolarStreetLight.jpg" alt="" class="border-radius-6px w-100" />
                                    </div>
                                    <div class="col-xl-4 col-md-6 offset-xl-1 text-center text-md-start">
                                        <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-compass fs-22"></i></span></span>
                                        <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span class="fw-600">Solar Street Light</h5>
                                        <p>We provide cutting-edge solar water heaters renowned for their exceptional efficiency and ease of operation.</p>
                                        <a href="demo-business-services-details.html" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four4">
                                <div class="row align-items-center">
                                    <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                        <img src="assets/images/SolarOffGridSystem.jpg" alt="" class="border-radius-6px w-100" />
                                    </div>
                                    <div class="col-xl-4 col-md-6 offset-xl-1 text-center text-md-start">
                                        <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-globe fs-22"></i></span></span>
                                        <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span class="fw-600">Solar Off Grid System</h5>
                                        <p>We offer a variety of solar lamps for environmentally friendly home lighting, ensuring pollution-free illumination.</p>
                                        <a href="demo-business-services-details.html" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


  <!-- start section -->
        <section class="overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-center border-radius-8px p-4 xs-p-7 text-center text-lg-start g-0 cover-background" style="background-image: url('assets/images/demo-hosting-home-03.jpg')" data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);" data-top-bottom="transform:scale(1.0, 1.0) translateY(-30px);"> 
                    <div class="col-lg-4 col-md-9 md-mb-10px icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle border border-2 border-color-transparent-white-light me-30px xs-me-25px">
                                <img src="assets/images/demo-hosting-home-icon.svg" class="w-50px h-50px" alt=""> 
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <h5 class="d-inline-block fw-600 text-white mb-0">PM Surya Ghar Yojana</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center text-lg-end"> 
                        <div class="text-white d-inline-block last-paragraph-no-margin me-20px xs-m-100px">
                            <p class="opacity-8 d-inline-block"> A government scheme providing free electricity to Indian households. <span class="fw-600 d-inline-block text-decoration-line-bottom"></span>
                        </div>
                        <a href="{{route('pmsuryaghar')}}" class="btn btn-medium bg-yellow btn-rounded fw-600 btn-switch-text btn-box-shadow">

                            </span>

                            <span>
                                <span class="btn-double-text" data-text="Know More">Know More</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

    <!-- start section -->
        <section class="p-0 overflow-hidden bg-dark-gray full-screen ipad-top-space-margin md-h-auto position-relative md-pb-70px sm-pb-40px cover-background" style="background-image: url('assets/images/demo-hosting-home-bg.jpg')">
            <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0" style="background-image: url('images/vertical-line-bg-small.svg')"></div>
            <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div> 
            <div class="position-absolute left-minus-80px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
                <img src="assets/images/demo-elearning-02.png" alt="">
            </div>
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-xl-5 col-lg-6 col-md-12 text-white text-center text-lg-start position-relative z-index-1 d-flex flex-column justify-content-center h-100 md-mt-50px md-mb-20px xs-mb-10px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                        <span class="alt-font fs-75 lh-65 sm-fs-60 fw-500 mb-25px ls-minus-2px">Techsowth has a wide portfolio.</span>
                        <div class="mb-30px w-80 md-w-60 sm-w-100 d-block mx-auto mx-lg-0 overflow-hidden">
                            <span class="fs-18 fw-300 opacity-5 d-inline-block">We’ve installed solar panels across Maharashtra’s residential, commercial, and industrial areas. </span>
                        </div>
                        
                        <div class="row row-cols-3 justify-content-center counter-style-04 w-100 md-w-auto position-absolute lg-position-relative bottom-80px lg-bottom-0px lg-mt-50px">
                            <!-- start counter item -->
                            <div class="col text-center text-lg-start">
                                <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="20"></h5>
                                <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                                <span class="fw-300 text-white opacity-5">Distrcits</span>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col text-center text-lg-start">
                                <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="500"></h5>
                                <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                                <span class="fw-300 text-white opacity-5">Happy Clients</span>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col text-center text-lg-start">
                                <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px" data-text="+" data-to="150"></h5>
                                <div class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto"></div>
                                <span class="fw-300 text-white opacity-5">Locations</span>
                            </div>
                            <!-- end counter item -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 pt-30px lg-pt-0">
                        <div class="position-relative outside-box-right-10 md-outside-box-right-0 atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center w-100">
                                        <div data-atropos-offset="-1" class="position-absolute left-0px right-0px">
                                            <img src="" alt="">
                                        </div>
                                        <img data-atropos-offset="1" class="position-relative z-index-9 animation-float" src="assets/images/mhmap.png" alt="">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- end section -->


        <section class="overflow-hidden pb-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-8 position-relative text-center text-xl-start lg-mb-15px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-base-color fw-600 mb-15px text-uppercase d-block">Client feedback</span>
                        <h3 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-20px mx-auto">What do people say about our services?</h3>
                        
                        <div class="d-flex justify-content-center justify-content-xl-start">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray" tabindex="0" role="button" aria-label="Previous slide"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray" tabindex="0" role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>

                    
                    <div class="col-xl-7 col-lg-10 overflow-hidden" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="outside-box-right-15 xl-outside-box-right-20 sm-outside-box-right-0">
                            <div class="swiper slider-one-slide slider-shadow-right sm-slider-shadow-none  overflow-visible ps-25px sm-p-0" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>

                                
                                <div class="swiper-wrapper pt-30px pb-30px"> 

                           @foreach ($testimonial as $key=>$data)

                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-06"> 

                                        @php $testimonial = DB::table('testimonial')->where('id',$data->id)->first(); @endphp

                                        <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                            <div class="mb-20px d-flex align-items-center">
                                                
                                                <div class="d-inline-block align-middle last-paragraph-no-margin">
                                                    <div class="alt-font text-dark-gray fw-600 fs-18">{!! ucfirst($data->title) !!}</div>
                                            
                                                </div>
                                                <div class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto sm-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i></div>
                                            </div>
                                            <p>{!! ucfirst($data->description) !!}</p>
                                        </div>
                                    </div>
                                    <!-- end review item -->


                            @endforeach
                                   
                                   
 
                                </div>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->




        <!-- start section -->
        <section class="pt-4">
            <div class="container"> 
                <div class="row position-relative clients-style-08" data-anime='{ "opacity": [1,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/warree.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/ksolare.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/growwat.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/kirloskarsolar.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/exide.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/hpl.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/luminus.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/schne.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/luminus.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/hawalles.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/pollycab.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/lt.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/adani.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/renewsay.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#"><img src="assets/images/solis.png" class="h-80px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


<!-- start subscription popup -->
        <div id="subscribe-popup" class="mfp-hide subscribe-popup">
            <div class="container-fluid">
                <div class="row newsletter-popup position-relative justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 text-center p-45px pt-55px pb-55px xs-p-30px xs-pt-30px xs-pb-30px position-relative box-shadow-quadruple-large bg-white border-radius-8px">
                        <div class="fs-14 text-uppercase text-dark-gray fw-600 d-block d-sm-flex align-items-center justify-content-center mb-5px">
                            <div class="me-5px xs-ms-10px d-inline-block align-middle text-red"></div> 
                            <div class="d-inline-block align-middle">How we can help you ?</div>
                        </div>
                      
                       
                            <form autocomplete="off">
                                <div class="form-group">
                                    <input type="text" name="Name" id="name" class="form-control"
                                        placeholder="Your Name *" value="" required="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Email" id="email" class="form-control"
                                        placeholder="Your Email *" value="" required="" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="Phone" id="phone" class="form-control"
                                        placeholder="Your Contact Number *" value="" required="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="service">
                                        <option>Solar System For</option>
                                        <option>Industrial Uses</option>
                                        <option>Domestic Uses</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="button" name="submit" class="btnSubmit btn-block" onclick="gotowhatsapp()" value="Submit" />
                                </div>
                            </form>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end subscription popup -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>;
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>;
    
    
    <script>
function gotowhatsapp() {
    
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var service = document.getElementById("service").value;
    var url = "https://wa.me/7385101392?text="+ "Name: " + name + "%0a"+ "Phone: " + phone + "%0a" + "Email: " + email  + "%0a"+ "Service: " + service; 
    window.open(url, '_blank').focus();
}
</script>
    <!-- start section -->
        <section class="position-relative overflow-hidden py-0">
            <div class="skrollr-parallax mx-auto pt-7 pb-7 md-pt-12 md-pb-12" data-bottom-top="width: 63%" data-center-top="width: 100%;" data-parallax-background-ratio="0.5" style="background-image: url('assets/images/backsideimage.jpg')">
                <div class=" "></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="col-xl-9 col-lg-10 text-center position-relative last-paragraph-no-margin parallax-scrolling-style-2">
                            
                            
                            <h3 class="text-white fw-500 alt-font ls-minus-2px text-shadow-double-larg">Harness Sustainable Power with Solar Energy as Daylight Dances.</h3>

                             <span class="opacity-10 ls-2px text-uppercase alt-font text-white d-block mb-2 fw-500">Techsowth Electrical Infra is dedicated to delivering cutting-edge solar solutions that seamlessly blend technology, social impact, and sustainable growth for its customers.


                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end section -->














       
        <!-- start section -->
        <section class="bg-dark-slate-blue pt-4 pb-4 lg-pt-6 lg-pb-6" data-parallax-background-ratio="0.5" style="background-image: url('assets/images/backsideimage.jpg')" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="opacity-medium bg-dark-slate-blue"></div>
            <div class="container z-index-1 position-relative"> 
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h4 class="alt-font text-white mb-0 fw-300 fancy-text-style-4">Innovative Solar Solutions for Every Sector
                            <span class="fw-600" data-fancy-text='{ "effect": "wave", "direction": "down", "string": ["business!", "problems!", "brands!"], "duration": 3500 }'></span>
                        </h4> 
                    </div>
                </div>
            </div>
        </section>
      

@include('layouts.footer')
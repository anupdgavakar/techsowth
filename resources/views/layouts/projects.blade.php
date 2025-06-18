@include('layouts.header')


           

                 <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url('assets/images/backsideproject.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": [""], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                        <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Projects "], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h2>
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
        
        
    
     <!-- start section -->
        <section class="ps-2 pe-2">
            <div class="container-fluid"> 
                <div class="row" >
                   @if($projects)
                        @foreach ($projects as $key=>$data)
                    
                    <div class="col-sm-6">
                        <div class="justified-gallery image-gallery-style-06" data-justified-options='{ "rowHeight": 1000, "maxRowHeight": false, "captions": false, "margins": 10,  "waitThumbnailsLoad": true }' data-anime='{ "el": "childs", "translateY": [-100, ],"opacity": [0,0], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <!-- start gallery item -->
                            
                             @php $projects = DB::table('projects_images')->where('projects_id',$data->id)->get(); @endphp

                                        @foreach($projects as $i => $val)
                                            @if($i == 0)

                             
                            <div class="gallery-box transition-inner-all text-center">

                                
                                <a href="{{ asset('/upload/'.$val->image)}}" data-group="lightbox-group-gallery-item-2" title="{{$data->title}}">
                                

                                    <div class="position-relative  h-400 w-400">
                                        <img src="{{ asset('/thumbnail/'.$val->image)}}" alt="" />

                                        <span class="gallery-title text-black  fs-18">{{$data->title}}</span>
                                        <div class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                            <i class="icon feather icon-feather-search icon-very-medium text-white absolute-middle-center"></i>
                                            
                                        </div>
                                    </div>
                                </a>
                                
                               @else
                                 
                                 <a href="{{ asset('/upload/'.$val->image)}}" data-group="lightbox-group-gallery-item-2" title="{{$data->title}}">
                                    <div class="position-relative bg-dark-gray">
                                        <img src="{{ asset('/thumbnail/'.$val->image)}}" alt="" />
                                        <div class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                            <i class="icon feather icon-feather-search icon-very-medium text-white absolute-middle-center"></i>
                                            <span class="gallery-title text-white fs-18">{{$data->title}}</span>
                                        </div>
                                    </div>
                                </a>
                                
                               @endif
                                        @endforeach
                            </div>
                           
                        </div>
                    </div>
                    
                       @endforeach
                    @endif
                    
                </div>
            </div>
        </section>
        <!-- end section -->


@include('layouts.footer')
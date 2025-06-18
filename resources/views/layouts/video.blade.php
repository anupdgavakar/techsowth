@include('layouts.header')
<section class="section">
        <div class="container-fluid">
           

                 <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url('assets/images/videobackside.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": [""], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                        <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Videos"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h2>
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
        
        
        
        
        
        
        
        <section class="section">
    <div class="container">
        <div class="row projects-wrapper">
            @foreach ($data as $val)
                <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 branding">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <iframe width="560" height="315" src="{{$val->url}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"></iframe>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
        
        
        
        
        
        
        
        
        
        

        </div>
    </section>
@include('layouts.footer')
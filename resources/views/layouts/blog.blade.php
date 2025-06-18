@include('layouts.header')

         <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url('assets/images/pmsuryaghar.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": [""], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                        <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Blogs"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h2>
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
            <div class="row">
                @foreach ($blogs as $key=>$data)
                    <div class="col-lg-12 col-12 mb-4 pb-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <div class="row align-items-center g-0">
                                <div class="col-md-4">
                                    @php $blog = DB::table('blog_images')->where('blog_id',$data->id)->first(); @endphp
                                    <img src="{{ asset('/upload/'.$blog->image) }}" class="img-fluid" alt="{{$data->title}}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">{!! ucfirst($data->title) !!}</a></h5>
                                        <!--<p class="text-muted mb-0">{!! ucfirst($data->description)!!}</p>-->
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-calender me-1"></i>{!! ucfirst($data->created_at) !!}</a></li>
                                            </ul>
                                            <a href="{{ url('blogdetails/'.$data->id ) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

               
            </div>
        </div>
    </section>
       
@include('layouts.footer')
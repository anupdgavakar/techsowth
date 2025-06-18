<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Techsowth Electrical Infra</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Berlin Energy">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Berlin Energy">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="assets/images/techsowth2.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="{{asset('assets/css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/business/business.css')}}" />
    </head>

    <style>

/* (A) PAGE WATERMARK */
#watermark {
  /* STICK AT BOTTOM RIGHT */
  position: fixed;
  bottom: 200px;
  right: 450px;
  z-index: 499;
  background-size: 50% 50%;
  width: 50% !important;
    height: 50% !important;
 
  /* TRANSPARENCY */
  opacity: 0.2;
 
  /* COSMETICS */
  text-align: right;
  color: red;
}

@media (max-width: 700px) {
  .hidden-mobile {
  display: none;
}

</style>

<!-- render the button and direct it to wa.me -->
<a href="https://wa.me/7385101392?text=I recently explored your website, www.techsowth.com, and was impressed by your services. I'm interested in gaining a deeper understanding of both your company and services. Could you provide additional information?" class="floating" target="_blank">
<i class="fab fa-whatsapp fab-icon"></i>
</a>


    <body data-mobile-nav-style="classic">


 



<!-- start header -->
        <header>
            <!-- start navigation --> 
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky header-demo">
                <div class="container-lg">   
                    <div class="col-auto me-auto ps-lg-0">
                       
                         <a class="navbar-brand" href="demo-business.html">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="default-logo">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="alt-logo">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto menu-order">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                           <ul class="navbar-nav alt-font"> 
                                <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link">About Us</a></li>
                             
                                 <li class="nav-item dropdown submenu">
                                    <a href="{{route('projects')}}" class="nav-link">Projects</a> </li>
                                <li class="nav-item"><a href="{{route('gallary')}}" class="nav-link">Gallary</a></li>
                                 <li class="nav-item"><a href="{{route('video')}}" class="nav-link">Videos</a></li>
                                  <li class="nav-item"><a href="{{route('download')}}" class="nav-link">Download</a></li>
                                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                      <div class="col-auto col-lg-2 text-end xs-pe-0"> 
                        <div class="header-icon">  
                            <div class="header-button">
                                <a href="{{route('contact')}}" target="_blank" class="btn btn-dark-gray btn-small btn-switch-text btn-rounded text-transform-none btn-box-shadow purchase-envato">
                                    <span>
                                        <span class="btn-double-text" data-text="Get a quote">Get a quote</span>
                                    </span> 
                                </a> 
                            </div>
                        </div>
                    </div>


                    
                </div> 
            </nav> 
        </header>
        <!-- end header -->
 <!-- <header> 
            
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="demo-business.html">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="default-logo">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="alt-logo">
                            <img src="assets/images/techsowth.png" data-at2x="assets/images/techsowth.png" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav"> 
                            <ul class="navbar-nav alt-font"> 
                                <li class="nav-item"><a href="demo-business.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="demo-business-about.html" class="nav-link">About</a></li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-business-services.html" class="nav-link">Services</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-briefcase"></i>Business planning</a></li>
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-clipboard-data"></i>Business research</a></li>
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-peace"></i>Tracking operations</a></li>
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-bar-chart-line"></i>Market research</a></li>
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-send-check"></i>Business campaign</a></li>
                                        <li><a href="demo-business-services-details.html"><i class="bi bi-globe2"></i>Digital solutions</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="demo-business-clients.html" class="nav-link">Clients</a></li>
                                <li class="nav-item"><a href="demo-business-pricing.html" class="nav-link">Pricing</a></li>
                                <li class="nav-item"><a href="demo-business-blog.html" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="demo-business-contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon">
                            <div class="d-none d-xxl-inline-block me-25px xxl-me-10px"><div class="alt-font fs-15 xl-fs-13 widget-text fw-500"><span class="w-35px h-35px bg-base-color d-inline-block lh-36 me-10px border-radius-100px"><i class="feather icon-feather-phone me-10px"></i></span><a href="tel:1800222000" class="widget-text text-white-hover">1 800 222 000</a></div></div>
                            <div class="header-button"><a href="demo-business-contact.html" class="btn btn-very-small btn-transparent-white-light btn-rounded">Get a quote</a></div>
                        </div>  
                    </div>
                </div>
            </nav>
         
        </header> -->
      
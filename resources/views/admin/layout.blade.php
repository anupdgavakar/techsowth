<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Techsowth Electrical Infra</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Choices.js-->
        <link rel="stylesheet" href="{{asset('admin_assets/vendor/choices.js/public/assets/styles/choices.min.css')}}">
        <!-- Google fonts - Muli-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{asset('admin_assets/css/style.default.css')}}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{asset('admin_assets/css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap-datepicker.min.css')}}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="assets/images/techsowth2.png">
        <script type="text/javascript" src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
        <style>
            .text-right {
                text-align: right !important;
            }
            .form-select {
                background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/></svg>") !important;
            }
        </style>
        
        
        
        <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

 <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

        
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
                <div class="container-fluid d-flex align-items-center justify-content-between py-1">
                    <div class="navbar-header d-flex align-items-center">
                        <a class="navbar-brand text-uppercase text-reset" href="{{route('index')}}">
                            <div class="brand-text brand-big"><strong class="text-primary">Techsowth Electrical Infra</strong></div>
                            <div class="brand-text brand-sm"><strong class="text-primary"></strong></div>
                        </a>
                        <button class="sidebar-toggle">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                                <use xlink:href="#arrow-left-1"> </use>
                            </svg>
                        </button>
                    </div>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item logout px-lg-2">
                            <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="d-none d-sm-inline-block">Logout </span>
                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#disable-1"> </use>
                                </svg>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @php
        $segment_count = count(request()->segments());
        $last_segment = request()->segment($segment_count);
        $sec_last_segment = request()->segment($segment_count-1);
        @endphp
        <div class="d-flex align-items-stretch">
            <!-- Sidebar Navigation-->
            <nav id="sidebar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center p-4">
                    <div class="ms-3 title">
                        <h1 class="h5 mb-1">Admin</h1>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li class="sidebar-item {{($last_segment == 'dashboard') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('dashboard')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Dashboard </span>
                        </a>
                    </li>
                    <li class="sidebar-item {{($last_segment == 'blog_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('blog_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Blog List </span>
                        </a>
                    </li>

                     <li class="sidebar-item {{($last_segment == 'projects_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('projects_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Project List </span>
                        </a>
                    </li>


                    <li class="sidebar-item {{($last_segment == 'gallery_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('gallery_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Gallery List </span>
                        </a>
                    </li>

                      <li class="sidebar-item {{($last_segment == 'video_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('video_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Media</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{($last_segment == 'slider_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('slider_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Slider List </span>
                        </a>
                    </li>
                    <li class="sidebar-item {{($last_segment == 'testimonial_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('testimonial_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Testimonial</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{($last_segment == 'download_list') ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('download_list')}}">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>
                            <span>Downloads </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/just-validate/js/just-validate.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        <!-- <script src="{{asset('admin_assets/js/charts-home.js')}}"></script> -->
        <script src="{{asset('admin_assets/js/front.js')}}"></script>
        <script>
            function injectSvgSprite(path) {
                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
        </script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <script type="text/javascript">
            $(function () {
                $('#releasing_date').datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true
                });
            });

            $('.number').keypress(function(event) {
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) &&
                    ((event.which < 48 || event.which > 57) &&
                        (event.which != 0 && event.which != 8))) {
                    // alert('Please enter only number');
                    event.preventDefault();
                }
            });
        </script>
    </body>
</html>
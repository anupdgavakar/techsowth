<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login | BVVP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <link rel="shortcut icon" href="{{url('/')}}/assets/img/favicon.png">
        <!-- Choices.js-->
        <link rel="stylesheet" href="{{asset('admin_assets/vendor/choices.js/public/assets/styles/choices.min.css')}}">
        <!-- Google fonts - Muli-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{asset('admin_assets/css/style.default.css')}}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{asset('admin_assets/css/custom.css')}}">
    </head>
    <body>
        <div class="login-page">
            <div class="container d-flex align-items-center position-relative py-5">
                <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
                    <div class="card-body p-0">
                        <div class="row gx-0 align-items-stretch">
                            <!-- Logo & Information Panel-->
                            <div class="col-lg-6">
                                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                                    <div class="py-5">
                                        <h1 class="display-6 fw-bold">Admin Login</h1>
                                        <!-- <p class="fw-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Form Panel    -->
                            <div class="col-lg-6 bg-white">
                                <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                                    <form class="login-form py-5 w-100" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="input-material-group mb-3">
                                            <input class="input-material" id="login-username" type="email" name="email" autocomplete="off" required data-validate-field="loginUsername">
                                            <label class="label-material" for="login-username">Email</label>
                                        </div>
                                        <div class="input-material-group mb-4">
                                            <input class="input-material" id="login-password" type="password" name="password" required data-validate-field="loginPassword">
                                            <label class="label-material" for="login-password">Password</label>
                                        </div>
                                        <button class="btn btn-primary mb-3" id="login" type="submit">Login</button><br>
                                        <!-- <a class="text-sm text-paleBlue" href="#">Forgot Password?</a><br> -->
                                        <!-- <small class="text-gray-500">Do not have an account? </small>
                                            <a class="text-sm text-paleBlue" href="register.html">Signup</a> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/just-validate/js/just-validate.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        <!-- Main File-->
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
    </body>
</html>
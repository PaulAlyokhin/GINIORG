<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{ url('admin_assets/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ url('admin_assets/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
    <link href="{{ url('admin_assets/assets/demo/demo5/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ url('admin_assets/assets/demo/demo5/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('admin_assets/assets/app/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin_assets/assets/vendors/custom/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" href="{{ url('admin_assets/assets/vendors/custom/datatables/datatables.bundle.rtl.css') }}">
    <!--RTL version:<link href="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
    <!-- custom style -->
    <link rel="stylesheet" href="{{ url('admin_assets/assets/app/css/custom-style.css') }}">
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{ url('admin_assets/assets/demo/demo5/media/img/logo/favicon.ico') }}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">
    <div class="login-page-main-wrapper" style="background: url({{ url('admin_assets/assets/app/media/img/loginbg.png') }}); background-size: cover; background-position: center;">
        <img src="{{ url('admin_assets/assets/app/media/img/globe.png') }}" alt="" class="globe">

        <div class="login-main">
            <div class="logo-area">
                <h5 class="title"><a href="{{ url('register') }}">CRAETE NEW ACCOUNT</a></h5>
                <a href="{{ url('homepage') }}" class="m-brand__logo-wrapper">
                    <img alt="" src="{{ url('admin_assets/assets/app/media/img/admin-login-logo.png') }}" />
                </a>
                <div class="heading-area">
                    <h2 class="login-heading">Welcome Admin</h2>
                </div>
            </div>
            <div class="form-area">
                <form action="{{ url('login') }}" method="POST">@csrf
                    <input type="hidden" name="logintype" value="admin"/>
                    <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Username or Email">
                    </div>
                    <div class="form-group d-flex">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <button class="admin-submit">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    <p class="forgot-pass"><a href="#">Forgot Password</a></p>
                    <a href="" class="btn-cancel">CANCEL LOGIN</a>
                </form>
            </div>
        </div>
    </div>
    <footer style="background: url({{ url('admin_assets/assets/app/media/img/footerbg.png') }}); background-size: cover;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-mg-6 col-lg-8"> 
                        <a href="index.php">
                            <img src="{{ url('admin_assets/assets/app/media/img/logo-footer.png') }}" alt="" class="logo-footer mr-3"> 
                        </a>
                        <span class="footer-address">Grand Rapids, MI 49503 USA | +1 877 276 7701 | GInI@GInI.org</span> 
                        <span><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a><a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a></span> 
                    </div>
                    <div class="col-mg-6 col-lg-4">
                        <span class="copy-right">© 2018 GLOBAL INNOVATION INSTITUTE (GInI)</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

    <!-- end::Body -->
</html>
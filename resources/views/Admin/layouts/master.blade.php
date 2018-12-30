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
    <title>GINI | GLOBAL INNOVATION INSTITUTE</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-16x16.png') }}">

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

    <link rel="stylesheet" type="text/css" href="{{ url('admin_assets/assets/vendors/custom/chartist-plugins/chartist-plugin-tooltip.css') }}" />
    <!--begin::Global Theme Styles -->
    <link href="{{ url('admin_assets/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ url('admin_assets/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
    <link href="{{ url('admin_assets/assets/demo/demo5/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ url('admin_assets/assets/demo/demo5/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin_assets/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
    <!-- custom style -->
    <link href="{{ url('/vendors/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{ url('admin_assets/assets/demo/demo5/media/img/logo/favicon.ico') }}" />
    <style>
    #weekly-visiters {
        width: 75px;
        height: 150px;
        margin-top: -25px;
        margin-bottom: -60px;
        margin-right: -20px;
        margin-left: -20px;
    }
    #monthly-chart,
    #monthly-chart1 {
        width: 100%;
        height: 150px;
        margin-bottom: -50px;
        margin-top: -30px;
    }
    #monthly-chart:after, #monthly-chart1:after {
        content: "";
        display: block;
        width: 100%;
        height: 20px;
        background: #e1e1e1;
        position: absolute;
        bottom: 0;
        z-index: 999;
    }
    div#monthly-chart1 {
        margin-top: -19px;
    }

    </style>
    @yield('after_style')
    <link rel="stylesheet" href="{{ url('admin_assets/assets/app/css/custom-style.css') }}">
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- begin::Header -->
        @include('Admin.layouts.inc.header')

        @yield('content')

        <!-- begin::Footer -->
    <footer>
        <p>footer</p>
    </footer>
    </div>

    <!-- end::Body -->


    <!-- end::Footer -->
    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!-- begin::Quick Nav -->
    <!-- <ul class="m-nav-sticky" style="margin-top: 30px;">
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
                <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
                <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
            </li>
        </ul> -->

    <!-- begin::Quick Nav -->

    <!--begin::Global Theme Bundle -->
    <script src="https://www.amcharts.com/lib/4/core.js') }}"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js') }}"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js') }}"></script>
    <script src="{{ url('admin_assets/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('admin_assets/assets/demo/demo5/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ url('admin_assets/assets/vendors/custom/chartist-plugins/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ url('admin_assets/assets/vendors/custom/chartist-plugins/chartist-plugin-fill-donut.min.js') }}"></script>

    <script src="{{ url('admin_assets/assets/app/js/my-script.js') }}"></script>
    <script src="{{ url('/vendors/toastr/build/toastr.min.js') }}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors -->
    <script src="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('admin_assets/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ url('admin_assets/assets/app/js/bootstrap-confirmation.min.js') }}"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    @yield('after_script')
    <script>
    $('document').ready(function(){
        @if ($errors->any())
            @foreach ($errors->all() as $key => $error)
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                };

            toastr.warning("{{ $error }}");
            @endforeach
        @endif
    });
        
    </script>
    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>

<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>SKYPOS | A COMPLETE RETAIL SOLUTION</title>
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
    <link href="{{asset('theme/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />



    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    @yield('page_level_styles')

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    @yield('content')
</div>

<!-- end:: Page -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('theme/js/jquery/dist/jquery.min.js')}}" type="text/javascript" ></script>
<script src="{{asset('theme/js/popper.js/dist/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/bootstrap/dist/js/bootstrap-old.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/vendors.bundle.js')}}"  type="text/javascript"></script>
<script src="{{asset('theme/js/scripts.bundle.js')}}" type="text/javascript" ></script>

<!--end::Global Theme Bundle -->
@yield('page_level_scripts')

</body>

<!-- end::Body -->
</html>

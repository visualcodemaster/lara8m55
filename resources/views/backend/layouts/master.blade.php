<!DOCTYPE html>

<html lang="en">

    <!-- begin::Head -->
    @include('backend.partials.head')
    <!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    @include('backend.partials.header')
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
    @include('backend.partials.aside')
    <!-- END: Left Aside -->

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
{{--            @include('partials.sub-header')--}}
            <!-- END: Subheader -->
            <div class="m-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
        @include('backend.partials.footer')
    <!-- end::Footer -->
    </div>

    <!-- end:: Page -->


    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->
<div id="divPreLoader">
    <img src="{{asset('media/images/loader.gif')}}" id="preLoader" style="z-index:99999; position:fixed;background-position:center;height:70px; left: 50%;top: 40%; display:none;">
</div>
    <!-- begin::Scripts -->
    @include('backend.partials.scripts')
    <!-- end::Scripts -->


</body>

<!-- end::Body -->
</html>

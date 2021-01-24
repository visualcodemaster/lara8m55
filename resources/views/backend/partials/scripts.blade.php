<!--begin::Global Theme Bundle -->
<script src="{{asset('theme/js/jquery/dist/jquery.min.js')}}" type="text/javascript" ></script>
<script src="{{asset('theme/js/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/bootstrap/dist/js/bootstrap-old.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/vendors.bundle.js')}}"  type="text/javascript"></script>
<script src="{{asset('theme/js/scripts.bundle.js')}}" type="text/javascript" ></script>
<script src="{{asset('theme/js/custom.js')}}" type="text/javascript" ></script>
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors -->
    @yield('vendor_level_scripts')
<!--end::Page Vendors -->

<!--begin::Page Scripts -->
    @yield('page_level_scripts')
<!--end::Page Scripts -->

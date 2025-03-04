<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ProMax - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo-dark.png') }}">
    <!-- Notification css (Toastr) -->
    <link href="{{ asset('admin/assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Vendor css -->
    <link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropify css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/dropify/css/dropify.min.css') }}" type="text/css" />
    <!-- Theme Config Js -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}">

    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <!-- Notification css (Toastr) -->
    <link href="{{ asset('admin/assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('custom_css')

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        {{-- Sidebar --}}
        @include('Admin.partials.sidebar')
        {{-- End Sidebar --}}
        {{-- topnav --}}
        @include('Admin.partials.topnav')
        {{-- end topnav --}}

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            @yield('content')


            {{-- footer --}}
            @include('Admin.partials.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('Admin.partials.customize')

    @include('Admin.partials.footer_script')
    @stack('script')

</body>

</html>

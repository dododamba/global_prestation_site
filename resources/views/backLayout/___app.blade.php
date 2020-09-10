<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Willko" name="author" />
        <meta name="keywords" content="Visitor Management System Africa, Free Visitor Management System Africa, Smart Check in Solution, Interactive Digital Receptionist, Visitor Sign in App, Visitor Sign in Software for Corporates">
        <meta name="description" content="Digital visitor management system to transform your front office experience. Say no to passive visitor logbooks and onboard an interactive facial recognition system to check-in you visitors smartly. First impression matters.">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts.head')

    </head>


    <body data-sidebar="dark">

          <!-- Begin page -->
          <div id="layout-wrapper">
            @include('layouts.topbar')
            @include('layouts.sidebar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid" >
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
            </div>
            <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <script src="{{ asset('js') }}/axios.min.js"></script>

    <!-- JAVASCRIPT -->

    @include('layouts.footer-script')
    </body>
</html>

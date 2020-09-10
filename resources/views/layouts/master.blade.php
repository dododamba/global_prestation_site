<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | Willko - A visitor managment system</title>
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

    @section('body')
    @show
    <body data-sidebar="dark">
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
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
    <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-messaging.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#config-web-app -->

        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "---",
                authDomain: "---",
                databaseURL: "---",
                projectId: "---",
                storageBucket: "",
                messagingSenderId: "---",
                appId: "---"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            const messaging = firebase.messaging();
        </script>
    <script src="{{ asset('js') }}/axios.min.js"></script>

    <!-- JAVASCRIPT -->

    @include('layouts.footer-script')   
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('334a6f8df624e1c5bea4', {
          cluster: 'eu'
        });
    
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
          toastr.success(data.name);
        });
      </script>
    </body>
</html>
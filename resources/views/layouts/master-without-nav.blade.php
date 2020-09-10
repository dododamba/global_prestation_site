<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | Wilko - A visitor managment system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Digital visitor management system to transform your front office experience. Say no to passive visitor logbooks and onboard an interactive facial recognition system to check-in you visitors smartly. First impression matters.">
        <meta name="keywords" content="Visitor Management System Africa, Free Visitor Management System, Smart Check in Solution, Interactive Digital Receptionist, Visitor Sign in App, Visitor Sign in Software for Corporates">
        <meta content="Wilko by VMG" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

        @toastr_css
        @include('layouts.head')
  </head>

    @yield('body')
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
    @jquery
    @toastr_js
    @toastr_render


    <div class="home-btn d-none d-sm-block">
         <div class="dropdown d-inline-block">
        
        
            @if(app()->getLocale()=='en')

            <button type="button" class="btn header-item waves-effect"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 align-middle flag-icon flag-icon-gb"></span>
                </button>

            @else
            <button type="button" class="btn header-item waves-effect"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 align-middle flag-icon flag-icon-{{ app()->getLocale()}}"></span>
        </button>

            @endif


            
         
                <div class="dropdown-menu dropdown-menu-right">

                    <a href="lang/en" class="dropdown-item notify-item"><span class="mr-2 align-middle flag-icon flag-icon-gb"></span>English</a>
                    <a href="lang/fr" class="dropdown-item notify-item"> <span class="mr-2 align-middle  flag-icon flag-icon-fr"></span>Français</a>
                    <a href="lang/es" class="dropdown-item notify-item"> <span class="mr-2 align-middle  flag-icon flag-icon-es"></span>Espanol</a>
                    <a href="lang/ly" class="dropdown-item notify-item"> <span class="mr-2 align-middle  flag-icon flag-icon-sa"></span>عربي</a>
                    <!-- item-->
                    
                    
                </div>

             {{ app()->getLocale() }}

            </div>
    </div>
    <br><br>
     <div class="clearfix">
     </div>
      @yield('content')

    @include('layouts.footer-script')
    </body>
</html>
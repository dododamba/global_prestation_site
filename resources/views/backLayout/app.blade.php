<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title> @yield('title') | Global Prestation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Dominique DAMBA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ URL::asset('webs/css/bootstrap.min.css')}}" id="bootstrap-light" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('webs/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('webs/css/app.min.css')}}" id="app-light" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <style>
        body[data-sidebar=dark] .vertical-menu {
             background: #122461;
            }


        body[data-sidebar=dark] #sidebar-menu ul li a {
        color: #fff;
        }

        body[data-sidebar=dark] #sidebar-menu ul li a i {
        color: #fff;
        }

        body[data-sidebar=dark] #sidebar-menu ul li a:hover {
        color: #6a7187;
        }

        body[data-sidebar=dark] #sidebar-menu ul li a:hover i {
        color: #6a7187;
        }

        body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a {
        color: #ffffff;
        font-size: 13px;

        }

        body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a:hover {
        color: #6a7187;
        font-size: 13px;

        }


        #sidebar-menu ul li a {
        display: block;
        padding: 0.625rem 1.5rem;
        color: #fff;
        position: relative;
        font-size: 15px;
        transition: all 0.4s;
    }


    #sidebar-menu ul li a ul li  a {
        font-size: 15px;
    }



    .file-upload-btn:hover {
            background: #245acf;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #245acf;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #245acf;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }



        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .store-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #245acf;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #245acf;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }


        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        .store-image:hover {
            background: #245acf;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .store-image:active {
            border: 0;
            transition: all .2s ease;
        }




         .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

         .avatar-preview > img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }


         .avatar-preview {
            width: 100px;
            height: 100px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #eff2f7;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }


    </style>
    @yield('css')



    </head>

    <body data-sidebar="dark">

        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
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
        <script src="{{ asset('js') }}/axios.min.js"></script>

        <!-- JAVASCRIPT -->

        @include('layouts.footer-script')
        @yield('scripts')
        <script>



              function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
        </script>
        </body>

</html>

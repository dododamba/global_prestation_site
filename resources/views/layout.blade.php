
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | Global Prestation </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/font/flaticon.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/plugin.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css') }}/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
            .upper-head .contact-info p  {
                color: #034191;
            }

            .footer-upper   {
                background: #034191;
            }


            .copyright   {
                background: #034191;
            }



            .footer-upper  .footer-links ul li {
                color: #ffffff;
            }

            #navbar ul li a {
                color: #034191;
            }

            .navigation {
                border-bottom: 0.25px solid #034191;
            }

            .upper-head .contact-info p:hover  {
                color: #bd0a46;
            }

            #navbar ul li a:hover {
                color: #bd0a46;
            }

            .upper-head {
                background:  #034191;

            }

            .upper-head .contact-info p {
                color:  #ffffff;

            }

            .upper-head .contact-info p i{
                color:  #ffffff;

            }



            .about-logo h2 {
                color:  #fffff;

            }



/*PEN STYLES*/



 .blog-card {
	 display: flex;
	 flex-direction: column;
	 margin: 1rem auto;
	 box-shadow: 0 3px 7px -1px rgba(0, 0, 0, .1);
	 margin-bottom: 1.6%;
	 background: #fff;
	 line-height: 1.4;
	 font-family: sans-serif;
	 border-radius: 5px;
	 overflow: hidden;
	 z-index: 0;
}
 .blog-card a {
	 color: inherit;
}
 .blog-card a:hover {
	 color: #5ad67d;
}
 .blog-card:hover .photo {
	 transform: scale(1.3) rotate(3deg);
}
 .blog-card .meta {
	 position: relative;
	 z-index: 0;
	 height: 200px;
}
 .blog-card .photo {
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 background-size: cover;
	 background-position: center;
	 transition: transform 0.2s;
}
 .blog-card .details, .blog-card .details ul {
	 margin: auto;
	 padding: 0;
	 list-style: none;
}
 .blog-card .details {
	 position: absolute;
	 top: 0;
	 bottom: 0;
	 left: -100%;
	 margin: auto;
	 transition: left 0.2s;
	 background: rgba(0, 0, 0, .6);
	 color: #fff;
	 padding: 10px;
	 width: 100%;
	 font-size: 0.9rem;
}
 .blog-card .details a {
	 text-decoration: dotted underline;
}
 .blog-card .details ul li {
	 display: inline-block;
}
 .blog-card .details .author:before {
	 font-family: FontAwesome;
	 margin-right: 10px;
	 content: "\f007";
}
 .blog-card .details .date:before {
	 font-family: FontAwesome;
	 margin-right: 10px;
	 content: "\f133";
}
 .blog-card .details .tags ul:before {
	 font-family: FontAwesome;
	 content: "\f02b";
	 margin-right: 10px;
}
 .blog-card .details .tags li {
	 margin-right: 2px;
}
 .blog-card .details .tags li:first-child {
	 margin-left: -4px;
}
 .blog-card .description {
	 padding: 1rem;
	 background: #fff;
	 position: relative;
	 z-index: 1;
}
 .blog-card .description h1, .blog-card .description h2 {
	 font-family: Poppins, sans-serif;
}
 .blog-card .description h1 {
	 line-height: 1;
	 margin: 0;
	 font-size: 1.7rem;
}
 .blog-card .description h2 {
	 font-size: 1rem;
	 font-weight: 300;
	 text-transform: uppercase;
	 color: #a2a2a2;
	 margin-top: 5px;
}
 .blog-card .description .read-more {
	 text-align: right;
}
 .blog-card .description .read-more a {
	 color: #5ad67d;
	 display: inline-block;
	 position: relative;
}
 .blog-card .description .read-more a:after {
	 content: "\f061";
	 font-family: FontAwesome;
	 margin-left: -10px;
	 opacity: 0;
	 vertical-align: middle;
	 transition: margin 0.3s, opacity 0.3s;
}
 .blog-card .description .read-more a:hover:after {
	 margin-left: 5px;
	 opacity: 1;
}
 .blog-card p {
	 position: relative;
	 margin: 1rem 0 0;
}
 .blog-card p:first-of-type {
	 margin-top: 1.25rem;
}
 .blog-card p:first-of-type:before {
	 content: "";
	 position: absolute;
	 height: 5px;
	 background: #5ad67d;
	 width: 35px;
	 top: -0.75rem;
	 border-radius: 3px;
}
 .blog-card:hover .details {
	 left: 0%;
}
 @media (min-width: 640px) {
	 .blog-card {
		 flex-direction: row;
		 max-width: 700px;
	}
	 .blog-card .meta {
		 flex-basis: 40%;
		 height: auto;
	}
	 .blog-card .description {
		 flex-basis: 60%;
	}
	 .blog-card .description:before {
		 transform: skewX(-3deg);
		 content: "";
		 background: #fff;
		 width: 30px;
		 position: absolute;
		 left: -10px;
		 top: 0;
		 bottom: 0;
		 z-index: -1;
	}
	 .blog-card.alt {
		 flex-direction: row-reverse;
	}
	 .blog-card.alt .description:before {
		 left: inherit;
		 right: -10px;
		 transform: skew(3deg);
	}
	 .blog-card.alt .details {
		 padding-left: 25px;
	}
}


section.trusted-partners {
            background: #d1d3d4;
            text-align: center;
            padding: 0;
            overflow: hidden;
            position: relative;
        }



    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

    @yield('css')
</head>
<body>

    <header>
        <div class="upper-head clearfix">
            <div class="container">
                <div class="contact-info">
                    <p><i class="flaticon-phone-call"></i> Phone: +23566206330</p>
                    <p><i class="flaticon-mail"></i> Mail:  contact@globalprestation.com</p>
                </div>
                <div class="contact-info pull-right">
                    <p><i class="fa fa-facebook"></i></p>
                    <p><a href="https://www.instagram.com/global_prestation/" target=""><i class="fa fa-linkedin"></i></a></p>
                    <p><i class="fa fa-instagram"></i></p>


                </div>
            </div>
        </div>
    </header>


    <div class="navigation">
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="{{ url('/') }}">
                                <img alt="Image" src="{{ asset('logo.png') }}" style="width: 219px; height: 55px;">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper pull-right">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li>
                                    <a href="{{ url('/') }}">Accueil </i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/services') }}">Nos Services & Produits </i></a>
                                </li>

                                <li>
                                    <a href="{{ url('/about') }}">L'Agence </i></a>
                                </li>

                                <li>
                                    <a href="{{ url('/contacts') }}">Contact</a>
                                </li>

                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('content')




    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">

                        <h2>Nouvelles</h2>

                      </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog1.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">What happened during my first trip alone</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog2.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">remembering the road i went through</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog3.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">planning fot the perfect familytrip outdoor</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Ends -->

    <!-- Trusted Partners -->
    <section class="trusted-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <div class="partners-title">
                        <h3> Ils nous font  <span>Confiance</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul class="partners-logo partners-slider">
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner6.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets') }}/images/partner6.png" alt="Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners Ends -->

    <!-- Footer -->
    <footer>
        <div class="footer-upper">
            <div class="container">

                <div class="footer-links">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer-about footer-margin">
                                <div class="about-logo">
                                    <h2 class="text-uppercase text-white">Global Prestation</p>
                                </div>
                                <p>Agence de communication</p>
                                <div class="about-location">
                                    <ul>
                                        <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Qtier Moural, Avenue Kaltouma Nadjina, en face de la douane, derrière la station Mama</li>
                                        <li><i class="flaticon-phone-call"></i> +23566206330</li>
                                        <li><i class="flaticon-mail"></i> contact@globalprestation.com</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="footer-links-list">
                                <div class="footer-social-links">
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/Global-Prestation-103142178174179/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="https://www.instagram.com/global_prestation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="copyright-content">
                            <p> {!! date('yy') !!} <i class="fa fa-copyright" aria-hidden="true"></i> Global Prestation </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugin.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/main-1.js"></script>
    <script src="{{ asset('assets') }}/js/preloader.js"></script>
</body>
</html>

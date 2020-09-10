@extends('layout')
@section('title','Accueil')
@section('content')
<section id="home_banner_video" class="banner-style-1" style="border-bottom: 3%;">
    <div class="video-banner">
        <img src="{{ asset('assets/images/plaque.png') }}" alt="image">
    </div>
    <div class="video-banner-content">
        <div class="js_frm_subscribe">
            <div class="kenburns_061_slide slider-content">
                <h1>"Croissons dans la grace"</h1>
            </div>
        </div>
    </div>
</section>


<section class="amazing-tours">
    <div class="container">
        <div class="section-title text-center">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
        </div>
        <div class="row">

            @foreach ($services as $item)
            <div class="col-md-3 col-xs-6">
                <div class="at-item box-item">
                    <div class="at-image">
                        <img src="storage/services/{{ $item->image }}" alt="Image" style="width: 200px; height: 200px;">
                        <div class="at-overlay"></div>
                    </div>

                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>

<section class="trip-ad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">

                <div class="trip-ad-content">
                    <div class="ad-title">
                        <h2>Explore The <span>Thailand Trip</span></h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>

                </div>
            </div>
            <div class="col-md-6 col-xs-12">

            </div>
        </div>
    </div>
</section>


<section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="mu-title">
                <h2>A Propos de Global Prestation</h2>
              </div>
          <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-12">
                <!-- start course content container -->

                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single" style="align : center;">

                        <div class="mu-latest-course-single-content">
                          <blockquote>
                            <p>{{ $apropos->texte }}</p>
                          </blockquote>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

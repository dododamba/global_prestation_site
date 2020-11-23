@extends('layout')
@section('title','Accueil')
@section('css')
    <style>
    </style>
@endsection
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
            <p>
                Nous sommes une agence <br>
                de commuication, nous offrons différent <br>
                gamme de service, allant de la communication <br>
               au sein d'une entreprise à la prestation des services <br>
                dans le domaine du marketing digital et web<br> <br> <br>
            </p>
        </div>
        <div class="row">

            <div class="row slider-shop">
                @foreach ($services as $item)
                <div class="col-md-3 col-xs-12">
                  <div class="rt-product-wrapper">
                      <div class="product-thumbnail-wrapper">
                              <div class="product-image">
                                  <img src="{{url('storage')}}/services/{{ $item->image }}" class="" alt="product-list" width="50" height="200">
                              </div>
                          <div class="product-label"><span class="onsale">Disponible</span></div>
                      </div>
                      <div class="rt-product-meta-wrapper">
                          <h3 class="product_title">
                              <a href="store-detail.html">{{ $item->nom }}</a>
                          </h3>
                          <div class="rt-cartprice-wrapper">
                              <span class="price mar-bottom-20">

                                 @if($item->prix) 
                                    <ins>
                                      <span class="rrt-price-amount">
                                           {{$item->prix->prix}} <span>F CFA</span> / {{$item->prix->nombre}}
                                      </span>
                                  </ins>
                                 @else
                                  <ins>
                                      <span class="rrt-price-amount">
                                          
                                      </span>
                                  </ins>
                                 @endif
                              </span>
                              <div class="button">
                                  <a href="{{ url('/services', $item->slug) }}" class="btn-blue btn-red">Détail</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                @endforeach
                  
          </div>

        </div>


<div class="section-title text-center">
          <a href="{{url('services')}}" class="btn btn-primary text-center">
                      Voir tous les services
                   </a>   
    </div>
</section>




<section class="trip-ad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">

                <div class="trip-ad-content">
                    <div class="ad-title">
                        <h2><span>Notre vision</span></h2>
                    </div>
                   <ol>
                       <li>Encourager les jeunes entreprises à communiquer à bas prix.</li>
                       <li>Faciliter la communication</li>
                       <li>Promouvoir le développement des petites entreprises</li>
                   </ol>

                </div>
            </div>
            <div class="col-md-4 col-xs-12">

            <div class="trip-ad-content">
                    <div class="ad-title">
                        <h2><span style="color:  #fc0606">Notre Paticularité</span></h2>
                    </div>

                    <p style="color:  #f8f0f0">Comme l'indique si bien par son nom, Global Prestation se trouve dans la diversité de ses domaines d'action : </p>
                   <ol>
                       <li style="color:  #ffffff">- Publicité</li>
                       <li style="color:  #ffffff">- Evènementiel</li>
                       <li style="color:  #ffffff">- Mode</li>
                       <li style="color:  #ffffff">- Mannequinat</li>
                       <li style="color:  #ffffff">- Spectacle</li>
                       <li style="color:  #ffffff">- Service d'accueil</li>
                       <li style="color:  #ffffff">- décoration</li>
                       <li style="color:  #ffffff">- Location des matériels de cérémonie</li>
                   </ol>

                </div>
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

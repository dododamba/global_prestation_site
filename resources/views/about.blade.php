@extends('layout')
@section('title','A Propos')
@section('css')

<style>
     .avatar-preview > img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }


         .avatar-preview {
            width: 200px;
            height: 200px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #eff2f7;
            box-shadow: 0px 2px 4px 0px #034191;
           border-top: 2px;
        }

        .btn-red{
            background: #034191;
            border: #034191;
        }
</style>
@endsection
@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>A Propos de nous</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">L'Agence</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>


  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="mu-title">
                <h2>A Propos de Global Prestation</h2>
              </div>

              <p>
                  Nous sommes une agence <br>
                  de commuication, nous offrons différent <br>
                  gamme de service, allant de la communication <br>
                 au sein d'une entreprise à la prestation des services <br>
                  dans le domaine du marketing digital et web<br> <br> <br>
              </p>
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



  <section id="our_store" class="our_store related_store">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="form-title form-title-1">
                    <h3>Nos Services & Produits</h3>
                </div>
            </div>
        </div>

        <div class="row slider-shop">

            @foreach ($services as $item)
            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="avatar-preview mb-3">
                            <img  src="storage/services/{{ $item->image }}" alt="" >
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">{{ $item->nom }}</a>
                        </h3>
                        <div class="rt-cartprice-wrapper">
                            <span class="price mar-bottom-20">

                                <ins>
                                    <span class="rrt-price-amount">
                                        <span>$</span>320.00
                                    </span>
                                </ins>
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
</section>
@endsection

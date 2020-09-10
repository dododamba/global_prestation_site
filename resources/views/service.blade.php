@extends('layout')
@section('title','Services')

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
            <h2>Services & Produit</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services & Produits</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

  <section id="mu-course-content">
    <div class="container">

        <div class="row">
        <div class="col-md-12" >
          <div class="mu-course-content-area">
            <div class="mu-title">
                <h2>Services</h2>
              </div>

              <p>
                  Avez-vous besoin de l'un nos  service ? <br>
                  Ou vous avez une une question à nous poser, <br>
                  Laissez-nous un message , brn'oubliez pas de precisez votre address email, nous vous recontacterons bienteot<br> <br> <br>
              </p>


              <section id="our_store" class="our_store">
                <div class="container">

                    <div class="row">
                        @foreach( $services as $item )
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="rt-product-wrapper">
                                <div class="product-thumbnail-wrapper">
                                    <div class="avatar-preview mb-3">
                                        <img  src="storage/services/{{ $item->image }}" alt="" >
                                    </div>
                                </div>
                                <div class="rt-product-meta-wrapper">
                                    <h3 class="product_title">
                                        <a href="shop-detail.html">{{ $item->nom }}</a>
                                    </h3>
                                    <div class="rt-cartprice-wrapper">
                                        <span class="price mar-bottom-20">
                                            <ins>
                                                <span class="rrt-price-amount">
                                                    <span >A parti de : </span>
                                                </span>
                                            </ins>
                                            <ins>
                                                <span class="rrt-price-amount">
                                                    <span>320.00</span> F CFA
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







            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

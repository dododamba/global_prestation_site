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

@section('breadcrumb')

  <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Service</h2>
            <ol class="breadcrumb">
              <li><a href="{{ route('main') }}">Accueil</a></li>
              <li class="active">Services</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('content')


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
            <div class="row">
              <div class="col-md-12">
                <!-- start course content container -->



                <div class="mu-related-item">
                  <h3></h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                      @foreach( $services as $item )

                         <div class="card">
                            <div class="col-md-4">
                                <article class="mu-blog-single-item ">
                                  <figure class="mu-blog-single-img ">
                                      <div class="avatar-preview mb-3">
                                          <img  src="storage/services/{{ $item->image }}" alt="" >
                                      </div>
                                      <figcaption class="mu-blog-caption">
                                      <h3 class="text-uppercase"><a href="#">{{ $item->nom }}</a></h3>
                                    </figcaption>
                                  </figure>

                                  <div class="mu-blog-description ml-4">
                                    <p>{!! sous_chaine( $item->texte,0,180) !!}</p>
                                    <div class="trip-ad-btn">
                                      <a href="tour-detail.html" class="btn-blue btn-red">Plus de détail</a>
                                   </div>

                                  </div>
                                </article>
                              </div>

                         </div>
                      @endforeach
                    </div>
                  </div>
                </div>

                <!-- end course content container -->
              </div>


            </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@extends('layout')
@section('title','Contactez-Nous')
@section('css')
  <style>
 .btn-contact {
          background: #122461;
          color: #ffffff;
      }
  </style>
@stop
@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Contactez-nous</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contactez-Nous</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>





          						@if(session()->has('success'))
          							@include('alert.alert_success')
          						@endif
          						@if(session()->has('error'))
          							<div class="alert alert-danger alert-dismissable">
          								@include('alert.alert_error')
          							</div>
          						@endif

  <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Contact</h2>
          </div>

          <p>
              Avez-vous besoin de l'un nos  service ? <br>
              Ou vous avez une une question à nous poser, <br>
              Laissez-nous un message , brn'oubliez pas de precisez votre address email, nous vous recontacterons bienteot<br> <br> <br>
          </p>





          <!-- end title -->
          <!-- start messagecontact content -->




           <div class="mu-contact-content">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform" action="{{route('message.contact.create')}}" method="POST">
                    @csrf
                    <p class="comment-form-author">
                      <label for="author">Nom et Prénom<span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="nom">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Sujet</label>
                      <input type="text" name="sujet">
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                    </p>
                    <p class="form-submit">
                      <input type="submit" value="Envoyer" class="mu-post-btn btn btn-contact" name="submit">
                    </p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://maps.app.goo.gl/6YPmnCcUoFzFmgZi1" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end messagecontact content -->
         </div>
       </div>
     </div>
   </div>
 </section>



@endsection

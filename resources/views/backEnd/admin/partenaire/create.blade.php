@extends('backLayout.app')
@section('title')
Création Partenaire
@stop

@section('content')

    <h1>Création Partenaire</h1>
    <hr/>
    <div class="col-md-9">

      <div class="card">
          <div class="card-body">
                    <div class="row">
                         <div class="col-md-12">

                              <div class="row">
                                <div class="col-md-9">

                                    <form action="{{ route('partenaire.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                                                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    <input type="text" name="nom" class="form-control">
                                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="file-upload">
                                                    <button class="file-upload-btn" type="button"
                                                            onclick="$('.file-upload-input').trigger( 'click' )">Ajouter une image
                                                    </button>
                                                    <div class="image-upload-wrap">
                                                        <input class="file-upload-input" type='file' onchange="readURL(this);"
                                                               accept="image/*" name="media"/>
                                                        <div class="drag-text">
                                                            <h3>Glissez et Deposez ou Cliquez ici pour selection une image</h3>
                                                        </div>
                                                    </div>
                                                    <div class="file-upload-content">
                                                        <img class="file-upload-image" src="#" alt="your image"/>
                                                        <div class="image-title-wrap">
                                                            <div class="row">
                                                                <button type="button" onclick="removeUpload()" class="remove-image">Retirer
                                                                    <span
                                                                            class="image-title">Image chargée</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                            </div>


                              </div>
                         </div>
                   </div>
              </div>
          </div>
      </div>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

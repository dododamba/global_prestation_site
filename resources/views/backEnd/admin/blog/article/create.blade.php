@extends('backLayout.app')
@section('title')
Article
@stop

@section('breadcumb')
    Article
@stop
@section('content')

    <h1>Création Article</h1>
    <hr/>
    <div class="col-md-9">

      <div class="card">
          <div class="card-body">
                    <div class="row">
                         <div class="col-md-12">

                              <div class="row">
                                <div class="col-md-9">

                                    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
                                                {!! Form::label('titre', 'Titre: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('contenu') ? 'has-error' : ''}}">
                                                {!! Form::label('contenu', 'Contenu: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('contenu', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                             {{--
                                                <div class="form-group {{ $errors->has('date_creation') ? 'has-error' : ''}}">
                                                {!! Form::label('date_creation', 'Date Creation: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    {!! Form::date('date_creation', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('date_creation', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                                 --}}
                                            <div class="form-group {{ $errors->has('categorie') ? 'has-error' : ''}}">
                                                {!! Form::label('categorie', 'Categorie: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    <select name="categorie" class="form-control">
                                                        <option disabled>Selectinez une categorie</option>
                                                         @foreach ($categories as $item)
                                                             <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                         @endforeach
                                                    </select>
                                                    {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('brouillon') ? 'has-error' : ''}}">
                                                {!! Form::label('brouillon', 'Brouillon: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                                <div class="checkbox">
                                                <label>{!! Form::radio('brouillon', '1') !!} Oui</label>
                                            </div>
                                            <div class="checkbox">
                                                <label>{!! Form::radio('brouillon', '0', true) !!} Non</label>
                                            </div>
                                                    {!! $errors->first('brouillon', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>

                                            {{--
                                                <div class="form-group {{ $errors->has('auteur') ? 'has-error' : ''}}">
                                                {!! Form::label('auteur', 'Auteur: ', ['class' => 'col-sm-3 control-label']) !!}
                                                <div class="col-sm-6">
                                                    {!! Form::number('auteur', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('auteur', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                                --}}


                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                            </div>

                            <div class="col-md-3">
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

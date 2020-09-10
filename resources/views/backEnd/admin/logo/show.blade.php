@extends('backLayout.app')
@section('title')
    Gallery -detail image
@stop
@section('breadcumb')
    image détail
@stop
@section('css')
    <style>
    
        

    </style>

@stop

@section('content')


 
<div class="gallery_product filter hdpe">
    <img src="/{{ $logo->nom }}" alt="{{  $logo->alt }}" class="img-responsive">
    <a href="{{ route('logo.show',$logo->id) }}" class="btn btn-danger mb-1">
            Supprimer
    </a>
</div>




@endsection

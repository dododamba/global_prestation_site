@extends('backLayout.app')
@section('title')
Contact
@stop

@section('content')


    @if(session()->has('success'))
        @include('alert.alert_success')
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            @include('alert.alert_error')
        </div>
    @endif


    <h1>Messages </h1>


    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Notifications</h4>

                    <ul class="list-group" data-simplebar style="max-height: 390px;">
                        @foreach($messagecontact as $item)

                        <li class="list-group-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/companies/img-1.png" alt="" height="18">
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h5 class="font-size-14">{{ $item->sujet }}</h5>
                                    <p class="text-muted">{{ $item->message }}</p>

                                    <div class="float-right">
                                        <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> {{ $item->nom }}, &nbsp; {{ $item->email }} </p>

                                    </div>
                                    <p class="text-muted mb-0">{{ $item->created_at }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>


    </div>



@endsection

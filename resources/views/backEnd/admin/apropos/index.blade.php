@extends('backLayout.app')
@section('title')
Apropo
@stop
@section('breadcumb')
    A propo
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


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                        A Propos
                    </h4>
                    <!--<button type="button" class="btn btn-secondary waves-effect waves-light mb-2 mr-2"></i> 29 march, 2020</button>-->

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);"> A Propos</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-transparent">
                           <div class="row mb-1 d-flex align-items-center">
                            <div class="col-xl-4 col-sm-6">
                                <div class="mt-2">
                                    <h4 id="numbvisi">  A Propos</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="tblapropos">
                            <thead>
                                <tr>
                                    <th>ID</th><th>Titre</th><th>Text</th><th>Image</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($apropos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ url('apropos', $item->id) }}">{{ $item->titre }}</a></td><td>{{ $item->text }}</td><td>{{ $item->image }}</td>
                                    <td>
                                        <a href="{{ url('apropos/' . $item->id . '/edit') }}" class="btn btn-primary "><i class="fa fa-edit"> </i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div> <!-- end col -->
        </div>  <!-- end row -->



        <!--  Modal content for the above example -->


</div>






@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblapropos').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection

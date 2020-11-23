@extends('backLayout.app')
@section('title')
Prix Service
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
                        Service {{$service->nom}}
                    </h4>
                    <!--<button type="button" class="btn btn-secondary waves-effect waves-light mb-2 mr-2"></i> 29 march, 2020</button>-->

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="{{url('service')}}">Service</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{$service->nom}}</a></li>

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
                                    <h4 id="numbvisi">  Service : {{$service->nom}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                    <a  href="javascript: void(0);" id="createService" class="btn btn-primary pull-right"> + Prix </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="tblservice">
                            <thead>
                                <tr>
                                    <th>ID</th><th>Promotion</th><th>Normal</th> <th>Fin de la Promotion</th> <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prix as $item)
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div> <!-- end col -->
        </div>  <!-- end row -->



        <!--  Modal content for the above example -->


</div>




 <div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="createServiceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Nouveau</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <form action="{{ route('prix.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                 
                           <input type="hidden" name="service" value="{{$service->id}}">

                            <div class="col-md-12">
                               <div class="form-group">
                                   <label for="my-textarea">Prix</label>
                                   <input type="text" class="form-control" id="prix" name="prix">
                               </div>
                            </div>


                            <div class="col-md-12">
                               <div class="form-group">
                                   <label for="my-textarea">Prix Promotionel</label>
                                   <input type="text" class="form-control" id="promotion" name="promotion">
                               </div>
                            </div>

                             <div class="col-md-12">
                               <div class="form-group">
                                   <label for="my-textarea">Nombre</label>
                                   <input type="number" class="form-control" id="nombre" name="nombre">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="form-group">
                                   <label for="my-textarea">Fin de la promotion</label>
                                   <input type="date" class="form-control" id="date" name="date">
                               </div>
                            </div>




                          </div>

                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light do-anonymize">Enregistrer</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection

@section('scripts')

<script type="text/javascript">
$('#createService').on("click",function(){
     $('#createServiceModal').modal('show');
});


    $(document).ready(function(){
        $('#tblservice').DataTable({
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

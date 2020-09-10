@extends('backLayout.app')
@section('title')
Categorie
@stop

@section('breadcumb')
    Categorie
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



    <h1>Categorie <a href="#" class="btn btn-primary pull-right" href="javascript: void(0);" id="createService">+</a></h1>
    <hr>
     <div class="card">
         <div class="card-body">
            <div class="table table-responsive">


                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th><th>Nom</th><th>Description</th><th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categorie as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ url('categorie', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ url('categorie/' . $item->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form method="DELETE" action="{{ url('categorie', $item->id) }}">
                                   {{ csrf_field() }}
                                   <input type="hidden" name="{{ $item->id }}" />
                                  <button class="btn btn-primary"> <i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

         </div>
     </div>



     <div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="createServiceModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Enregistrement d'un service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="my-textarea">Nom de la Catégorie</label>
                                       <input type="text" class="form-control" id="nom" name="nom">
                                   </div>
                                </div>


                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                       <div class="form-group">
                                           <label for="my-textarea">Description</label>
                                           <textarea id="textarea" class="form-control" name="description" rows="3"></textarea>
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
        $('#tblcategorie').DataTable({
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

@extends('backLayout.app')
@section('title')
Service
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
                        Service
                    </h4>
                    <!--<button type="button" class="btn btn-secondary waves-effect waves-light mb-2 mr-2"></i> 29 march, 2020</button>-->

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Service</a></li>
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
                                    <h4 id="numbvisi">  Service</h4>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                    <a  href="javascript: void(0);" id="createService" class="btn btn-primary pull-right"> + Service </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="tblservice">
                            <thead>
                                <tr>
                                    <th>ID</th><th>Nom</th><th>Image</th><th>desciption</th> <th>Prix</th> <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($service as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ url('service', $item->id) }}">{{ $item->nom }}</a></td><td>
                                        <div class="avatar-preview">
                                            <img src="storage/services/{{ $item->image }}" alt="" srcset="">
                                        </div>
                                    </td><td>{{ $item->texte }}</td>
                                    <td>

                                       @if($item->prix) 
                                        <a  href="{{route('service.prix', $item->id)}}" class="btn btn-default pull-right"> 
                                                {{ $item->prix->prix }} F CFA /   {{ $item->prix->nombre }} 
                                         </a>

                                          
                                       @else 

                                        <a  href="{{route('service.prix', $item->id)}}" class="btn btn-primary pull-right"> voir les prix </a>
                                       @endif
                                     
                                    </td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ url('service', $item->id) }}" class="btn btn-xs btn-info">Detail</a> &nbsp; &nbsp;
                                            <a href="{{ route('service.edit', $item->id) }}" class="btn btn-xs btn-warning">Modifier</a> &nbsp; &nbsp;

                                             <a href="{{ route('service.edit', $item->id) }}" class="btn btn-xs btn-danger">Supprimer</a>
                                        </div>
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

                    <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-md-12">
                               <div class="form-group">
                                   <label for="my-textarea">Libellé du service</label>
                                   <input type="text" class="form-control" id="nom" name="nom">
                               </div>
                            </div>


                          </div>

                          <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="my-textarea">Description</label>
                                       <textarea id="textarea" class="form-control" name="texte" rows="3"></textarea>
                                   </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-12">
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

@extends('backLayout.app')
@section('title')
Article
@stop

@section('breadcumb')
    Article
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
                        Articles
                    </h4>
                    <!--<button type="button" class="btn btn-secondary waves-effect waves-light mb-2 mr-2"></i> 29 march, 2020</button>-->

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Articles</a></li>
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
                                    <h4 id="numbvisi">  Articles</h4>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                    <a href="{{ url('articles/create') }}" class="btn btn-primary pull-right"> Nouveau Article </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 70px;">Titre</th>
                                <th scope="col">Contenu</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>


                            <tbody>

                                @foreach($article as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ url('articles', $item->id) }}">{{ $item->titre }}</a></td><td>{{ $item->contenu }}</td><td>{{ $item->date_creation }}</td>
                                    <td>
                                        <a href="{{ url('articles/' . $item->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <form method="DELETE" action="{{ url('article, $item->id') }}">
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
            </div> <!-- end col -->
        </div>  <!-- end row -->



        <!--  Modal content for the above example -->


</div>
<!-- container-fluid -->
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblarticles').DataTable({
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

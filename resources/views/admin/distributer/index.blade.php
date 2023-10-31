@extends('admin.master')


@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Distributer/<span class="h5 mb-2 text-gray-600">All Distributer</span></h1>
        <p class="mb-4">List of the all the Distributer currently being made or in use</a>.</p>
        <div class="col-lg-12">
            @include('backend.layouts.notification')
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Distributer Database | Total Distributer: {{\App\Models\Distributer::count()}}</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>location</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($distributter as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{!! html_entity_decode($item->location) !!}</td>
                                    <td>
                                        <form class="float-left ml-1" action="{{route('admindistributter.destroy',$item->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="" data-toggle="tooltip"  class="dltBtn btn btn-sm btn-outline-danger" data-id={{$item->id}} title="delete" data-placement="bottom"><i class="fa fa-trash"></i></a>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <!-- /.container-fluid -->

</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Want to delete the Category form the database file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("thanks you for not deleting the file");
                    }
                });

        })
    </script>
@endsection

@extends('admin.master')


@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <!-- Begin Page Content -->

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Contact/<span class="h5 mb-2 text-gray-600">All Contact List</span></h1>
        <p class="mb-4">List of the all the Contact currently being made or in use</a>.</p>
        <div class="col-lg-12">
            @include('backend.layouts.notification')
        </div>
        <div class="col-lg-12">
            
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact Database</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>message</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($contact as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->message}}</td>
                                    <td>
                                        <form class="float-left ml-1" action="{{route('contact.destroy',$item->id)}}" method="post">
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
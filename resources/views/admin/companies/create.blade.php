@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">Companies/<span class="h5 mb-2 text-gray-600">All Companies</span></h1>


        <div class="container">

                <div class="align-items-center">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <h2 class="tm-block-title d-inline-block">Add Companies</h2>
                            </div>
                        </div>
                        <div class="row tm-edit-product-row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div>
                                    <div class="col-md-12">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                               <form action="{{route('admincompany.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="">About Company Name<span class="text-danger">*</span>
                                        </label>
                                        <input id="name" name="name" placeholder="Title" value="{{ old('name') }}"
                                        type="text" class="form-control validate">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Description</label>
                                        <textarea id="summernote" class="form-control validate" rows="8" name="description"
                                            placeholder="Write some text..." required=""
                                            spellcheck="false">{{ old('description') }}
                                        </textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('file');
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        $('#is_parent').change(function (e){
            e.preventDefault();
            var is_checked=$('#is_parent').prop('checked');
            // alert(is_checked);
            if(is_checked){
                $('#parent_cat_div').addClass('d-none');
                $('#parent_cat_div').val('');
            }
            else{
                $('#parent_cat_div').removeClass('d-none');
            }
        })
    </script>
@endsection

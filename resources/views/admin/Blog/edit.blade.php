@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">Category/<span class="h5 mb-2 text-gray-600">Edit Category</span></h1>


        <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Edit category</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-Blog-row">
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
                                <form action="{{route('adminBlog.update',$Blog->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-3">
                                        <label for="">Blog Name<span class="text-danger">*</span>
                                        </label>
                                        <input id="name" name="name" placeholder="Title" value="{{ $Blog->name }}"
                                        type="text" class="form-control validate">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Blog Description</label>
                                        <textarea id="summernote" class="form-control validate" rows="8" name="description"
                                            placeholder="Write some text..." required=""
                                            spellcheck="false">{{ $Blog->description }}
                                        </textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div>
                                            <label for="">Photo :<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                         <span class="input-group-btn">
                                             <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                class="btn btn-primary">
                                                 <i class="fa fa-picture-o"></i> Choose
                                             </a>
                                         </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $Blog->photo }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="">Blog Category <span class="text-danger">*</span></label>
                                            <select name="cat_id" class="custom-select tm-select-accounts" id="category">
                                                <option selected="">---Category---</option>
                                                @foreach (\App\Models\Blogcategory::get() as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary text-uppercase">Update</button>
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
            let is_checked=$('#is_parent').prop('checked');
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

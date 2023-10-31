@extends('admin.master')


@section('content')
<div class="container-fluid">
    <h1 class="h3 mla mb-2 text-gray-800">Dashboard/<span class="h5 mb-2 text-gray-600">About pages</span></h1>


    <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">About Page</h2>
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
                           <form action="{{ route('aboutus.update') }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Message from Md</label>
                                <textarea  name ="messagemd" class="form-control validate" rows="8" name="description"
                                    placeholder="Write some text..."
                                    spellcheck="false">{{ $about->messagemd }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Who We Are</label>
                                <textarea name="whoweare" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $about->whoweare }} </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <div>
                                    <label for="">Photo of Md :<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                 <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder"
                                        class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                 </span>
                                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $about->photo }}">
                                    </div>
                                    <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Our History</label>
                                <textarea name="history" class="form-control validate" rows="8" name="choosedescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $about->history }}</textarea>
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
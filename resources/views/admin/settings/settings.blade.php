@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">Edit Setting</h1>


        <div class="container">

                <div class="align-items-center">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <h2 class="tm-block-title d-inline-block">Edit Setting</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            @include('backend.layouts.notification')
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
                               <form action="{{route('setting.update')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="">Website Title
                                    </label>
                                    <input id="name" name="title" placeholder="Title of the website" value="{{ $setting->title }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Meta Description for seo
                                    </label>
                                    <input id="name" name="meta_description" placeholder="Meta Description for seo setting" value="{{ $setting->meta_description }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Meta Keyword for seo
                                    </label>
                                    <input id="name" name="meta_keywords" placeholder="Meta Keyword for the Seo" value="{{ $setting->meta_keywords }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">logo
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                          <input id="thumbnail" class="form-control" type="text" name="logo" value="{{ $setting->logo }}">
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                    </div>
                                </div>
                                {{-- for favicon --}}
                                <div class="form-group mb-3">
                                    <label for="">favicon
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                          <input id="thumbnail1" class="form-control" type="text" name="favicon" value="{{ $setting->favicon }}">
                                        </div>
                                        <div id="holder1" style="margin-top:15px;max-height:100px;"> </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Primary Email Address
                                    </label>
                                    <input id="name" name="header_email" placeholder="Enter the primary email" value="{{ $setting->header_email }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Primary Phone Number
                                    </label>
                                    <input id="name" name="header_phone" placeholder="Enter the primary phone number" value="{{ $setting->header_phone }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Facebook Link
                                    </label>
                                    <input id="name" name="facebook" placeholder="Enter the facebook url" value="{{ $setting->facebook }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Instagram Link
                                    </label>
                                    <input id="name" name="instagram" placeholder="Enter the instagram url" value="{{ $setting->instagram }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Twitter Link
                                    </label>
                                    <input id="name" name="twitter" placeholder="Enter the Twitter url" value="{{ $setting->twitter }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Linkend Link
                                    </label>
                                    <input id="name" name="linkend" placeholder="Enter the linkend url" value="{{ $setting->linkend }}"
                                        type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Company Description</label>
                                    <textarea id="summernote" class="form-control validate" rows="8" name="companydesc"
                                        placeholder="Write some text..." required=""
                                        spellcheck="false">{{ $setting->companydesc }}
                                    </textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">About connect with us</label>
                                    <textarea id="summernote" class="form-control validate" rows="8" name="connectwithus"
                                        placeholder="Write some text..." required=""
                                        spellcheck="false">{{ $setting->connectwithus }}
                                    </textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Footer Logo
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                          <input id="thumbnail2" class="form-control" type="text" name="footer_logo" value="{{ $setting->footer_logo }}">
                                        </div>
                                        <div id="holder2" style="margin-top:15px;max-height:100px;"> </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-uppercase">update</button>
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


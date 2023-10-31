@extends('Frontend.layouts.master')

@section('title', 'AB Pellet || Our Companies')

@section('css')
<link rel="stylesheet" href="{{asset('asset/css/ocompanies.css')}}">
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .ourcompanies {
        margin: 0 auto;
        max-width: 1600px;
        width: 100%;
    }
    .main-title{
      padding: 50px 0px;
    }
    .sectionText{
      padding: 10px
    }
</style>
@endsection

@section('content')

<div class="d-flex justify-content-center" style="margin: auto;">
    <div id="main-content" class="blog-page">
      <div class="container col-md-12">
        <div class="row clearfix">
          <div class="col-lg-8 col-md-12 left-box">
            <div class="card single_post">
              <div class="body" style="text-align: justify">
                <div class="img-post">
                  <img class="d-block img-fluid" src="{{ $blog->photo }}" alt="First slide">
                </div>
                <h3>{{ $blog->name}} </h3>
                <p> By <span style="color:red;">{{ $blog->user }}</span></p>
                <p> {!! html_entity_decode($blog->description) !!}</p>
              </div>                        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection

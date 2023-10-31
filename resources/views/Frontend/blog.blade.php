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
<div>
    <div class="container ">
        <div class="row ">
          <div class="col-md-8 col-xl-12 text-center mx-auto">
            <div class="row">
              <div class="col-md-12 text-start">
                <h2>ABPellet News</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
          @foreach ($blog as $item)
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="{{$item->photo}}">
                    <div class="card-body p-4">
                      <a href="{{route('blogdetail.details',$item->slug)}}" style="text-decoration: none; color:black;">
                        <p class="text-primary card-text mb-0">{{ \App\Models\Blogcategory::find($item->cat_id)->name }}</p>
                        <h4 class="card-title">{{$item->name}} </h4>
                        <p class="card-text">{!! Str::words(html_entity_decode($item->description), 45, '...') !!}</p>
                        <div class="d-flex">
                            <div>
                                <p class="fw-bold mb-0">{{$item->user}}</p>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
  
@endsection

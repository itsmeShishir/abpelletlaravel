@extends('Frontend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('asset/css/product.css')}}">
@endsection

@section('content')


<div class="product_page">
  <div class="product_top_container" style="background: url('{{ $categories->photo }}') no-repeat center; background-size: cover; position: scroll; ">
  </div>
  <div class="product_com_container">
    <div class="product_page">
      <div class="product-container-wo-carousel">
        <div class="product-container-inner">
          <h2 class="content_title" style="font-family:'Oswald', sans-serif; margin-top:20px; font-weight: 300;">
            {{ $categories->name }}</h2>
            <div class="product_com_description">
              {!! html_entity_decode($categories->description) !!}
          </div>
          <div class="product-container-content">
            @foreach ($categories->products as $product)
            <a href="{{route('productdetails.details',$product->slug)}}" style="text-decoration:none;">
            <div class="product_item">
              
              <div class="product_item_image">
                <img src="{{$product->photo}}" alt="" class="product_item_img" height="250">
              </div>
              <div class="product_item_text">
                <p id="itemName">{{ $product->name }}</p>
              </div>
            </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>

      <div class="btn_container">
          <a class="back_to_home_link" href="{{url('/')}}" style="text-decoration:none;">Back To Home</a>
      </div>
  </div>

</div>

</div>
@endsection
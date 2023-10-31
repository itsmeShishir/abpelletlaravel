@extends('Frontend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('asset/css/product.css')}}">
@endsection

@section('content')
<div class="product_page">
    <div class="product_com_container">
        <div class="product_com_image">
            <img src="{{$product->photo}}" alt="" class="product_com_img">
        </div>
        <div class="product_com_text">
            <div class="product_com_title t-c">
                
                {{ $product->name}}
            </div>
            <div class="product_com_name t-c">
                AB Pellet
            </div>
            <div class="product_com_description">
                {!! html_entity_decode($product->description) !!}
            </div>
        </div>

        <div class="btn_container">
            <a class="back_to_home_link" href="{{url('/')}}" style="text-decoration:none;">Back To Home</a>
        </div>
    </div>

</div>
@endsection
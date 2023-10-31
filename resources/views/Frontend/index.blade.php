@extends('Frontend.layouts.master')

@section('script')

<script defer src="{{asset('asset/js/splide.js')}}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
  integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">

<script defer src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"
  integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>

@endsection

@section('content')

{{-- implement the slider --}}
<div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height:80vh; width:100%; ">
  <div class="carousel-inner h-100">
  @foreach ($slider as $index => $item)
    <div class="carousel-item {{ $index === 0 ? 'active' : '' }} active h-100">
      <img class="w-100 d-block position-absolute h-100 fit-cover" src="{{$item->photo}}" alt="{{$item->title}}" style="z-index: -1;">
      <div class="d-flex flex-column justify-content-center h-100">
        <div class="row">
          <div class="col-md-6 col-xl-4 offset-md-2">
            <div>
              <h1 class="text-uppercase fw-bold text-danger">{{$item->title}}</h1>
              <p class="text-danger my-3">{!! html_entity_decode($item->desc) !!}</p>
              <a class="btn btn-danger btn-lg me-2" role="button" href="{{$item->link}}" target="blank">Know More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
  <div>
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon rounded-circle" data-bss-hover-animate="bounce" style="background-color:  rgba(231, 222, 222, 0.504); padding:20px;"></span>
      <span class="visually-hidden" style="padding=50px">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon rounded-circle" data-bss-hover-animate="jello" style="background-color:  rgba(231, 222, 222, 0.504); padding:20px;"></span>
      <span class="visually-hidden" style="padding=50px">Next</span>
    </a>
  </div>
</div>

{{-- end of the implement the slider --}}

<!-- BANNER CONTAINER -->
{{--
<source media="(max-width: 320px)" srcset="./image/Drive/B02.jpeg" id="" bannerImg> --}}


<!-- About us -->
<div class="aboutus">
  <div class="aboutus-inner">
    <div class="aboutus-title">
      <div class="aboutus-title-primary">
        {{ $home->danatitle }}
      </div>
      <div class="aboutus-title-secondary">
        By {{ $home->author }}
      </div>
    </div>
    <div class="aboutus-text">
      {!! html_entity_decode($home->description) !!}
    </div>
  </div>
</div>

{{-- brands --}}


<div class="container mt-10 col-12 font-monospace fw-normal text-secondary shadow p-3 mb-5 bg-white rounded">
  <div class="container col-12">
      <h1 class="./Images/Wallpaper.jpg" style="margin-top: 50px;margin-right: 50px;">Our Brands</h1>
  </div>
  <section>
    <div class="container col-12">
        <div class="row justify-content-center"> <!-- Added justify-content-center class -->
          @foreach (\App\Models\Category::get() as $category)
            <div class="col-sm-4 pb-2">
                <div class="card" style="width: 18rem;">
                  <a href="{{ route('main.category', ['id' => $category->id]) }}" class="onhover__link" style="text-decoration: none;">
                   <img class="card-img-top" src=" {{ $category->photo }}" alt="Product 1" style="max-height: 150px;"></a>
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </section>
</div>



<div class="main-header-title"
  style="font-family:'Oswald',sans-serif;max-width: var(--max-width); margin: auto; padding:5px 10px; font-size: 2rem; font-weight:700; color: #3f3f3f">
  Product
</div>
{{-- @foreach ($categories as $category)
  <div class="carousel">
    <div class="splide" aria-labelledby="carousel-heading">
      <h2 class="carousel-heading content_title" style="font-family:'Oswald', sans-serif; font-weight: 300;">{{ $category->name }}</h2>
      <div class="splide__track">
        <div class="splide__list">
          @foreach ($category->products as $product)
            <div class="splide__slide">
              <div class="product-item">
                <a href="{{route('product')}}">
                <div class="product_image">
                  <img class="product_img" src="{{ asset('asset/img/Drive/B0.png') }}" alt="" srcset="">
                </div>
                <div class="product_title contentTitle textCenter">
                  {{ $product->name }}
                </div>
              </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endforeach --}}

<div class="bannerContainer">
  <picture>
    <img id="bannerImg" 
    src="<?php echo ($home->photo != NULL) ? $home->photo : asset('asset/img/banner.jpeg') ?>" alt="Banner">
  </picture>
</div>

@foreach ($categories as $category)
<div class="product-container-wo-carousel">
  <div class="product-container-inner">
    <h2 class="content_title" style="font-family:'Oswald', sans-serif; margin-top:20px; font-weight: 300;">
      {{ $category->name }}</h2>
    <div class="product-container-content">
      @foreach ($category->products as $product)
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
@endforeach
{{-- Start of the News Portal --}}
<div>
  <div class="container ">
      <div class="row ">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <div class="row">
            <div class="col-md-6 text-md-start">
              <h2>ABPellet News</h2>
            </div>
            <div class="col-md-6 text-md-end">
              <button type="button" class="btn btn-outline-danger"><a href="{{route('blogs')}}" style="text-decoration:none;">See all news</a></button>
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







{{--
<div class="productpage">
  <div class="productpage-inner">
    <div class="productTitleContainer">
      <span class="contentTitle">Subham Dana</span>
    </div>
    <div class="products">

      <div class="product">
        <div class="productImage">
          <img class="productImg" src="{{asset('asset/img/Drive/B0.png')}}" alt="" srcset="">
        </div>
        <div class="productTitle contentTitle textCenter">
          B0
        </div>
      </div>
      <div class="product">
        <div class="productImage">
          <img class="productImg" src="{{asset('asset/img/Drive/B1.png')}}" alt="" srcset="">
        </div>
        <div class="productTitle contentTitle textCenter">
          B1
        </div>
      </div>
      <div class="product">
        <div class="productImage">
          <img class="productImg" src="{{asset('asset/img/Drive/B02.jpeg')}}" alt="" srcset="">
        </div>
        <div class="productTitle contentTitle textCenter">
          B2
        </div>
      </div>
      <div class="product">
        <div class="productImage">
          <img class="productImg" src="{{asset('asset/img/Drive/B3.png')}}" alt="" srcset="">
        </div>
        <div class="productTitle contentTitle textCenter">
          B3
        </div>
      </div>
    </div>
  </div>
</div> --}}


@endsection
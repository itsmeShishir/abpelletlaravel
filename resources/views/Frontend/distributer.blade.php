@extends('Frontend.layouts.master')

@section('css')
  <link rel="stylesheet" href="{{asset('asset/css/distributer.css')}}">
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

@section('title', 'Distributers')

@section('content')
<div class="center">
<div class="container" style="">
  <div class="container-header">
    <div class="container-title">
      <h1>Our Distributors around Nepal</h1>
    </div>
  </div>
  <div class="container-body">
    <p>
      <ul>
        @foreach ($dist as $distribution)
        <li>{{ $distribution->name }} - {{ $distribution->location }}</li>
        @endforeach
      </ul>
    </p>
  </div>
</div>
</div>

@endsection

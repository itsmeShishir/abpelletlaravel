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
<div class="center">
    <div class="ourcompanies">
        <div class="ourcompaniesInner">
            <div class="main-title">
                <h1>Our Companies</h1>
            </div>
            <div class="description">
                <ol>
                    @foreach ($company as $comp)
                    <li>
                        <div class="section__container">
                            <div class="sectionTitle">
                                <h3>{{ $comp->name }}</h3>
                            </div>
                            <div class="sectionText">
                                {!! html_entity_decode($comp->description) !!}
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

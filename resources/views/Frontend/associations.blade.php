@extends('Frontend.layouts.master')
@section('content')
<div class="aboutUsContainer">
    <img class="aboutUsContainerImg" src="{{asset('asset/img/try-background.jpg')}}" alt="about us contianer" />
    <div class="aboutUsContainerText">
        <div class="aboutUsContainerTextColumn">
            Associations
        </div>
        <div class="aboutUsContainerTextColumn breadCrumps">
            <a href="" style="text-decoration: none;">
                Home/
            </a>
        </div>
    </div>
</div>

{{-- Associates --}}
<div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Our Partners</h2>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        @foreach ($associations as $item)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{$item->link}}" target="blank"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="{{$item->photo}}"></a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
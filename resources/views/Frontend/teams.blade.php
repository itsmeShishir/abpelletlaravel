@extends('Frontend.layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('asset/css/teams.css')}}">
@endsection

@section('content')
<div class="aboutUsContainer">
    <img class="aboutUsContainerImg" src="{{asset('asset/img/try-background.jpg')}}" alt="about us contianer" />
    <div class="aboutUsContainerText">
        <div class="aboutUsContainerTextColumn">
            Teams
        </div>
        <div class="aboutUsContainerTextColumn breadCrumps">
            <a href="" style="text-decoration: none;">
                Home/
            </a>
        </div>
    </div>
</div>

{{-- Teams --}}

<div class="team-grid">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Meet Our Management</h2>
        </div>
        <div class="row people d-flex justify-content-center">
            @foreach ($teams as $item)
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url({{$item->photo}})">
                        <div class="cover">
                            <h3 class="name">{{ $item->Name }}</h3>
                            <p class="title">{{$item->role}}</p>
                            <div class="social">
                                <a href="{{ $item->linkend }}"><i class="fa fa-linkend"></i></a>
                                <a href="{{ $item->Email }}"><i class="fa fa-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    


@endsection
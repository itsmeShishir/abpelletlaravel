@extends('Frontend.layouts.master')
@section('content')
<div class="aboutUsContainer">
  <img class="aboutUsContainerImg" src="{{asset('asset/img/try-background.jpg')}}" alt="about us contianer" />
  <div class="aboutUsContainerText">
    <div class="aboutUsContainerTextColumn">
      About Us
    </div>
    <div class="aboutUsContainerTextColumn breadCrumps">
      <a href="http://" style="text-decoration: none;">
        Home/
      </a>
    </div>
  </div>
</div>

<div class="aboutUsHead">
  <div class="aboutUsHeadImgContainer">
    <img class="aboutUsHeadImg"
    src= "<?php echo ($about->photo != NULL) ? $about->photo : "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80;" ?>"
      alt="">
  </div>
  <div class="aboutUsHeadMssg">
    <h1>MESSAGE FROM THE MD</h1>
    <p>{!! html_entity_decode($about->messagemd) !!}</p>
  </div>
</div>

<div class="whoWeAre">
  <p class="aboutUsMiniTitle">WHO ARE WE</p>
  <div class="whoWeAreContent">
    13 Billions Business..... <br>
    800 Employees... <br>
    35k+ Farmers...<br>
  </div>
  <div class="whoWeAreContent-2">
    {!! html_entity_decode($about->whoweare) !!}
  </div>
  <div id="learnMore">
    <a class="btn-red" href="">Learn More</a>
  </div>
</div>

<div class="ourHistory">
  <h1 class="aboutUsMiniTitle text-center">Our History</h1>
  <p id="ourHistorydesc">
    {!! html_entity_decode($about->history) !!}

  </p>
  <div id="learnMore">
    <a class="btn-red" href="">Learn More</a>
  </div>
</div>
@endsection
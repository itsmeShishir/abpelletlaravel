@section('navbar')
<div class="parent_nav_container">
  <div class="navContainer" id="topNav">
    <div class="navContainerLeft">
      <div class="navContainerLeftEmail">
        <span class="fa-email-icon">
          <i class="fa-solid fa-envelope textWhite"></i>
          <span class="textWhite">
            {{ \App\Models\Setting::value('header_email') }}
          </span>
        </span>
      </div>
      <div class="navContainerLeftPhone">
        <span class="fa-phone-icon textWhite"><i class="fa-solid fa-phone"></i>
          <span class="textWhite">
            +977 986-0869745
          </span>
        </span>
      </div>
    </div>
    <div class="navContainerRight">
      <div class="hamburger-menu">
        <span class="hamburger-line"></span>
      </div>
      <div class="socialMediaIcon">
        <a class="social-icon-link" href="{{ \App\Models\Setting::value('facebook') }}" target="blank">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
      </div>
      <div class="socialMediaIcon">
        <a class="social-icon-link" href="{{ \App\Models\Setting::value('twitter') }}" target="blank">
          <i class="fa-brands fa-twitter"></i>
        </a>
      </div>
      <div class="socialMediaIcon">
        <a class="social-icon-link" href="{{ \App\Models\Setting::value('instagram') }}" target="blank">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
      <div class="socialMediaIcon">
        <a class="social-icon-link" href="{{ \App\Models\Setting::value('linkend') }}" target="blank">
          <i class="fa-brands fa-linkedin-in"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="parent_navigation">
  <div class="navigation">
    <div class="navigationLeft">
      <a href="{{ url('/') }}">
        <img class="logo" height="50vh" width="auto"
          src= "<?php echo (\App\Models\Setting::value('logo') != NULL) ? (\App\Models\Setting::value('logo'))  : asset('asset/img/logo.jpeg'); ?>"
         alt="" srcset="">
      </a>
    </div>
    <div class="navigationRight">
      <div class="navigationLinks">
        <a href="{{route('index')}}" class="nav__link">
          <div class="navigationLink">
            Home
          </div>
        </a>
        <div class="dropdown__btn nav__link">
            <div class="navigationLink">
              About us
            </div>
          <ul class="dropdown__content">
            <li>
              <a href="{{route('aboutus')}}" class="onhover__link" style="text-decoration: none;">
                About us
              </a>
            </li>
            <li>
              <a href="{{route('teams')}}" class="onhover__link" style="text-decoration: none;">
                Teams
              </a>
            </li>
            <li>
              <a href="{{route('associations')}}" class="onhover__link" style="text-decoration: none;">
                Associations
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown__btn nav__link">
          {{-- <a href=" {{route('product')}}"> --}}
            <div class="navigationLink">
              Products
            </div>
            {{--
          </a> --}}
         
          <ul class="dropdown__content">
            @foreach (\App\Models\Category::get() as $category)
            <li>
              <a href="{{ route('main.category', ['id' => $category->id]) }}" class="onhover__link" style="text-decoration: none;">
                {{ $category->name }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>

        <a href="{{ route("companies" )}}" class="nav__link">
          <div class=" navigationLink">
            Our companies
          </div>
        </a>
        <a href="{{route("distributer")}}" class="nav__link">
          <div class="navigationLink">
            Distributers
          </div>
        </a>
        <a href="" class="nav__link">
          <div class="navigationLink">
            Gallery
          </div>
        </a>
        <a href="{{route('contact')}}" class="nav__link">
          <div class="navigationLink">
            Contact
          </div>
        </a>
      </div>
      <div class="hamburger-menu" id="hamburger-menu">
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <span class="hamburger"></span>
      </div>
    </div>
  </div>
</div>
@endsection
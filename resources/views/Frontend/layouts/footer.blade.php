@section('footer')

<footer>
  <div id="footer">
    <div id="footerCompanyDesc">
      <div class="footerDescLogo">
        <a href="">
          <img id="footerLogo" 
          src="<?php echo (\App\Models\Setting::value('logo') != NULL) ? (\App\Models\Setting::value('logo'))  : asset('asset/img/ABonly.png'); ?>" alt="" srcset="">
        </a>
      </div>
      <p id="footerDesc" class="footer_text">
        {!! html_entity_decode(\App\Models\Setting::value('companydesc')) !!}
      </p>
    </div>
    <div class="footer-right">
      <div class="footerMiddle">
        <h3 class="footer_title color_black">Connect With Us</h3>
        <p class="footer_text">
          {!! html_entity_decode(\App\Models\Setting::value('connectwithus')) !!}
        </p>
        <div class="socialMediaLinks">
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
      <div id="contactUs">
        <h3 class="footer_title color_black" >Contact Us</h3>
        <p class="footer_text">
          get in touch with us
        </p>
        <div class="btn">
          <a href="{{route('contact')}}" class="btn-white" style="text-decoration:none;">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footerCopyright">
    Copyright &copy; 2010-2022. AB Pellet. All Rights Reserved.
  </div>
</footer>

@endsection
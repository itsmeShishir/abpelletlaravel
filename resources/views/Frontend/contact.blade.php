@extends('Frontend.layouts.master')

@section('content')
<div class="contactus_container">
  <div class="contactUsContainer">
    <div class="contactUsTitle">
      <h4 class="text-gray">
        Contact Us
      </h4>
    </div>
  </div>
  <article>
    <section class="firstArticle">
      Since 2000, we have partnered with the founders of companies that now have an aggregate, public market value
      of
      several crores. Meet our main Offices.
    </section>
    <section class="horizontalLine">
      <hr class="spanHorizontalLine">
    </section>
    <section class="contactUsForm">
      <div class="col-lg-12">
        @include('backend.layouts.notification')
    </div>
      <h4 class="contactUsFormTitle">Drop us a line </h4>
      <div class="bigScreenContainer">
        <form action="{{ route('contact.form') }}" method="post">
          @csrf
          <div class="bigScreenFirstContainer">
            <p class="formSendUp contact_p">
              <textarea class="yourMessageBox textArea bg-gray" class=form-control name="message" id="" cols="21" rows="5"
                placeholder="Your Message"></textarea>
            </p>
            <div class="contactsRow">
              <div class="formSendUp">
                <input class="bg-gray contactInput" type="text" class=form-control name="fullname" id="" placeholder="Fullname">
              </div>
              <div class="formSendUp">
                <input class="bg-gray contactInput" type="number" class=form-control name="phone" id="" placeholder="Phone Number">
              </div>
              <div class="formSendUp">
                <input class="bg-gray contactInput" type="text" class=form-control name="email" id="" placeholder="Your Email">
              </div>
              <a href="" class="sendMssgLink">
                <button class="sendMssg">
                  Send Message
                </button>
              </a>
            </div>
          </div>
      </form>
        <div class="bigScreenSecondContainer">
          <div class="contactsTile">
            <div class="contactsTileBody">
              <div class="contactsTileTitle textGray">AB Pellet</div>
              <div class="contactsTileContent">
                <p class="contact_p">
                  <span class="textNormal textGray">
                    <strong>Corporate Office</strong>
                  </span>
                </p>
                <p class="contact_p">
                  <span class="textNormal">
                    Corporate Office <br>
                    KUK Building - 3rd Floor <br>
                    Sinamangal-10 <br>
                    P.O. Box 5751 <br>
                    Kathmandu, Nepal <br>
                  </span>
                </p>
                <p class="textNormal contact_p">
                  Phone: 123456789 <br>
                  <span class="textNormal">
                    Fax: 1234567890 <br>
                  </span>
                  <span class="textNormal textGray">
                    Email: <a class="primaryColor" href="mailto:abpellet@gmail.com" target="_top">abpellet@gmail.com</a>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
  </article>
</div>
@endsection
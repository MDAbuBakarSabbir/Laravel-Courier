@extends('layouts.frontend')

@section('title')
    Coverage Area
@endsection

@section('content')
    <div class="inner-page-wrapper">
    <div class="breadcump-wrapper">
      <div class="container-fluid">
        <div class="breadcump d-flex justify-content-center align-items-center gap-2 flex-column">
          <h4>We are available in 64 districts</h4>
        </div>
      </div>
    </div>
    <div class="coverage-wrapper">
      <div class="container-fluid">
        <div class="coverage-area d-flex flex-column">
          <div class="search-area d-flex flex-column ">
            <div class="section_header d-flex flex-column justify-content-center align-items-center gap-2">
              <h5>Search Your Area</h5>
              <p>Now you can easily search your area here </p>
            </div>
            <div class=" inner-page-search-box d-flex gap-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here...">
                <button class="btn btn-lg"><img src="landing-page/asset/images/search_icon.png" alt="" class="h-auto w-auto">
                  Search</button>
                <img src="landing-page/asset/images/small_search.svg" alt="" class="search_icon w-auto h-auto">
              </div>
            </div>
          </div>

          <div class="search-result d-flex flex-column gap-3">
            <!-- if you have no result -->

            <!-- <label for="" class="message d-flex align-items-center gap-2 result-no">
              <img src="../../images/alert_icon_error.svg" alt="" class="w-auto h-auto">
              We are currently not available in this area
            </label> -->
            <label for="" class="message d-flex align-items-center gap-2 result-yes">
              <img src="landing-page/images/alert_icon_success.html" alt="" class="w-auto h-auto">
              We deliver almost all over Bangladesh
            </label>
            <div class="google_map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20660.852174037904!2d90.36936446973738!3d23.73463949353471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b97f5ca2605d%3A0x986cd6f930fd845b!2sDaraz%20pick%20up%20point!5e0!3m2!1sen!2sbd!4v1672828749015!5m2!1sen!2sbd"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
@endsection

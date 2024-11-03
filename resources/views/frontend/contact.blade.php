@extends('layouts.frontend')

@section('title')
    Contact Us
@endsection

@section('content')
<div class="inner-page-wrapper">
    <div class="breadcump-wrapper">
      <div class="container-fluid">
        <div class="breadcump d-flex justify-content-center align-items-center gap-2 flex-column">
          <h4>Get in Touch with Us</h4>
        </div>
      </div>
    </div>
    <div class="contact-wrapper">
      <div class="container-fluid">
        <div class="contact-page">
          <div class="contact-information d-flex">
            <div class="row content">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center bs-orange-50" style="font-size: 30px">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h5>Address</h5>
                    <p>House 26, Road 5/A Mirpur 6,
                      Dhaka-1216</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center bs-success-50" style="font-size: 30px">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h5>Call Us</h5>
                    <p> 09678-045045</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center bs-danger-50" style="font-size: 30px">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <h5>Mail</h5>
                    <p>info@cityfast.com</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center bs-info-50" style="font-size: 30px">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h5>Seller</h5>
                    <p> 01315565037</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="contact-form">
              <form action="#">
                <div class="form-group position-relative mb-3">
                  <input type="text" class="form-control" id="name" placeholder="Full Name">
                </div>
                <div class="form-group position-relative mb-3 ">
                  <input type="number" class="form-control" id="phone_no" placeholder="Phone Number">
                </div>
                <div class="form-group position-relative mb-3 ">
                  <input type="email" class="form-control" id="mail" placeholder="Mail Address">
                </div>
                <div class="form-group position-relative mb-3 ">
                  <input type="text" class="form-control" id="sub" placeholder="Subject">
                </div>

                <div class="form-group position-relative mb-3 ">
                  <textarea name="" id="" class="form-control" cols="1" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-md w-100">Send Message</button>
              </form>
            </div>
          </div>
          <div class="search-area d-flex flex-column ">
            <div class="section_header d-flex flex-column justify-content-center align-items-center gap-2">
              <h5>Search Hub</h5>
              <p>Now you can easily search your hub</p>
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
            <!-- if did not find any result -->

            {{-- <div class="has-no-result d-flex align-items-center justify-content-center flex-column mt-5">
              <img src="/landing-page/asset/images/no_result.svg" alt="" class="w-auto h-auto">
              <h4 class="mt-4">Ups... no hub found</h4>
              <p class="mt-2">Please try another search</p>
            </div> --}}

            <div class="row branch-list mt-4 justify-content-center align-items-center">

              <div class="col-xl-3 col-sm-6">
                <div class="card active">
                  <div class="card-body">
                    <div class="hub-name d-flex align-items-center justify-content-center">
                      <label>Mirpur Hub</label>
                    </div>
                    <p class="contact-person">Manager : Arfanul Karim</p>
                    <p>House:26, Road: 5/A, Mirpur 6, Dhaka-1216</p>
                    <p>+880 1836-538422</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

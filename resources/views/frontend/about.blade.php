@extends('layouts.frontend')

@section('title')
    About Us
@endsection

@section('content')
<div class="inner-page-wrapper">
    <div class="breadcump-wrapper">
      <div class="container-fluid">
        <div class="breadcump d-flex justify-content-center align-items-center gap-2 flex-column">
          <h4>Grow with CityFast</h4>
        </div>
      </div>
    </div>
    <div class="about-wrapper">
      <div class="container-fluid">
        <div class="about-us d-flex justify-content-between">
          <div class="row">
            <div class="col-5">
              <div class="about-content">
                <h6 class="fs-6">About Us</h6>
                <h3>We Provide The <br>
                  Best Quality Courier <mark>Services</mark></h3>
                <p>CityFast courier is a leading courier service company in Bangladesh dedicated to delivering
                  reliable
                  and efficient e- commerce logistics solutions in time.</p>
                <div class="about-service-list">
                  <ul class="about-service d-flex flex-column gap-4">
                    <li>Daily pickups, no limitations</li>
                    <li>Faster Payment Service</li>
                    <li>Cash on Delivery</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-7">

              <div class="about-img">
                <img src="{{asset('frontend/assets')}}/images/about_img.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mission-wrapper">
      <div class="container-fluid">
        <div class="mission-vission d-flex">
          <div class="mission w-50 d-flex flex-column gap-2">
            <div>
              <img src="{{asset('frontend/assets')}}/images/mission.svg" alt="" class="w-auto h-auto">
            </div>
            <h5 class="mt-3">Our Mission</h5>
            <p class="desc">To put a smile on your face by providing fast, secure, and hassle-free deliveries. We're
              here to connect people and e-commerce businesses worldwide with fast, secure, and top-notch service.</p>
          </div>
          <div class="vission w-50 d-flex flex-column gap-2">
            <div>
              <img src="{{asset('frontend/assets')}}/images/vision.svg" alt="" class="w-auto h-auto">
            </div>
            <h5 class="mt-3">Our Vision</h5>
            <p class="desc">Redefine the future of e-commerce logistics in Bangladesh through innovative solutions
              powered by modern technologies.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="chairman-wrapper">
      <div class="container-fluid">
        <div class="about-ceo ">
          <div class="row">
            <div class="col-5">
              <div class="ceo-img position-relative">

              </div>
            </div>
            <div class="col-7">
              <div class="ceo-content d-flex flex-column gap-2 ">
                <h5 class="mt-3">Our Vision</h5>
                <h4>KM Reidwanul Bari Zion</h4>
                <p class="mt-2">Our journey began with a simple idea: to make deliveries easy, reliable, and
                  delightful for
                  e-commerce-based Entrepreneurs.
                  With a passion for innovation and customer satisfaction, we've built a team dedicated to using
                  modern technology to redefine the delivery experience.
                </p>
                <p class="mt-3">Thank you for trusting us on this exciting journey of delivering smiles and exceeding
                  expectations</p>
                <div class="ceo-media mt-4">
                  <div class="d-flex gap-2">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="kpi-wrapper">
      <div class="container-fluid">
        <div class="row kpi-performance">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="img ">
                  <img src="{{asset('frontend/assets')}}/images/md_marchant.png" alt="">
                </div>
                <h4 class="d-flex gap-1 align-items-center mt-1"> 70K <i class="fa-solid fa-plus"></i></h4>
                <p> Registered Merchant</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="img ">
                  <img src="{{asset('frontend/assets')}}/images/md_delivery.png" alt="">
                </div>
                <h4 class="d-flex gap-1 align-items-center mt-1"> 5K <i class="fa-solid fa-plus"></i></h4>
                <p> Delivery Man</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="img ">
                  <img src="{{asset('frontend/assets')}}/images/md_hub.png" alt="">
                </div>
                <h4 class="d-flex gap-1 align-items-center mt-1"> 1K <i class="fa-solid fa-plus"></i></h4>
                <p> Delivery Point</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="img ">
                  <img src="{{asset('frontend/assets')}}/images/md_delivery_van.png" alt="">
                </div>
                <h4 class="d-flex gap-1 align-items-center mt-1"> 5700K <i class="fa-solid fa-plus"></i></h4>
                <p>Parcels Delivered</p>
              </div>
            </div>
          </div>
          <img src="{{asset('frontend/assets')}}/images/license_ani_1.png" alt="" class="lience_ani_1 w-auto h-auto">
        </div>
      </div>
    </div>
    {{-- <div class="membership-wrapper">
      <div class="container-fluid">
        <div class="membership d-flex justify-content-between align-items-start">
          <div class="Licensed">
            <p class="d-flex align-items-center gap-2"> <img src="{{asset('frontend/assets')}}/images/license.svg" alt=""
                class="w-auto h-auto">Licensed</p>
            <h5>A licensed courier service of GPO</h5>
            <img src="{{asset('frontend/assets')}}/images/dak_v.png" alt="" class="w-auto h-auto">
          </div>
          <div class="divider">
            <img src="{{asset('frontend/assets')}}/images/line.png" alt="">
          </div>
          <div class="member">
            <p class="d-flex align-items-center gap-2"> <img src="{{asset('frontend/assets')}}/images/member.svg" alt=""
                class="w-auto h-auto">Membership</p>
            <h5>We are Member of</h5>
            <div class="d-flex gap-4 align-items-center mt-4">
              <img src="{{asset('frontend/assets')}}/images/csab.png" alt="" class="w-auto h-auto">
              <img src="{{asset('frontend/assets')}}/images/partner_img/sm_ecab.png" alt="" class="w-auto h-auto">
            </div>

          </div>
        </div>
      </div>
    </div> --}}

    <div class="testmonial-wrapper">
      <div class="container-fluid">
        <div class="testimonial">
          <div class="section_header d-flex flex-column justify-content-center align-items-center">
            <h4>Customers Feedback</h4>
          </div>

          <div class="slider-container">
            <div class="slider" style="transform: translateX(0%);">
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/luxary.png" alt="">
                </div>
                <p class="short-text">ব্যবসার শুরুতে সময়মত ডেলিভারি করতে না পারার ঝামেলায় বেশ ভুগতে হয়েছে।
                  আলহামদুলিলাহ! সিটিফাস্টের সাথে কাজ করার পর থেকে এখন আর এই ঝামেলা হচ্ছে না। </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/riya.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Sumaiya Riya</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/skm.png" alt="">
                </div>
                <p class="short-text">দেড় বছরে যাত্রায় এক কোটিরও বেশি টাকার পণ্য গ্রাহকদের নিকট নিরাপদে পৌঁছে
                  দিয়েছে সিটিফাস্ট কুরিয়ার। সিটিফাস্টের সবাইকে ধন্যবাদ।</p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/saiful.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Mufti Saiful Islam</p>
                    <span class="captions">Chairman</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/tafrin_logo.png" alt="">
                </div>
                <p class="short-text">সিটিফাস্ট কুরিয়ার থেকে সবসময়ই ভালো সার্ভিস পেয়েছি, তাই আপনাদের থেকে
                  প্রত্যাশা একটু বেশিই থাকে । সিটিফাস্টের জন্য শুভকামনা।
                  তাফরীন রিহা </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/tafrin.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Tafrin Riha</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/arkaive.png" alt="">
                </div>
                <p class="short-text">সিটিফাস্ট কুরিয়ারের টপ লেভেল কর্মকর্তা থেকে রাইডার পর্যন্ত সকলেই ভীষণ আন্তরিক
                  ও সাহায্যকারী। আমি বিশ্বাস করি, শীঘ্রই তারা দেশের সেরা কুরিয়ার সার্ভিসে পরিণত হবে। </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/sifat.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Sifat Sayok</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/ural.png" alt="">
                </div>
                <p class="short-text">রাঙ্গামাটিতে আমরা মার্চেন্ট ছিলাম ৪-৫ জন। তখন সারা মাস মিলে ২০-৩০ টা পার্সেল ও
                  হতো না। তবুও দেখা গিয়েছে একটা পার্সেল হলেও রাইডার রা পিকআপ করতে আসতো। ধন্যবাদ সিটিফাস্ট </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/ruksanaakter.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Ruksana Akter</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/luxary.png" alt="">
                </div>
                <p class="short-text">ব্যবসার শুরুতে সময়মত ডেলিভারি করতে না পারার ঝামেলায় বেশ ভুগতে হয়েছে।
                  আলহামদুলিলাহ! সিটিফাস্টের সাথে কাজ করার পর থেকে এখন আর এই ঝামেলা হচ্ছে না। </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/riya.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Sumaiya Riya</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/skm.png" alt="">
                </div>
                <p class="short-text">দেড় বছরে যাত্রায় এক কোটিরও বেশি টাকার পণ্য গ্রাহকদের নিকট নিরাপদে পৌঁছে
                  দিয়েছে সিটিফাস্ট কুরিয়ার। সিটিফাস্টের সবাইকে ধন্যবাদ।</p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/saiful.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Mufti Saiful Islam</p>
                    <span class="captions">Chairman</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/tafrin_logo.png" alt="">
                </div>
                <p class="short-text">সিটিফাস্ট কুরিয়ার থেকে সবসময়ই ভালো সার্ভিস পেয়েছি, তাই আপনাদের থেকে
                  প্রত্যাশা একটু বেশিই থাকে । সিটিফাস্টের জন্য শুভকামনা।
                  তাফরীন রিহা </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/tafrin.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Tafrin Riha</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/arkaive.png" alt="">
                </div>
                <p class="short-text">সিটিফাস্ট কুরিয়ারের টপ লেভেল কর্মকর্তা থেকে রাইডার পর্যন্ত সকলেই ভীষণ আন্তরিক
                  ও সাহায্যকারী। আমি বিশ্বাস করি, শীঘ্রই তারা দেশের সেরা কুরিয়ার সার্ভিসে পরিণত হবে। </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/sifat.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Sifat Sayok</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>
              <div class="slider-item">
                <div class="client-logo">
                  <img src="{{asset('frontend/assets')}}/images/ural.png" alt="">
                </div>
                <p class="short-text">রাঙ্গামাটিতে আমরা মার্চেন্ট ছিলাম ৪-৫ জন। তখন সারা মাস মিলে ২০-৩০ টা পার্সেল ও
                  হতো না। তবুও দেখা গিয়েছে একটা পার্সেল হলেও রাইডার রা পিকআপ করতে আসতো। ধন্যবাদ সিটিফাস্ট </p>
                <div class="d-flex gap-2">
                  <div class="client-img ">
                    <img src="{{asset('frontend/assets')}}/images/ruksanaakter.png" alt="">
                  </div>
                  <div>
                    <p class="client-name">Ruksana Akter</p>
                    <span class="captions">Founder</span>
                  </div>
                </div>
                <span class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i></span>
              </div>





            </div>
            <div class="dots-container">
              <span class="dot active"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <!-- <div class="prev-btn"></div>
          <div class="next-btn"></div> -->
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

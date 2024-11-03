@extends('layouts.frontend')

@section('title')
    Register
@endsection

@section('content')
<div class="authentic-wrapper">
    <div class="container-fluid">
        <div class="login-register-form d-flex justify-content-center align-items-center flex-column">
            <div class="favcon-icon">
                <img src="{{asset('adminDash')}}/images/logo.png" alt="" class="w-auto h-auto">
            </div>
            <h5>Merchant Registration</h5>


            <form action="" role="form" method="POST">
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input type="text" class="form-control " name="b_name" value=""
                            placeholder="Your Business Name">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="position-relative">
                        <input type="text" class="form-control " name="f_name" value=""
                            placeholder="Your Name">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                    </div>
                                        </div>
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input cols="1" rows="2" name="address" class="form-control "
                            placeholder="Address of Your Pickup Location">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                    </div>
                                        </div>
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input type="number" class="form-control " name="mobile" value=""
                            placeholder="Phone Number">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                    </div>
                                        </div>

                <div class="form-group mb-3">
                    <div class="position-relative">
                        <input type="email" class="form-control " name="email" value=""
                            placeholder="Email">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                    </div>
                                        </div>

                <div class="w-100  gap-3 pass-field mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-group position-relative ">
                            <div class="position-relative">
                                <input type="password" class="form-control " id="pass" placeholder="Password"
                                    name="password" required>
                                <div class="form-fiel-icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>

                            </div>

                        </div>
                        <div class="form-group position-relative ">
                            <input type="password" class="form-control " id="pass" placeholder="Confirm Password"
                                name="password_confirmation" required>
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div>

                </div>
                <div class="form-action-btn mt-2">
                    <button class="btn btn-md w-100" type="submit">Sign Up</button>
                </div>
            </form>

            <p class="w-100 d-flex justify-content-center align-items-center gap-2"> Already have an account?
                <a href="{{route('frontend.login')}}" class="txt-primary">
                    Login </a> Here
            </p>
        </div>
    </div>
</div>
@endsection

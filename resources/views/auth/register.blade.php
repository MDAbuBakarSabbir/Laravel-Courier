{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

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


            <form action="{{ route('register') }}" role="form" method="POST">
                @csrf
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="" placeholder="Your Business Name">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="position-relative">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name">
                        <div class="form-fiel-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input cols="1" rows="2" name="address" class="form-control @error('address') is-invalid @enderror"placeholder="Your Pickup Location/Address">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                </div>
                <div class="form-group  mb-3">
                    <div class="position-relative">
                        <input type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="" placeholder="Phone Number">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="position-relative">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=""
                            placeholder="Email">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                    </div>
                </div>
                <div class="form-group position-relative mb-3">
                    <div class="position-relative">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="pass" placeholder="Password" name="password">
                        <div class="form-fiel-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    </div>

                </div>
                <div class="form-group position-relative ">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="pass" placeholder="Confirm Password" name="password_confirmation">
                    <div class="form-fiel-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <div class="form-action-btn mt-2">
                    <button class="btn btn-md w-100" type="submit">Sign Up</button>
                </div>
            </form>

            <p class="w-100 d-flex justify-content-center align-items-center gap-2"> Already have an account?
                <a href="{{route('login')}}" class="txt-primary">
                    Login </a> Here
            </p>
        </div>
    </div>
</div>
@endsection

@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('content')
    <div class="authentic-wrapper">
        <div class="container-fluid">
            <div class="login-register-form d-flex justify-content-center align-items-center flex-column">
                <div class="favcon-icon">
                    <img src="{{asset('adminDash')}}/images/logo.png" alt="" class="w-auto h-auto">
                </div>
                <h5>Admin Login</h5>
                <form method="POST" action="{{ route('admin-login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="position-relative">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email here" name="email" value="" required autocomplete="email" autofocus>
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group  mb-3">
                        <div class="position-relative">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="pass" placeholder="Password">
                            <div class="form-fiel-icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="checkbox1" name="remember"
                                >
                            <label class="form-check-label" for="checkbox1">
                                Remember Me
                            </label>
                        </div>
                        <a href="password/reset.html">Forgot Password?</a>
                    </div>
                    <div class="form-action-btn mt-4">
                        <button class="btn btn-md w-100" type="submit">Login</button>
                    </div>
                </form>

                <p class="w-100 d-flex justify-content-center align-items-center gap-2"> Don’t have an account <a
                        href="{{route('register')}}" class="txt-primary">
                        Register </a> Here</p>
            </div>
        </div>
    </div>
@endsection


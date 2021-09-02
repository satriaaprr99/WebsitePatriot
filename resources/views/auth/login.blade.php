@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-4 mt-3 ">

        <div class="col-lg-6 py-4 pl-5 ml-4">
            <img src="assets/img/logo_trans.png" width="310" class="img-fluid" alt="">
        </div>
        <!-- Registeration Form -->
        <div class="col-lg-4">
            <h3 class="mb-4 text-center">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                <div class="row">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent px-4 border-md border-right-0">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-transparent border-left-0 border-md @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="off" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent px-4 border-md border-right-0">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-transparent border-left-0 border-md @error('password') is-invalid @enderror" required autocomplete="off">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group col-lg-5 pt-2">
                        <div class="input-group-prepend form-check ml-2">
                            
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="input-group col-lg-7 pt--4">
                        <div class="input-group-prepend">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-dark btn-block py-2">
                            <span class="font-weight-bold text-light">Login your account</span>
                        </button>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small font-weight-bold">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a onclick="alert('fitur belum tersedia!')" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fab fa-facebook mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                        <a onclick="alert('fitur belum tersedia!')" class="btn btn-danger btn-block py-2 btn-twitter">
                            <i class="fa fa-envelope mr-2"></i>
                            <span class="font-weight-bold">Continue with Google</span>
                        </a>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class= font-weight-bold">Belum Mempunyai Akun? <a href="register" class="text-primary ml-2">Register</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

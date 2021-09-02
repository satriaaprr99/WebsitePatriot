@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-4 mt-3">

        <div class="col-lg-6 py-4">
            <img src="assets/img/logo_trans.png" width="355" class="img-fluid ml-4 pl-5" alt="">
        </div>

        <!-- Registeration Form -->
        <div class="col-lg-6">
            <h3 class="mb-4 text-center">Register</h3>
            <form method="POST" action="{{ route('register') }}">
                <div class="row">
                    @csrf
                    <!-- First Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent px-4 border-md border-right-0">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input id="name" type="text"  name="name" placeholder="Nama Lengkap" class="form-control bg-transparent border-left-0 border-md @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="off" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent px-4 border-md border-right-0">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-transparent border-left-0 border-md @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="off">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
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

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent px-4 border-md border-right-0">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control bg-transparent border-left-0 border-md">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-dark btn-block py-2">
                            <span class="font-weight-bold text-white">Create your account</span>
                        </button>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small font-weight-bold text-dark">OR</span>
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
                        <p class="text-dark font-weight-bold">Sudah Punya Akun? <a href="login" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center" >
        <div class="col-12 col-md-12 col-lg-4">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}"> <img src="img/logo2.png" class="img-fluid" width="100%" alt="pawsregister"></a>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8 mh-100" style="border-left:2px solid #8DB1F3; height:675px; border-radius: 20px;" ><br>
            <h3 class="fs-4 text-center" style="margin-bottom: 90px; "><b>Create Account</b></h3>

            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="form-floating mb-2" style="font-size:13px;">
                                <input type="text" style="border-bottom:3px solid #8DB1F3" name="name" required autocomplete="name" class="form-control form-control-sm border-top-0 border-end-0 border-start-0 @error('name') is-invalid @enderror" id="floatingName" placeholder="Full Name" value="{{ old('name') }}" autofocus>
                                    <label for="floatingName">{{ __('Full Name') }}</label>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mb-2" style="font-size:13px;">
                                <input type="email" style="border-bottom:3px solid #8DB1F3" name="email" required autocomplete="email" class="form-control form-control-sm  border-top-0 border-end-0 border-start-0 @error('email') is-invalid @enderror" id="floatingEmail" placeholder="Email"  value="{{ old('email') }}">
                                    <label for="floatingEmail">{{ __('Email') }}</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                             </div>

                            <div class="form-floating mb-2" style="font-size:13px;">
                                <input type="password" style="border-bottom:3px solid #8DB1F3" name="password" required autocomplete="new-password" class="form-control form-control-sm border-top-0 border-end-0 border-start-0 @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">{{ __('Password') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mb-2" style="font-size:13px;">
                                <input type="password" style="border-bottom:3px solid #8DB1F3" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-sm border-top-0 border-end-0 border-start-0 @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Confirm Password">
                                <label for="floatingPassword">{{ __('Confirm Password') }}</label>
                            </div>

                            <div class="d-grid gap-3 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary" style="margin-top: 50px;">
                                    {{ __('Register') }}
                                </button>
                            <div style="font-size:11px;" class="text-center ">
                                Already have an account? <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row align-items-center" >
        <div class="col-12 col-md-12 col-lg-4">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}"> <img src="img/logo2.png" class="img-fluid" width="100%" alt="pawsregister"></a>
            </div>            
        </div>
        <div class="col-12 col-md-12 col-lg-8 mh-100" style="border-left:2px solid #8DB1F3; height:670px; border-radius: 20px;" ><br>
            <h3 class="fs-4 text-center" style="margin-bottom: 80px; "><b>Login</b></h3>

            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6" >

                <div class="mt-2 text-center" style="margin-bottom: 20px">
                    <a class="btn btn-sm btn-outline-primary" href="#" style="font-size:12px;">&nbsp Login as Admin</a>
                </div>

                    <form method="POST" action="{{ route('login') }}">
                    
                         @csrf
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

                            <div class="d-grid gap-3 col-20 mx-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary" style="margin-top: 50px;">
                                    {{ __('Login') }}
                                </button>
                                <div style="font-size:11px;" class="text-center ">
                                Don't have an accout? <a href="{{ route('register') }}">Register</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container-fluid main" >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
        
        <div class="carousel-inner">
            <div class="carousel-item active background a">
                
            </div>
        </div>
    </div>

    <div class="covertextlogin">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-lg-10" style="float:none; margin:0 auto; ">
                <h1 class="title">Log-in</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6" style="float:none; margin:0 auto;">
                                    <input id="email" type="email"
                                        class="form-control form-rounded{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6" style="float:none; margin:0 auto;">
                                    <input id="password" type="password"
                                        class="form-control form-rounded{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"  placeholder="Password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4" style="float:none; margin:0 auto; color:aliceblue;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="display:block; text-align:left; padding-left:0;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

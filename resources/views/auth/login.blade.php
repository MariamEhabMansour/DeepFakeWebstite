@extends('layouts.app')

@section('content')
<div class="container-fluid " style="background-image: url('img/Untitled1.png'); background-repeat: no-repeat; background-size: cover; height: 633.5px;" >
    <div class="row  ">

        <div class="col-lg-8 col-sm-2 ">
            <div class="card logCard " style="margin-top: 13%">
                <div class="card-header text-white text-center">{{ __('Please Sign In to be able to use deepfake') }}</div>

                <div class="card-body mt-4 ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-white text-md-right">{{ __('E-Mail ') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-white text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4 mr-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary loginButton " >
                                    {{ __('Login') }}
                                </button>



                            </div>
                            <div class=" mt-2">
                                @if (Route::has('register'))
                                <a class="btn btn-link text-white p-0" href="{{ route('register') }}">
                                    {{ __('not have an account?') }}  <a class="btn btn-link text-primary p-0" href="{{ route('register') }}">
                                        {{ __('sign up ') }}
                                    </a>
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
@endsection

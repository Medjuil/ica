@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="login-logo text-center mt-3">{{ __('user-lte') }}</div>
                <div class="container">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="email">{{ __('E-Mail')}}</label>
                                    <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">      
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                        <div class="form-group ">
                            <label for="password">{{ __('Password') }}</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" class="form-control btn btn-success" value=" {{ __('Login') }}">
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('register')}}"><input type="button" class="form-control btn btn-primary" value=" {{ __('Register') }}"></a>
                                </div>
                            </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link d-flex justify-content-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        
@endsection

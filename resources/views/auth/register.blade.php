@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header login-logo">{{ __('lte-Register') }}</div>
                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- input field -->
                                    <div class="form-group">
                                        <label for="name" class="text-md-right">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                            <!-- input field -->
                                   <div class="form-group">
                                    <label for="email" class="text-md-right">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Enter email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   </div>

                            <!-- input field -->                                
                                    <div class="form-group">
                                        <label for="password" class="text-md-right">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                            <!-- input field -->                                
                                    <div class="form-group">
                                        <label for="password-confirm" class="text-md-right">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type password">
                                    </div>
                            <!-- input field -->                                
                                   <div class="form-group">  
                                        <ul>
                                            <li>
                                                <button type="submit" class="btn btn-success pl-4 pr-4">
                                                <i class="fas fa-registered"></i>{{ __(' Register') }}
                                                </button>
                                            </li>
                                            <li>
                                                <a href="{{ route('login')}}"><button type="button" class="btn btn-primary">
                                                <i class="fas fa-angle-double-left"></i>{{ __(' Back') }}
                                                </button></a>  
                                            </li>
                                        </ul>                          
                                   </div>
                        </form>
                    </div>
                </div>
            </div>
        
@endsection

@extends('welcome')

@section('content')
<div class="container text-light">
                        <div class="row">
                            <div class="col-sm-12">
                            <a href="{{ url('/usertype') }}" class="btn btn-success btn-block text-sm text-gray-700 ">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary btn-block text-sm text-gray-700">Register</a>
                            @endif
                            </div>
                        </div>
                    </div>
@endsection

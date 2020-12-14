@extends('welcome')

@section('content')
<div class="container  text-light">
<p class="lead">Continue as </p>

    <div class="row">
            <a href="{{ route('admin.login') }}" class="btn btn-success btn-block text-sm text-gray-700 ">admin</a>
            <a href="{{ route('login')  }}" class="btn btn-primary btn-block text-sm text-gray-700 ">other</a>
    </div>
</div>
@endsection

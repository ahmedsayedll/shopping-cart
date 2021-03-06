@extends('layouts.master')

@section('title', 'Sign In')

@section('content')
@include('partials.message')
<div class="register mt-3 col-md-4 offset-md-4">
    <h1>{{ __('main.signin') }}</h1>
    <form action="/{{App::getLocale()}}/signin" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" value="{{ __('main.signin') }}">
    </form>
    <p>don't have account ? sign up now <a href="/register">{{ __('main.signup') }}</a></p>
</div>
@endsection
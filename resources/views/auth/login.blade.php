@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <h4 class="mb-1">Welcome to Vuexy! 👋</h4>
    <p class="mb-6">Please sign-in to your account and start the adventure</p>
    <form id="formAuthentication" class="mb-4" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-6 ">
            <label for="email" class="form-label">{{ __('Email Address') }} {{ __('or') }}
                {{ __('Username') }}</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required placeholder="Enter your email or username" autofocus />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-6 form-password-toggle ">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer toggle-password">
                    <i class="icon-base ti tabler-eye-off"></i>
                </span>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="my-8">
            <div class="d-flex justify-content-between">
                <div class="form-check mb-0 ms-2">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
                <a href="{{ route('password.request') }}">
                    <p class="mb-0">Forgot Password?</p>
                </a>
            </div>
        </div>

        <div class="mb-6">
            <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
        </div>
    </form>

    <p class="text-center">
        <span>New on our platform?</span>
        <a href="{{ route('register') }}">
            <span>Create an account</span>
        </a>
    </p>

@endsection

@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <h4 class="mb-1">Forgot Password? 🔒</h4>
    <p class="mb-6">Enter your email and we'll send you instructions to reset your password.</p>

    <form id="formAuthentication" class="mb-6" action="{{ route('password.email') }}" method="POST">
        @csrf {{-- CSRF protection --}}

        <div class="mb-6 form-control-validation">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                required id="email" name="email" placeholder="Enter your email" autofocus />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary d-grid w-100">Send Reset Link</button>
    </form>

    <div class="text-center">
        <a href="{{ route('login') }}" class="d-flex justify-content-center">
            <i class="icon-base ti tabler-chevron-left scaleX-n1-rtl me-1_5"></i>
            Back to login
        </a>
    </div>
@endsection

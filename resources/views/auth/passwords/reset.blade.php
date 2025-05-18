@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <h4 class="mb-1">Reset Password 🔒</h4>
    <p class="mb-6">
        <span class="fw-medium">Your new password must be different from previously used passwords</span>
    </p>

    <form id="formAuthentication" action="{{ route('password.update') }}" method="POST">
        @csrf {{-- CSRF protection --}}
        <input type="hidden" name="token" value="{{ $token }}">

        {{-- Email Input --}}
        <div class="mb-6 form-control-validation">
            <label class="form-label" for="email">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- New Password Input --}}
        <div class="mb-6 form-password-toggle form-control-validation">
            <label class="form-label" for="password">New Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    required>
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Confirm Password Input --}}
        <div class="mb-6 form-password-toggle form-control-validation">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary d-grid w-100 mb-6">Set new password</button>

        {{-- Back to Login Link --}}
        <div class="text-center">
            <a href="{{ route('login') }}" class="d-flex justify-content-center">
                <i class="icon-base ti tabler-chevron-left scaleX-n1-rtl me-1_5"></i>
                Back to login
            </a>
        </div>
    </form>
@endsection

@extends('layouts.auth')

@section('title', 'Verify Email')

@section('content')
    <h4 class="mb-1">Verify Your Email ✉️</h4>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <p class="text-start mb-3">
        An account activation link has been sent to your email address:
        <span class="fw-medium">{{ Auth::user()->email }}</span>.
        Please check your inbox and follow the link inside to continue.
    </p>

    <p class="mb-3">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
    <p>{{ __('If you did not receive the email, you can request another one below:') }}</p>

    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-primary w-100 my-2">{{ __('Click here to request another') }}</button>
    </form>

@endsection

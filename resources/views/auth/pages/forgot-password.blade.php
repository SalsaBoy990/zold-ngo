@extends('auth.layouts.guest')

@section('content')

    <p class="text-center"><a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
            <x-icon.backarrow></x-icon.backarrow>
            {{ 'Back to log in' }}
        </a>
    </p>
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
            <h1 class="h3">{{ __('Forgot your password?') }}</h1>
            <p class="mb-4">{{ ('Don\'t fret! Just type in your email and we will email you a password reset link that will allow you to choose a new one.') }}</p>


            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email">{{ __('Your Email') }}</label>
                    <div class="input-group">
                        <input type="email" class="form-control @error('password') is-invalid @enderror" id="email"
                               name="email" placeholder="john@company.com" required autofocus>
                    </div>
                    <x-global::error :messages="$errors->get('email')"/>
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('Reset password') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection

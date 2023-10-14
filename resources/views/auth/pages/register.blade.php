@extends('auth.layouts.signinout')

@section('content')
    <!-- Section -->
    <section class="mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('home') }}" class="d-flex align-items-center justify-content-center">
                    <x-icon.backarrow></x-icon.backarrow>
                    {{ __('Back to homepage') }}
                </a>
            </p>
            <div class="row justify-content-center form-bg-image"
                 data-background-lg="../../assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">{{ __('Create account') }}</h1>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        <!-- Form -->
                        <form method="POST" action="{{ route('register.submit') }}" class="mt-4">
                            @csrf

                            <!-- Name -->
                            <div class="form-group mb-4">
                                <label for="email">{{ __('Your Name') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder=""
                                           id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                </div>
                                <x-global::error :messages="$errors->get('name')"/>
                            </div>

                            <!-- Email Address -->
                            <div class="form-group mb-4">
                                <label for="email">{{ __('Your Email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <x-icon.email-input></x-icon.email-input>
                                    </span>
                                    <input type="email" class="form-control @error('password') is-invalid @enderror" placeholder="example@company.com"
                                           id="email" name="email" value="{{ old('email') }}" autofocus required
                                           autocomplete="username">
                                </div>
                                <x-global::error :messages="$errors->get('email')"/>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <div class="form-group mb-4">
                                    <label for="password">{{ __('Your Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <x-icon.password-input></x-icon.password-input>
                                        </span>
                                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password"
                                               name="password"
                                               required autocomplete="new-password">
                                    </div>
                                    <x-global::error :messages="$errors->get('password')"/>
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group mb-4">
                                    <label for="confirm_password">{{ __('Confirm Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <x-icon.password-input></x-icon.password-input>
                                        </span>
                                        <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="password_confirmation" required>
                                    </div>
                                </div>

                                <!-- Agree to the terms -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label fw-normal mb-0" for="remember">
                                            I agree to the <a href="#" class="fw-bold">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">{{ __('Sign up') }}</button>
                            </div>

                        </form>

                        <div class="mt-3 mb-4 text-center">
                            <span class="fw-normal">{{ _('or login with') }}</span>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                               aria-label="facebook button" title="facebook button">
                                <x-icon.facebook></x-icon.facebook>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                               aria-label="twitter button" title="twitter button">
                                <x-icon.twitter></x-icon.twitter>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-500"
                               aria-label="github button" title="github button">
                                <x-icon.github></x-icon.github>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                {{ __('Already have an account?') }}
                                <a href="{{ route('login') }}" class="fw-bold text-decoration-underline">{{ __('Login here') }}</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

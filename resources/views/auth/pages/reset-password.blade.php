@extends('auth.layouts.guest')

@section('content')

    <p class="text-center"><a href="{{ route('login') }}" class="text-gray-700"><i
                class="fas fa-angle-left me-2"></i> Back to log in</a></p>
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
            <h1 class="h3 mb-4">{{ ('Reset password') }}</h1>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email">{{ __('Your Email') }}</label>
                    <div class="input-group">
                        <input id="email" class="form-control" type="email" name="email"
                               placeholder="example@company.com" value="{{ old('email', $request->email) }}"
                               required autofocus autocomplete="username">
                    </div>
                    <x-global::error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <!-- Password -->
                <div class="form-group mb-4">
                    <label for="password">{{ __('Your New Password') }}</label>
                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4">
                                        <x-icon.password-input></x-icon.password-input>
                                    </span>
                        <input id="password" placeholder="Password" class="form-control" type="password"
                               name="password" required autocomplete="new-password">
                    </div>
                    <x-global::error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <!-- Confirm Password -->
                <div class="form-group mb-4">
                    <label for="password_confirmation">{{ __('Confirm New Password') }}</label>
                    <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5">
                                        <x-icon.password-input></x-icon.password-input>
                                    </span>
                        <input id="password_confirmation" type="password" placeholder="Confirm Password"
                               class="form-control" name="password_confirmation" required
                               autocomplete="new-password">
                    </div>
                    <x-global::error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-gray-800">{{ __('Reset Password') }}</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        {{-- Footer --}}
        @include('auth.layouts.parts.footer2')
    </div>

@endsection


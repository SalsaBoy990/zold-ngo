@extends('auth.layouts.guest')

@section('content')

    <div class="col-12 d-flex align-items-center justify-content-center">

        <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">

            <div class="mb-4 alert alert-danger">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="form-group mb-3">
                    <label for="password">{{__('Password') }}</label>
                    <input id="password" class="mt-1 form-control @error('password') is-invalid @enderror"
                           type="password" name="password" required
                           autocomplete="current-password"/>
                    <x-global::error :messages="$errors->get('password')"/>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection

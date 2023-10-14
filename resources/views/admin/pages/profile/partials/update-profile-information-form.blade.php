<section>
    <header class="w-600">
        <h2 class="text-muted h5">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 fs-7 text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4 w-600">
        @csrf
        @method('patch')

        <div class="row">
            <div class="form-group mb-3 col-12 col-md-6">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" class="form-control @error($errors->get('name')) is-invalid @enderror"
                       value="{{old('name', $user->name)}}"
                       required autofocus autocomplete="name"/>
                <x-global::error :messages="$errors->get('name')"/>
            </div>

            <div class="form-group mb-3 col-12 col-md-6">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $user->email) }}" required autocomplete="username"/>

                <x-global::error :messages="$errors->get('email')"/>

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="btn btn-primary">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 fw-600 alert alert-success">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

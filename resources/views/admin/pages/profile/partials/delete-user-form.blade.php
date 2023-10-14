<section class="space-y-6">
    <header>
        <h2 class="h5 text-muted">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 fs-7 text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <!-- Button Modal -->
    <button id="trigger-delete-account-modal" type="button" class="btn btn-block btn-danger mb-3" data-bs-toggle="modal"
            data-bs-target="#modal-default">{{ __('Delete Account') }}</button>
    <!-- Modal Content -->
    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 fs-7 text-muted">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="form-group mt-3">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control @if($errors->userDeletion->get('password')) is-invalid @endif"
                                placeholder="{{ __('Password') }}"
                            />

                            <x-global::error :messages="$errors->userDeletion->get('password')"/>
                        </div>

                        <div class="mt-3 flex justify-end">
                            <button class="btn btn-link text-gray-600" type="button" data-bs-dismiss="modal">
                                {{ __('Cancel') }}
                            </button>

                            <button class="btn btn-danger ml-3" type="submit">
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" defer>
        // trigger modal on button click
        var deleteAccountModal = new bootstrap.Modal(document.getElementById('modal-default'))
        var triggerDeleteAccountButton = document.getElementById('trigger-delete-account-modal');

        triggerDeleteAccountButton.addEventListener('click', function () {
            deleteAccountModal.show();
        })

        // Show modal in case of error again
        @if (!empty($errors->userDeletion->get('password')))
        deleteAccountModal.show();
        @endif
    </script>

</section>

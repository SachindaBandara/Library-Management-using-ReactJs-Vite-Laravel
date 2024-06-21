    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>


<h5 class="card-title">Delete Account</h5>
<p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>

<form method="POST" action="{{ route('profile.destroy') }}" class="row g-3 needs-validation">
    @csrf
    @method('put')
    <div class="col-12">
        <label for="password" class="form-label">Current Password</label>
        <input type="password" name="password" class="form-control" id="password" required  autocomplete="current-password"/>
        <div class="invalid-feedback">{{ "$errors->updatePassword->get('current_password')" }}</div>
    </div>

    <div class="col-12">
        <label for="update_password_password" class="form-label">New Password</label>
        <input type="password" name="password" class="form-control" id="update_password_current_password" required  autocomplete="new-password"/>
        <div class="invalid-feedback">{{ "$errors->updatePassword->get('password')" }}</div>
    </div>

    <div class="col-12">
        <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="update_password_password_confirmation" required  autocomplete="new-password"/>
        <div class="invalid-feedback">{{ "$errors->updatePassword->get('password_confirmation')" }}</div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Save</button>
    </div>

    <div class="col-12">
        @if (session('status') === 'password-updated')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i>
                Password Saved !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</form>



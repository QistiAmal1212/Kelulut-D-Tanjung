<section>


    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="card" style="position:relative; top:-100px;">
            <div style="margin-left: 20px; margin-top: 20px;">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Update Password') }}
                </h2>
                <span>Ensure your account is using a long, random password to stay secure.</span>
            </div>
            <br>
            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                        <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                        @error('updatePassword.current_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('New Password') }}</label>
                        <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                        @error('updatePassword.password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                        @error('updatePassword.password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex align-items-center gap-4">
                        <button type="submit" class="btn btn-primary" style="background-color: black; border-color: black;">{{ __('Save') }}</button>

                        @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-success">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>

    </form>
</section>

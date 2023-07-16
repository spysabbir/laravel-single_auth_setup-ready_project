        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <label for="name">Name</label>
                    <input id="name" class="" type="text" name="name" value="{{ old('name', $user->name) }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" class="" type="email" name="email" value="{{ old('email', $user->email) }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="">
                    <button type="submit">{{ __('Save') }}</button>

                    @if (session('status') === 'profile-updated')
                        <p>{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </section>


        
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Update Password') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <label for="current_password">Current Password</label>
                <input id="current_password" class="" type="password" name="current_password" />
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">New Password</label>
                <input id="password" class="" type="password" name="password" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" class="" type="password" name="password_confirmation" />
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center gap-4">
                <button type="submit">{{ __('Save') }}</button>

                @if (session('status') === 'password-updated')
                    <p>{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </section>

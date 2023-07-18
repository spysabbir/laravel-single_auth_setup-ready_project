    <!-- Session Status -->
    @if (session('status'))
    <div class="alert alert-info">
        <strong>{{ session('status') }}</strong>
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" class="" type="email" name="email" value="{{ old('email') }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" class="" type="password" name="password" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <button type="submit" class="btn btn-info">Log in</button>
        </div>
    </form>

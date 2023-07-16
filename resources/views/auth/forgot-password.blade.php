    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.

    <!-- Session Status -->
    @if (session('status'))
    <div class="alert alert-info">
        <strong>{{ session('status') }}</strong>
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" class="" type="email" name="email" value="{{ old('email') }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-info">Email Password Reset Link</button>
    </form>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
       <div>
            <label for="email">Email</label>
            <input id="email" class="" type="email" name="email" value="{{ old('email', $request->email) }}" />
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

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" class="" type="password" name="password_confirmation" />
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-info">Reset Password</button>
    </form>

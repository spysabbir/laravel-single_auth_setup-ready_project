
This is a secure area of the application. Please confirm your password before continuing.

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" class="" type="password" name="password" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-info">Confirm</button>
    </form>


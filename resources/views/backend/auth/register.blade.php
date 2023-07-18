    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Name</label>
            <input id="name" class="" type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

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

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" class="" type="password" name="password_confirmation" />
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="">
            <a class="" href="{{ route('login') }}">
                Already registered?
            </a>

            <button type="submit" class="btn btn-info">Register</button>
        </div>
    </form>

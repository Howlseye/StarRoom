<x-guest-layout>
    <div class="login-header">
        <h1>{{ __('Register') }}</h1>
        <p>{{ __('Create your account') }}</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="login-form">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                autocomplete="name" placeholder="Enter your name">
            @if ($errors->has('name'))
                <span class="error-message">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                autocomplete="username" placeholder="Enter your email">
            @if ($errors->has('email'))
                <span class="error-message">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                placeholder="Enter your password">
            @if ($errors->has('password'))
                <span class="error-message">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirm your password">
            @if ($errors->has('password_confirmation'))
                <span class="error-message">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button type="submit" class="login-button">
            {{ __('Register') }}
        </button>

        <div class="signup-link">
            {{ __('Already registered?') }}
            <a href="{{ route('login') }}">{{ __('Log in') }}</a>
        </div>
    </form>
</x-guest-layout>

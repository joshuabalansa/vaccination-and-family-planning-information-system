<x-guest-layout>
    <div class="container mt-5">
        <style>
            .app-logo {
                width: 200px !important;
                height: 170px !important;
            }
        </style>
        <div class="row justify-content-center">
            <img class="app-logo" src="{{ asset('assets/images/app_logo.png') }}" alt="app logo">
            <h5 class="text-center mb-4">{{ __(' Vaccination and Family Planning Information System') }}</h5>
            <div class="col-md-6">
                <div class="p-4 rounded">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Username or Email') }}</label>
                            <input id="email" type="text" class="form-control" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block">{{ __('Log in') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

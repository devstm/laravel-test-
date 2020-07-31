@extends('layouts.auth')

@section('content')
    <div class="kt-login__title">
        <h3>Sign In</h3>
    </div>
    <div class="kt-login__body">
        <div class="kt-login__form">
            <form method="POST" class="kt-form" id="kt_login_form" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" type="email" placeholder="Username" name="email" required
                           autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" class="form-control" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>



                <div class="kt-login__actions">
                    @if (Route::has('password.request'))
                        <a class="kt-link kt-login__link-forgot" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <button id="kt_login_signin_submit" type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary" style="margin-right: auto ; margin-left: auto">
                        {{ __('Login') }}
                    </button>


                </div>





        </form>
    </div>
    </div>

@endsection

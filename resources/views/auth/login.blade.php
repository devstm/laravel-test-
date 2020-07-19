@extends('layouts.form')
@section('loginForm')

    <div class="container kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">{{ __('Login IN MY HOME') }}</h3>
        </div>
        <div class="card-body">
            <form method="POST" class="kt-form" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">

                    <div class="input-group">
                        <input  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group">
                    <input  placeholder="Password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="row kt-login__extra">
                    <div class="col">
                        <label class="kt-checkbox">
                            <input type="checkbox" name="remember"> Remember me
                            <span></span>
                        </label>
                    </div>
                    <div class="col kt-align-right">
                        @if (Route::has('password.request'))
                            <a class="kt-link kt-login__link" id="kt_login_forgot" href="{{ route('home') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>




                <div class="kt-login__actions">
                    <button type="submit" id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">
                        {{ __('Login') }}
                    </button>


                </div>

            </form>
        </div>
    </div>
    <div class="kt-login__forgot">
        <div class="kt-login__head">
            <h3 class="kt-login__title"> YOU ARE LOGIN !!!</h3>
        </div>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection


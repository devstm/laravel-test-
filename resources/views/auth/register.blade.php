@extends('layouts.form')

@section('signupForm')
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">{{ __('Register') }}</h3>
            <div class="kt-login__desc">Enter your details to create your account:</div>
        </div>
        <form method="POST" class="kt-login__form kt-form" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <div class="input-group">
                    <input id="name" type="text" placeholder="Fullname" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <div class="input-group">
                    <input id="email" type="email" class="form-control"  placeholder="Email  @error('email') is-invalid @enderror "
                           name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <div class="input-group">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <div class="input-group">
                    <input id="password-confirm" type="password"  placeholder="Config Password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password">
                </div>
            </div>

            <div class="input-group">
                <div class="kt-login__actions">
                    <button type="submit" id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">
                        {{ __('Register') }}
                    </button>
                    <button id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
    </div>

@endsection


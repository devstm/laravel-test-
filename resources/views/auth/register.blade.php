@extends('layouts.auth')

@section('content')
    <div class="kt-login__title">
        <h3>Register</h3>
    </div>
    <div class="kt-login__body">
        <div class="kt-login__form">
            <form method="POST" class="kt-form" id="kt_login_form" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" placeholder="Your Name"
                           class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <input id="email" type="email" placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <input id="password" type="password" placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror" name="password"
                           required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Config Password"
                           name="password_confirmation" required autocomplete="new-password">
                </div>


                <div class="kt-login__actions">
                    <button type="submit"  class="btn btn-primary btn-elevate kt-login__btn-primary"  type="submit" id="kt_login_signin_submit" style="margin-right: auto ; margin-left: auto">
                        {{ __('Register') }}
                    </button>

                </div>

            </form>
        </div>
    </div>
@endsection

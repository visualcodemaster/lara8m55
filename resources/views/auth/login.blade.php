@extends('auth.layouts.auth-master')
@section('page_level_styles')
@stop
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image:  url( {{asset('media/images/bg/bg-2.jpg')}});">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{asset('media/logo.png')}}" height="100px" width="100px">
                    </a>
                </div>

                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Sign In To Admin</h3>
                    </div>
                    <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" id="password" name="password" required autocomplete="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox"id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                    <span></span>
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="col m--align-right m-login__form-right">
                                    <a href="{{ route('password.request') }}" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                </div>
                            @endif
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit" id="m_login_signin_submit1" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign In</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop
@section('page_level_scripts')
@stop

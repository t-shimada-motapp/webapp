@extends('layouts.auth')

@section('sub_title', __('Login'))

@section('auth_css')
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/iCheck/square/blue.css') }}">
endsection

@section('content')
<p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group has-feedback{{ $errors->has('user_id') ? ' has-error' : '' }}">
        <input id="user_id" type="text" class="form-control" placeholder="{{ __('User Id') }}" name="user_id" value="{{ old('user_id') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('user_id'))
            <span class="help-block">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" placeholder="{{ __('Password') }}" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember">&nbsp;&nbsp;{{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<!-- /.social-auth-links
<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
    Facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
    Google+</a>
</div>
-->
<br />
<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
<a href="{{ route('register') }}" class="text-center">{{ __('Register') }}</a>
@endsection

@section('auth_js')
<!-- iCheck -->
<script src="{{ asset('bower_components/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
@endsection

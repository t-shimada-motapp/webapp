@extends('layouts.auth')

@section('sub_title', __('Reset Password'))

@section('content')
<p class="login-box-msg">{!! __('Reset Password') !!}</p>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="{{ route('password.reset') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group has-feedback{{ $errors->has('user_id') ? ' has-error' : '' }}">
        <input id="user_id" type="text" class="form-control" placeholder="{{ __('User Id') }}" name="user_id" value="{{ old('user_id') }}" required>
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
    <div class="form-group has-feedback">
        <input id="password_confirmation" type="password" class="form-control" placeholder="{{ __('Retype password') }}" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ __('Reset Password') }}
            </button>
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
@endsection

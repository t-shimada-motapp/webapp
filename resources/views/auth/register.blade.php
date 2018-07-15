<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }} | {{ __('Register') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/') }}">{!! config('app.logo', '<b>Laravel</b>') !!}</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">{{ __('Register a new membership') }}</p>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
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
                    {{ __('Read the terms') }} <a href="{{ route('term') }}"><span class="glyphicon glyphicon-share"></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input id="agree" type="checkbox" name="agree">
                            &nbsp;&nbsp;{{ __('I agree to the terms') }}
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button id="submit" type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Regist') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- /.social-auth-links
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
            Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
            Google+</a>
        </div>
        -->
        <br />
        <a href="{{ route('login') }}" class="text-center">{{ __('I already have a membership') }}</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('bower_components/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('#submit').prop('disabled', true);
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
        $('input').on('ifChanged', function(event){
            if ($(this).prop('checked') == false) {
                $('#submit').prop('disabled', true);
            } else {
                $('#submit').prop('disabled', false);
            }
        });
    });
</script>
</body>
</html>

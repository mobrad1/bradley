<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="{{config("app.name")}}" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{asset("bower_components/select2/dist/css/select2.min.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/dropzone/dist/dropzone.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/fullcalendar/dist/fullcalendar.min.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css")}}" rel="stylesheet">
    <link href="{{asset("bower_components/slick-carousel/slick/slick.css")}}" rel="stylesheet">
    <link href="{{asset("css/main.css?version=4.4.0")}}" rel="stylesheet">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href=""><img alt="" src="{{asset('img/logo-big.png')}}"></a>
        </div>
        <h4 class="auth-header">
            Login Form
        </h4>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Username</label>
                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email" type="email" name="email">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                @if($errors->has('email'))
                    <div class="help-block form-text text-muted form-control-feedback">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter your password" type="password" required name="password">
                @if($errors->has('password'))
                    <div class="help-block form-text text-muted form-control-feedback">
                        {{$errors->first('password')}}
                    </div>
                @endif
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Log in</button>
                <div class="form-check-inline">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

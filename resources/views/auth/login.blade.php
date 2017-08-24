
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>জাতীয় গৃহায়ন কর্তৃপক্ষ</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);" style="font-size: 2.2em;"><b>জাতীয় গৃহায়ন কর্তৃপক্ষ</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    {{ csrf_field() }}
                    @if($errors->first('phone'))
                        <div class="msg" style="color: darkred; font-style: italic;">{{ $errors->first('phone') }}.</div>
                    @else
                        <div class="msg">Sign in to visit admin area.</div>
                    @endif
                    <div class="input-group error">
                        <span class="input-group-addon">
                            <i class="material-icons">phonelink_setup</i>
                        </span>
                        <div class="form-line error">
                            <input type="text" class="form-control" name="phone" placeholder="Phone/Mobile No." required autofocus value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Login Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" id="rememberme" class="filled-in chk-col-pink" {{ Request::has('remember') ? 'checked' : '' }}>
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/backend.js') }}"></script>
</body>

</html>
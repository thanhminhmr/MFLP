<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Request IT - Login</title>

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/select2.min.css">
    <link rel="stylesheet" href="static/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="static/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="static/css/AdminLTE.min.css">
    <link rel="stylesheet" href="static/css/AdminLTE.skin-blue.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Request</b>IT
    </div>
    <div class="login-box-body">
        <form action="{{ route('login_post') }}" method="post">
            {{ csrf_field() }}
            @isset($error)
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Incorrect Username or Password.
                </div>
            @endisset
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <span class="form-control-feedback"><i class="fa fa-user"></i></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="form-control-feedback"><i class="fa fa-lock"></i></span>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </form>
    </div>
</div>

<script src="static/js/jquery.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/select2.full.min.js"></script>
<script src="static/js/bootstrap-datetimepicker.min.js"></script>
<script src="static/js/bootstrap3-wysihtml5.all.min.js"></script>
<script src="static/js/jquery.slimscroll.min.js"></script>
<script src="static/js/adminlte.min.js"></script>
</body>

</html>
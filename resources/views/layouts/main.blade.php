<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Request IT - @yield('main.title')</title>

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
    @yield('main.style')
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        @include('layouts.navbar')
    </header>

    <aside class="main-sidebar">
        @include('layouts.sidebar')
    </aside>

    <div class="content-wrapper">
        @yield('main.content')
    </div>

    <footer class="main-footer">
        <span>H<sub>2</sub>M Team</span>
        <div class="pull-right">
            <small>
                <a href="https://github.com/theonehg/upgraded-umbrella">Sourcecode</a>
            </small>
        </div>
    </footer>
</div>

<script src="static/js/jquery.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/select2.full.min.js"></script>
<script src="static/js/bootstrap-datetimepicker.min.js"></script>
<script src="static/js/bootstrap3-wysihtml5.all.min.js"></script>
<script src="static/js/jquery.slimscroll.min.js"></script>
<script src="static/js/adminlte.min.js"></script>
@yield('main.script')
</body>

</html>
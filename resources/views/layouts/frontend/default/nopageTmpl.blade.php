<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="{{ URL::asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('/css/frontend/default/iconmoon/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/css/frontend/default/style.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- fbcode -->
    {!! Session::get('tracking_fb') !!}
    <!-- gacode -->
    {!! Session::get('tracking_ga') !!}    
</head>
<body class="">

<div id="wrapper">
    @yield('main')
</div>

@yield('script')
</body>
</html>
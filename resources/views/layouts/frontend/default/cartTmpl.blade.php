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
    <title>結帳頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('/css/frontend/default/iconmoon/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/css/frontend/default/style.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>    
    <script src="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/js/frontend/TWzipcode/jquery.twzipcode.min.js') }}"></script>


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

<script src="{{ URL::asset('/libs/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
<script src="{{ URL::asset('/libs/jquery-browser/jquery.browser.min.js') }}"></script>
<script src="{{ URL::asset('/libs/fastclick/fastclick.js') }}"></script>
<script src="{{ URL::asset('/libs/stellarjs/jquery.stellar.min.js') }}"></script>
<!-- <script src="{{ URL::asset('/libs/jquery-sparkline/jquery-sparkline.js')}}"></script> -->
<script src="{{ URL::asset('/libs/prettify/prettify.js') }}"></script>
<script src="{{ URL::asset('/js/frontend/init.js') }}"></script>

<script src="{{ URL::asset('/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script>
    var resizefunc = [];

    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

</script>
</body>
</html>
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
    <title>{{ $page->salepage_title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta->fb -->
    <meta property="og:title" content="{{ $page->salepage_title }}" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:image" content="{{ $page->cover }}" />
    <meta property="og:url" content="{{ url()->current() }}"/>

    <meta name="_token" content="{{ csrf_token() }}">
    
    <link href="{{ URL::asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/css/frontend/default/iconmoon/style.css') }}" rel="stylesheet" type="text/css"/>    
    <link href="{{ URL::asset('/css/frontend/default/style.css') }}" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>    
    <script src="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.js') }}"></script>
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
<input id="ViewContent" type="hidden" onclick="fbq('track', 'ViewContent'); $(this).remove();">
@yield('script')

<script src="{{ URL::asset('/js/frontend/jquery.lazyload.js') }}"></script>    
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

    $("img.lazy").lazyload({
        effect: "fadeIn"
    });

    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });
    var is_click = true;
    $(window).scroll(function () {
        // console.log($(document).scrollTop());
        // console.log($(window).height());
        // console.log($(document).height());
        // console.log($('.services-block').offset().top);
        if ($(document).scrollTop() >= ($(document).height()+$(window).height())/2)
        {
            if(is_click)
            {
                is_click = false;
                $('#ViewContent').click();
            }
        }
    });
</script>
</body>
</html>
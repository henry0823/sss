<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>站台管理員</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="_token" content="{{ csrf_token() }}">
    
        @yield('head_import')
        <!-- Base Css Files -->
        <link href="{{ URL::asset('/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('/css/backend/style.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('/css/backend/style-responsive.css')}}" rel="stylesheet" />
        <!-- include libraries(jQuery, bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
     
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="fixed-left">

        <!-- Modal -->
        <div class="md-modal md-just-me" id="md-just-me">

            <div class="md-content">
                <h3>^^</h3>
                <div>
                    <p>這是一個放一般頁面的地方</p>
                    <ul>
                        <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                        <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                        <li><strong>Close:</strong> click on the button below to close the modal.</li>
                    </ul>
                    <p>
                    <button class="btn btn-danger md-close">Close me!</button>
                    </p>
                </div>
            </div><!-- End div .md-content -->
        </div>
        @yield('modal')
        <!-- End md-modal -->

        <!-- Begin page -->
        <div id="wrapper" class="enlarged forced">                
            @include('layouts/backend/_doBar')
            @include('layouts/backend/_sidebar')

            <div class="content-page">

                <div class="content">                   
                    @yield('main')
                    <footer>
                        ^^ &copy; 2014
                        <div class="footer-links text-center">
                            <a href="#" class="md-trigger" data-modal="md-just-me">About</a>
                            <a href="#" class="md-trigger" data-modal="md-just-me">Find Us</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

    <div class="md-overlay"></div>
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jquery-detectmobile/detect.js')}}"></script>
    <script src="{{ URL::asset('/libs/fastclick/fastclick.js')}}"></script>    
    <script src="{{ URL::asset('/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ URL::asset('/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
    <script src="{{ URL::asset('/libs/ios7-switch/ios7.switch.js')}}"></script>
    <script src="{{ URL::asset('/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ URL::asset('/libs/bootstrap-inputmask/inputmask.js')}}"></script>
    <script src="{{ URL::asset('/libs/nifty-modal/js/modalEffects.js')}}"></script>
    <script src="{{ URL::asset('/libs/nifty-modal/js/classie.js')}}"></script>
    @yield('script')
    <script src="{{ URL::asset('/libs/prettify/prettify.js')}}"></script>    
    <script src="{{ URL::asset('/js/backend/init.js')}}"></script>
      
    </body>
</html>
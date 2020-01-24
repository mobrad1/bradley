<!doctype html>
<html lang="en">
<head>
    <title>Peexoo Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/dropzone/dist/dropzone.css" rel="stylesheet')}}">
    <link href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css?version=4.4.0')}}" rel="stylesheet">
    <link href="{{asset('icon_fonts_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            @include('admin.layout._sidebar')
            <div class="content-w">
                @include('admin.layout._nav')
                <div class="content-i">

                    <div class="content-box">
                        @component('components.alert-status')
                        @endcomponent
                         @yield('content-box')
                    </div>
                    <div class="content-panel">
                        @yield('content-panel')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/popover.js')}}"></script>
    <script src="{{asset('bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('js/demo_customizer.js?version=4.4.0')}}"></script>
    <script src="{{asset('js/main.js?version=4.4.0')}}"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXXXX-9', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
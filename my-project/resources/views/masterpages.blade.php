<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Quản Lý Trò Chơi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
        
        @yield('css')

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        @include('partials.navigation')

        <div class="wrapper">
            <div class="container-fluid">
                
                <!--<img src="{{ asset('assets/images/pyramids_illustration.jpg') }}" alt="pyramid">-->

                @yield('main-content')

            </div> <!-- end container -->
        </div>

        @include('partials.footer')

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        @yield('js')

        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>
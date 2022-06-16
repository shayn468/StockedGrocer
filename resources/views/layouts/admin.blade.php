<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet">

</head>
<body>
    
    <div class="wrapper">

    @include('layouts.inc.sidebar')

        <div class="main-panel">
        @include('layouts.inc.adminnav')

            <div class="content">
            @yield('content')

            </div>

            @include('layouts.inc.adminfooter')
        
        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/jquery.3.2.1.min.js') }}" defer></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('status'))
<script>
    swal(" {{session('status') }}");
    
</script>
        
    @endif

    @yield('scripts')


</body>
</html>

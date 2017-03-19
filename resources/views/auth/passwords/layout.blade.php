<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edynos | Password</title>
]
    <link rel="stylesheet" href="{{asset('/assets/landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/landing/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/landing/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/landing/css/style.css')}}">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>

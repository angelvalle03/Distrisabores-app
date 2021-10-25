<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/materialize.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/fontawesome-free-5.15.2-web/css/all.min.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <!-- nav -->
    {{-- se incluye el header aparte --}}
    
    @include('layouts.partials.header')

    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')

    {{-- flotante --}}
    @include('layouts.partials.flotante')
    <!-- script -->
    <script src="{{asset('lib/Jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
    <script src="{{asset('js/inicio.js')}}"></script>
    
    
</body>
</html>
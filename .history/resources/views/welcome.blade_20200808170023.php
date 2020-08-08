<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @isset(@Auth::user()->hasRole('cliente'))
        <h2>Eres un cliente</h2>
    @endisset

    <div id="app" class="content">
        <div class="flex-center position-ref full-height">
            @if(Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if(Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <example-component></example-component>
            <!--Añadimos nuestro componente vuejs-->
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
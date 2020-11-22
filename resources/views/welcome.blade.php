<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css')}}">

    <!-- vendor min  css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/vendor.min.css')}}">

    <!-- min styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/min.min.css')}}">
    <!-- Scripts -->


    <!-- Styles -->
    <body>

        <div id="app">

        </div>

        <!-- Jquery -->
        <script src="{{ asset('dist/js/jquery-3.3.1.min.js')}}"></script>

        <!-- bootstrap -->
        <script src="{{ asset('js/app.js')}}"></script>
{{--        <script src="{{ asset('dist/js/bootstrap.app.js')}}"></script>--}}

        <!-- vendor  js -->
        <script src="{{ asset('dist/js/vendor.min.js')}}"></script>

        <!-- min scripts -->
        <script src="{{ asset('dist/js/main.min.js')}}"></script>
    </body>
</html>

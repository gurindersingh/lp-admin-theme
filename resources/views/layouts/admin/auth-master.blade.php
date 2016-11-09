<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrfToken" name="_token" content="{{ csrf_token() }}">
    <title>Laravel+</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:100,400,300,500,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:100,400,300,600,700">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script>
        window.LaravelPlus = window.LaravelPlus || {};
        window.LaravelPlus.csrfToken = "{{ csrf_token() }}";
    </script>
</head>
<body class="@yield('body-class')">

<div id="admin" class="admin @yield('adminBodyClass')">

    @yield('content')

</div>

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>

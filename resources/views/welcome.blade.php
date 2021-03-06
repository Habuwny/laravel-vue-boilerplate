<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div id="app">
    <App />
</div>

</body>
</html>

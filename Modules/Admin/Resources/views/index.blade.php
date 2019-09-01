<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('/') }}">
    <link rel="manifest" href="/manifest.json" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon.png"/>
    <script src="/js/chartist.min.js"></script>
    <link rel="stylesheet" href="/css/admin/chartist.min.css"/>
    <link rel="stylesheet" href="/css/admin/font-roboto.css" />
    <link rel="stylesheet" href="/css/admin/font-icon.css" />
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css" type="text/css"/>

    <title>Pirago VN</title>
</head>
<body>
    <div class="container">
        <div id="app"></div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

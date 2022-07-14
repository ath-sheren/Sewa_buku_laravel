<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widt=device-width, initial-scale=1.0">
    <title>Sewa Buku Perpustakaan Sheren</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    @include('layout_sheren.header')
    @include('layout_sheren.navbar')
    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/data_peminjamaap.js') }}"></script>
</body>
</html>


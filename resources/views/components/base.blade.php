<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caja</title>
    <link rel="icon" type="image/x-icon" href="cash-coin.ico" type="image/x-icon">
    <link rel="stylesheet" href="recursos/bootstrap/icon/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('recursos/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('recursos/bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('recursos/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
        body{
        background-color: #E5E4E4;
    }
    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Ada dua cara yang bisa digunakan pertama title seperti dibawah menggunakan yield --}}
    {{-- <title>@yield('title') | Laravel 8</title> --}}

    {{-- Atau yang kedua menggunakan seperti yang dibawah --}}
    <title>{{$title}} | Laravel 8</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!--- Untuk menampilkan layouts!--->
    <x-navbar></x-navbar>
    {{$slot}}
    <script src="{{asset('js/app.js')}}"></script>
    {{-- @yield('content') --}}
</body>
</html>
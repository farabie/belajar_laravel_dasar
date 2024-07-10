@extends('layouts.app', ['title' => 'Home'])

{{-- Contoh Penggunaan Section dengan Menggunakan HTML --}}

@section('content')

<h3>Home Page</h3>
<p>Ini adalah Home Page</p>

@endsection

{{-- Contoh Penggunaan Section dengan langsung memasukan contentnya --}}
{{-- @section('content', 'Home Page') --}}
@extends('layouts.app', ['title' => 'Home'])

{{-- Contoh Penggunaan Section dengan Menggunakan HTML --}}

@section('content')

<h3>Home Page</h3>

{{-- Bisa Menggunakan Component  --}}
{{-- @component('components.alert')

    @slot('title')

    Header Component Alert With <strong>Strong</strong> tag

    @endslot

    @slot('footer')

    Footer Component Alert With <strike>Strike</strike> tag

    @endslot
    ini adalah children
    
@endcomponent --}}

{{-- Atau bisa menggunkan x-alert dan x-slot --}}
<x-alert>
    <x-slot name="title">
        Header Component Alert With <strong>Strong</strong> tag
    </x-slot>
    @slot('footer')
         Footer Component Alert With <strike>Strike</strike> tag
    @endslot
    ini adalah children
    
</x-alert>

<p>Ini adalah Home Page</p>

@endsection

{{-- Contoh Penggunaan Section dengan langsung memasukan contentnya --}}
{{-- @section('content', 'Home Page') --}}
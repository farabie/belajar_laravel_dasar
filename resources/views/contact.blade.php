<x-app-layout title="Contact Page">
    <h1>Contact Page</h1>
    {{--Dia menggunakan / untuk mengarahkannya ke file contact --}}
    <form action="/contact" method="post">
        @csrf

        <button type="submit">Submit</button>
    </form>
</x-app-layout>
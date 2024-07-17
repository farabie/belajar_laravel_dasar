{{-- 
11. Sisip Jika diperlukan
Untuk sebagai informasi jika kita menerapkan {{$styles}} atau slot pada induknya artinya kita harus
menerapkan semuanya ke page yang ada

Untuk mengakali kita bisa buat kondisi seperti dibawah

@if(isset($styles))

{{$styles}}

@endif

atau bisa langsung saja seperti ini

@isset($styles)

{{$styles}}
    
@endisset


atau juga bisa tambahkan $styles == null pada constructor nya

12. Request && WildCard

Request dengan linknya/memanggil nya sebagai berikut
http://127.0.0.1:8000/profile?name=farabie

Route::get('profile', function(Request $request) {
    $name = $request->get('name');
    return view('profile', ['name' => $name]);
});

Jika menggunakan request kita dapat mengambil value yang ada pada linknya tanpa harus menggunakan $_GET

<x-app-layout title="{{$name ?? 'Profile'}}">
    <h1>{{$name ?? "Profile"}}</h1>
</x-app-layout>

Kita bisa memanggil data nya seperti diatas dengan menggunakan slot atau echo $name atau jika menggunakan laravel bisa menggunakan
: sebelum bacaan title

<x-app-layout :title="$name ?? 'Profile'">
    <h1>{{$name ?? "Profile"}}</h1>
</x-app-layout>

Wild card dengan linknya/memanggil nya sebagai berikut
http://127.0.0.1:8000/profile/farabie

Route::get('profile/{username}/{postingan}', function($username, $postingan) {
    return view('profile', ['name' => $username, 'postingan' => $postingan]);
});

Kita bisa membuat lebih dari satu wildcard dengan cara menambahkan wildcard nya dengan /
kemudian deklarasikan di dalam array sesudah $name

-- }}
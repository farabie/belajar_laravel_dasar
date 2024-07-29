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

14. Passing Request Data Menggunakan Controller
A. Untuk tahap pertama kita bisa membuat controllernya dengan make:controller ProfileInformationController
B. Kemudian buat route nya di folder routes/web.php
Kita menggunakan __invoke karena kita asumsikan hanya ada satu function saja
Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
C. Kemudian pada controller kita masukan function __invoke

public function __invoke(Request $request, $identifier) {
    return view('profile', [
        'username' => $identifier,
        'role_id' => $request->role_id
    ]);
}

Untuk cara pemanggilannya jika kita menggunakan $identifier maka bisa seperti dibawah ini
http://127.0.0.1:8000/profile/farabie

atau jika kita inggin menambahka role_id sebagai parameter maka bisa seperti ini
http://127.0.0.1:8000/profile/farabie?role_id=karyawan
-- }}

21. Kita bisa menggunakan tinker untuk mengetest model kita secara manual
cukup dengan php artisan tinker sebagai contoh kita ingin mengetahui melalui model untuk id yang pertama cukup dengan
App\Models\Task::where('id', 1)->first()

atau bisa juga dengan 
App\Models\Task::find(5)

Jika ingin menampilkan data dari akhir hingga ke awal cukup dengan
App\Models\Task::latest()->get()

//Atau jika ingin menampilkan kolom dari kolom mark sama list saja
App\Models\Task::latest->get(['mark', 'list']);

//Atau kita bisa juga menampilkan mark dengan kondis 0 saya ingin menampilkan semua nya dalam bentuk list
bis menggunakan pluck

$checked = App\Models\Task::where('mark', 0)->get()->pluck('list')
//Atau bisa juga menggunakan camal case di where
$uncheked = App\Models\Task::whereMark(0)->get()->pluck('list')
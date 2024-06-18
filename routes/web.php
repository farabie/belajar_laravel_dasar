<?php

use Illuminate\Support\Facades\Route;

// Jika menggunakan php versi 7 untuk function bisa disingkat menjadi fn ()
// Route::get('/', fn() => view('home'));

//Atau bisa menggunakan route laravel terbaru yaitu

// $appName = 'Laravel 8';

// Route::view('/', 'home', ['appName' => $appName]);
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', fn() => view('home'));

Route::get('/profile', function() {
    $fullName = 'Farabie';
    return view('profile', [
        'name' => $fullName,
    ]);
});

// Route::get('/test', function () {
//     //Berarti ini artinya folder yang ada views kemudian arahkan ke home_screen
//     //Lalu Ke dashboard lalu ke folder Welcomes
//     return view('home_screen.dashboard.welcomes');
// });
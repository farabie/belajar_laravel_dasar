<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ProfileInformationController;

//Yang dimana ini artinya menggunakan HomeController dengan function index
// Route::get('/', [HomeController::class, 'index']);

//Atau bisa menggunakan cara singkat yaitu dengan cara
Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
Route::get('/', HomeController::class);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);


// Jika menggunakan php versi 7 untuk function bisa disingkat menjadi fn ()
// Route::get('/', fn() => view('home'));

//Atau bisa menggunakan route laravel terbaru yaitu

// $appName = 'Laravel 8';

// Route::view('/', 'home', ['appName' => $appName]);
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', fn() => view('home'));
// Route::view('contact', 'contact');
// Route::view('about', 'about');
// Route::view('posts/first-post', 'posts.show');
// Route::view('profile', 'profile');
//Request
// Route::get('profile', function(Request $request) {
//     $name = $request->get('name');
//     return view('profile', ['name' => $name]);
// });

// Route::get('profile/{username}', function($username) {
//     return view('profile', ['name' => $username]);
// });
// Route::get('/profile', function() {
//     $fullName = 'Farabie';
//     return view('profile', [
//         'name' => $fullName,
//     ]);
// });

// Route::get('/contact', function() {
//     return view('contact');
// });

// Route::get('/test', function () {
//     //Berarti ini artinya folder yang ada views kemudian arahkan ke home_screen
//     //Lalu Ke dashboard lalu ke folder Welcomes
//     return view('home_screen.dashboard.welcomes');
// });
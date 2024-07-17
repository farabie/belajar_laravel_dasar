<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Yang dimana artinya kelas ini hanya memiliki satu function saja yaitu invoke
    // public function __invoke() {
        
    // }
    public function __invoke() {
        return view('home');
    }
}

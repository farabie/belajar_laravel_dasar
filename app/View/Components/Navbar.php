<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            // Nama => URL
            'Home' => '/',
            'Contact' => '/contact',
            'Blog' => '/posts/first-post',
            'About' => '/about',
            'Profile' => '/profile',
        ];
        return view('layouts.navbar', compact('navbar'));
    }
}

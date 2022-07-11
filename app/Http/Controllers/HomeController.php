<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * home view
     * @return void
     */
    public function home()
    {
        return view('home');
    }
}

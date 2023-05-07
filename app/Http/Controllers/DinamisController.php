<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function home()
    {
        return view('dinamis.home');
    }
    public function profile()
    {
        return view('dinamis.profile');
    }
    public function contact()
    {
        return view('dinamis.contact');
    }
}

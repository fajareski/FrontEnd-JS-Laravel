<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function belipaket()
    {
        return view('pages.belipaket');
    }

    public function daftarsiswa()
    {
        return view('pages.daftarsiswa');
    }

    public function masuksiswa()
    {
        return view('pages.masuksiswa');
    }
}

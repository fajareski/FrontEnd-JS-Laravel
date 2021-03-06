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

    public function invoice()
    {
        return view('pages.invoice');
    }

    public function pembayaran()
    {
        return view('pages.pembayaran');
    }
    public function konfirmasibayar()
    {
        return view('pages.konfirmasibayar');
    }
    public function video()
    {
        return view('pages.video');
    }
    public function tryout()
    {
        return view('pages.tryout');
    }
}

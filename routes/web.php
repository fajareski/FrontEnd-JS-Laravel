<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/belipaket', function () {
//     return view('pages.belipaket');
// });


Route ::get('/','PagesController@home');
Route ::get('/belipaket','PagesController@belipaket');
Route ::get('/daftarsiswa','PagesController@daftarsiswa');
Route ::get('/masuksiswa','PagesController@masuksiswa');
Route ::get('/masukguru','PagesController@masukguru');
Route ::get('/daftarguru','PagesController@daftarguru');

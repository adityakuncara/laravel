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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
------------------------------------------------
*/

route:: get('/',function() {
    return 'selamat datang';
});

route:: get('/about', function(){
    echo 'Nama : Aditya Kuncara Bakti';
    echo '<br>NIM : 2041720231';
    echo '<br>Kelas : TI 2H';
});

route:: get('/articels/{id}',function($id){
    return 'Ini adalah halaman artikel dengan ID: '.$id;
});

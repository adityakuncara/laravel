<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

/*---------------------------------------------------------*/
/*Praktikum 1   
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
*/
/*
Route::get('/hello', [WelcomeController::class,'hello']);
*/

/*---------------------------------------------------------*/
/* praktikum 2
Route::get('/index', HomeController::class,); 
Route::get('/about', AboutController::class,);
Route::get('/articles/{id}', ArticleController::class,);  
*/
/* Praktikum 3

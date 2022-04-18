<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return'Hi! Selamat Datang';
    }
    public function about(){
        return 'Nama : Aditya kuncara bakti';
        return '<br>Nim : 2041720231';
    }
    public function articles($id){
        return 'ini adalah halaman artikel dengan ID: '.$id;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
    public function index(){
        return "Selamat Datang";
    }public function about(){
        return "Nama: Inayatun Zaimah Farmadiah, NIM: 243107050007";
    }public function articles($id){
        return "Halaman Artikel dengan id " . $id;
    }
}

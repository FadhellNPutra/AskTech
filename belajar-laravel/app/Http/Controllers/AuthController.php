<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar(){
        return view("page.form");
    }
    
    public function kirim(Request $request){
        $namaDepan = $request["nama_depan"];
        $namaBelakang = $request["nama_belakang"];

        return view("page.welcome", ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
    }
}

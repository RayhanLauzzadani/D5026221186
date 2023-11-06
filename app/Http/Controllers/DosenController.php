<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog()
    {
        $nama = "Ilung";
        $alamat = "Probolinggo";
        $umur = 19;
        return view('week1', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
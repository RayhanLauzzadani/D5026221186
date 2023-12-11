<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->paginate();
        return view('indexKategori',['kategori' => $kategori]);
    }

    public function pilih(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('hasilcombo', ['selectedKategoriId' => $selectedKategoriId]);
    }
}

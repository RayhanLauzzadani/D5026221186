<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TehController extends Controller
{
    public function index()
    {
        $teh = DB::table('teh')->paginate();
        return view('indexTeh',['teh' => $teh]);
    }
    public function tambah(){


        return view('tambahTeh');
    }

    public function store(Request $request){
        DB::table('teh')-> insert([
            'merkteh' => $request->merkteh,
            'stockteh' => $request->stockteh,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
        ]);
        return redirect('/teh');
    }
    
    public function edit($id){
        
        $teh = DB::table('teh')
                    ->where('kodeteh', $id) 
                    ->get();

        
        return view('editTeh', ['teh' => $teh]);
    }

    public function update(Request $request){

        DB::table('teh')->where('kodeteh', $request->id) -> update([
            'merkteh' => $request->merkteh,
            'stockteh' => $request->stockteh,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
        ]);
        
        return redirect('/teh');
    }

    public function hapus($id){
        
        DB::table('teh')
            ->where('kodeteh', $id)
            ->delete();
        
        return redirect('/teh');
    }
    
    public function cari(Request $request)
	{
		
		$cari = $request->cari;
        
		$teh = DB::table('teh')
                    ->where('merkteh','like',"%".$cari."%")
                    ->paginate();
    		
		return view('indexTeh',['teh' => $teh]);
	}

    public function view($id){
        
        $teh = DB::table('teh')
                    ->where('kodeteh', $id) 
                    ->get();

        return view('viewTeh', ['teh' => $teh]);
    }
}
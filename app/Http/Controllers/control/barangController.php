<?php

namespace App\Http\Controllers\control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\jenis;

class barangController extends Controller
{
    public function getAll(){
        $results = barang::join('jenis','jenis.id_kode', '=', 'barangs.code_jenis')
        ->get();

        return view('project.index', ['dataBarang' => $results]);
    }
    public function getView($id){
        $results = barang::join('jenis','barangs.code_jenis', '=', 'jenis.id_kode')
        ->where('barangs.id',$id)
        ->get();
        return view('project.view',["dataList" => $results]);
    } 
    public function getList(){
        $results = jenis::all();
        return view('project.list', ['jenis' => $results]);
    }
    public function getSearch($id){
        $results = barang::join('jenis','barangs.code_jenis', '=', 'jenis.id_kode')
        ->where('barangs.code_jenis',$id)
        ->get();
        return view('project.search',["dataSearch" => $results]);
    }
   
}


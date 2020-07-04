<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Illuminate\Support\Facades\DB;

class JawabanController
{
    //
    public function index($pertanyaan_id){
    $jawaban = jawabanModel::get($pertanyaan_id);
    return view('jawaban.index', compact('jawaban'));
    } 

    
     Public function store($pertanyaan_id, Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$jawaban = JawabanModel::save($data);
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    //
    public function index(){
    $jawaban = JawabanModel::get_all();
    return view('jawaban.index', compact('jawaban'));
    } 

    Public function create(){
    	return view('pertanyaan.form',compact)
    }

     Public function store($pertanyaan_id, Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$jawaban = JawabanModel::save($data);
    	return view('pertanyaan.index');
    }
}

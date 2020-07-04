<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    Public function create(){
    	return view('pertanyaan.form');
    }

    Public function store(Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$pertanyaan = PertanyaanModel::save($data);
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    Public static function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::get($id);
        return view('pertanyaan.detail', compact('pertanyaan','jawaban'));
    }

    Public static function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    Public function update($id, Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::update($id, $data);
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::get($id);
        return view('pertanyaan.detail', compact('pertanyaan','jawaban'));
    }

    Public function delete($id){
        $deleted=PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }

}

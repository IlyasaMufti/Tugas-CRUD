<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{

	Public static function get_all(){
	$pertanyaan = DB::table('pertanyaan')->get();

	return $pertanyaan;
	}

	public static function save($data){
		$new_pertanyaan = DB::table('pertanyaan')->insert($data);

		return $new_pertanyaan;
	}

	Public static function find_by_id($id){
		$pertanyaan = DB::table('pertanyaan')->get()->where('id','=',$id) ;

		return $pertanyaan;
	}

	Public static function update($id, $request){
		$pertanyaan=DB::table('pertanyaan')
		->where('id',$id)
		->update(["Judul" => $request["Judul"],
					"Isi" => $request["Isi"],
					"updated_at" => $request["updated_at"]]);

		return $pertanyaan;
	}

	Public static function destroy($id){
		$deleted=DB::table('pertanyaan')
		-> where('id',$id)
		->delete();
	}
}
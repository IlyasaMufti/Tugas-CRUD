<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model; 

class PertanyaanModel extends model{

	public function jwb(){
		return $this->hasMany('App/Models/jawabanModel')
	}
	public static function get_all(){
		$pertanyaan = DB::table('pertanyaan')->get();

		return $pertanyaan;
	}

	public static function save($data){
		$new_pertanyaan = DB::table('pertanyaan')->insert($data);

		return $new_pertanyaan;
	}
}
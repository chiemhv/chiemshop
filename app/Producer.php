<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Producer extends Model
{
    //
protected $table = 'producers';
protected $fillable = ['idProducer', 'name', 'man', 'phone', 'address', 'detail'];

public static function getAll(){
	$data = DB::table('producers')->orderBy('name')->get();
	return $data;
}
public static function insertGetId($request){
			$name = $request['name'];
			$man = $request['man'];
			$phone = $request['phone'];
			$address = $request['address'];
			$detail = $request['detail'];
		   DB::table('producers')->insertGetId(array('name'=>$name, 'man'=>$man, 'phone'=>$phone, 'address'=>$address, 'detail'=>$detail));
		   return true;
}
public static function getById($id){
		$data = DB::table('producers')->where('idProducer', '=', $id)->get();
		return $data;
	}
public static function updateById($id, $request){
			$name = $request['name'];
			$man = $request['man'];
			$phone = $request['phone'];
			$address = $request['address'];
			$detail = $request['detail'];
			DB::table('producers')->where('idProducer', '=', $id)->update(array('name'=>$name, 'man'=>$man, 'phone'=>$phone, 'address'=>$address, 'detail'=>$detail));
			return true;
}
public static function destroyById($id){
	DB::table('producers')->where('idProducer', '=', $id)->delete();
	return true;
}
}

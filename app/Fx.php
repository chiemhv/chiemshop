<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Fx extends Model
{
    //
    protected $table = 'fxes';
    protected $fillable = ['idFx', 'name', 'detail'];

public static function getAll(){
	$data = DB::table('fxes')->orderBy('name')->get();
	return $data;
}
public static function insertGetId($request){
	$name = $request['name'];
	$detail = $request['detail'];
	DB::table('fxes')->insertGetId(array('name'=>$name, 'detail'=>$detail));
	return true;
}
public static function destroyById($id){
	DB::table('fxes')->where('idFx', '=', $id)->delete();
}
public static function getById($id){
	$data = DB::table('fxes')->where('idFx', '=', $id)->get();
	return $data;
}
// update by id
public static function updateById($id, $request){
	$name = $request['name'];
	$detail = $request['detail'];
	DB::table('fxes')->where('idFx', '=', $id)->update(array('name'=>$name, 'detail'=>$detail));
	return true;
}
}

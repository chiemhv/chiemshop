<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Catalog extends Model
{
    //

protected $table = 'catalogs';
protected $fillable = ['idCatalog', 'name', 'detail'];

public static function getAll(){
	$data = DB::table('catalogs')->join('fxes', 'catalogs.idFx', '=', 'fxes.idFx')->get(array('catalogs.idCatalog as catalogs_id', 'catalogs.name as catalogs_name', 'catalogs.detail as catalogs_detail' ,'fxes.name as fxes_name', 'fxes.detail as fxes_detail'));
	return $data; 
}
public static function insertGetId($request){
	$idFx = $request['idFx'];
	$name = $request['name'];
	$detail = $request['detail'];
	DB::table('catalogs')->insertGetId(array('idFx'=>$idFx, 'name'=>$name, 'detail'=>$detail));
	return true;
}
public static function destroyById($id){
	DB::table('catalogs')->where('idCatalog', '=', $id)->delete();
	return true;
}
public static function getById($id){
	$data = DB::table('catalogs')->join('fxes', 'catalogs.idFx', '=', 'fxes.idFx')->where('idCatalog', '=', $id)->get(array('catalogs.idCatalog as catalogs_id', 'catalogs.name as catalogs_name', 'catalogs.detail as catalogs_detail' ,'fxes.name as fxes_name', 'fxes.detail as fxes_detail'));
	return $data;
}
}

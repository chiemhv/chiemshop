<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
protected $table = 'products';
protected $fillable = ['idProduct', 'idCatalog', 'idProducer', 'name', 'price', 'saleRate', 'detail'];

public static function getAll(){
	$data = DB::table('products')->join('catalogs', 'products.idCatalog', '=', 'catalogs.idCatalog')->join('producers', 'products.idProducer', '=', 'producers.idProducer')->get(array('products.idProduct as products_id', 'catalogs.name as catalogs_name', 'producers.name as producers_name', 'products.name as products_name', 'products.price as products_price', 'products.saleRate as products_saleRate', 'products.detail as products_detail'));
	return $data;
}
public static function insertGetId($request){
	$idCatalog = $request['idCatalog'];
	$idProducer = $request['idProducer'];
	$name = $request['name'];
	$price = $request['price'];
	$saleRate = $request['saleRate'];
	$detail = $request['detail'];
	$data = DB::table('products')->insertGetId(array('idCatalog'=>$idCatalog, 'idProducer'=>$idProducer, 'name'=>$name, 'price'=>$price, 'saleRate'=>$saleRate, 'detail'=>$detail));
	return true;
}
public static function destroyById($id){
	DB::table('products')->where('idProduct', '=', $id)->delete();
	return true;
}
public static function getForEdit($id){
	$getFid = DB::table('products')->join('catalogs', 'products.idCatalog', '=', 'catalogs.idCatalog')->join('producers', 'products.idProducer', '=', 'producers.idProducer')->where('idProduct', '=', $id)->get(array('products.idProduct as products_id', 'catalogs.idCatalog as catalogs_id', 'catalogs.name as catalogs_name', 'producers.idProducer as producers_id', 'producers.name as producers_name', 'products.name as products_name', 'products.price as products_price', 'products.saleRate as products_saleRate', 'products.detail as products_detail'));
		return $getFid;
}
public static function updateById($id, $request){
	$idCatalog = $request['idCatalog'];
	$idProducer = $request['idProducer'];
	$name = $request['name'];
	$price = $request['price'];
	$saleRate = $request['saleRate'];
	$detail = $request['detail'];
	DB::table('products')->where('idProduct', '=', $id)->update(array('idCatalog'=>$idCatalog, 'idProducer'=>$idProducer, 'name'=>$name, 'price'=>$price, 'saleRate'=>$saleRate, 'detail'=>$detail));
	return true;
}
public static function spSale(){
	$data = DB::table('products')->join('catalogs', 'products.idCatalog', '=', 'catalogs.idCatalog')->join('producers', 'products.idProducer', '=', 'producers.idProducer')->where('saleRate', '>', 10)->get(array('products.idProduct as products_id', 'catalogs.name as catalogs_name', 'producers.name as producers_name', 'products.name as products_name', 'products.price as products_price', 'products.saleRate as products_saleRate', 'products.detail as products_detail'));
	return $data;
}
}

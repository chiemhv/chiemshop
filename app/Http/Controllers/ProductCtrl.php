<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use App\Producer;
class ProductCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sale(){
        $catalog = Catalog::all();
        $producer = Producer::all();
        $data = Product::spSale();
        return view('admin.product.sale')->with('data', $data)->with('catalog', $catalog)->with('producer', $producer);
    }
    public function index()
    {
        //
        $catalog = Catalog::all();
        $producer = Producer::all();
        $data = Product::getAll();
        return view('admin.product.index')->with('data', $data)->with('catalog', $catalog)->with('producer', $producer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catalog = Catalog::all();
        $producer = Producer::all();
        return view('admin.product.create')->with('catalog', $catalog)->with('producer', $producer);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Product::insertGetId($request);
        return redirect()->route('admin.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $catalog = Catalog::all();
        $producer = Producer::all();
        $getForEdit = product::getForEdit($id);
        return view('admin.product.edit')->with('catalog', $catalog)->with('producer', $producer)->with('getForEdit', $getForEdit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Product::updateById($id, $request);
        return redirect()->route('admin.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroyById($id);
        return redirect()->route('admin.product');
    }
}

@extends('admin.admin')
@section('content_admin')
@foreach($getForEdit as $row)
<form action="{{asset('admin/product/update')}}/{{$row->products_id}}" method="POST" accept-charset="utf-8" class="form-group">
  <h2><center>Chỉnh sửa sản phẩm</center></h2>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="idCatalog" class="col-sm-2 control-label">1.Catalog: </label>
    <div class="col-sm-10">
      <select class="form-control" id="idCatalog" name="idCatalog">
        <option value="{{$row->catalogs_id}}">{{$row->catalogs_name}}</option>
        @foreach($catalog as $cata)
        <option value="{{$cata->idCatalog}}">{{$cata->name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="idProducer" class="col-sm-2 control-label">2.Nhà sản xuất:</label>
    <div class="col-sm-10">
    <select class="form-control" id="idProducer" name="idProducer">
        <option value="{{$row->producers_id}}">{{$row->producers_name}}</option>
        @foreach($producer as $pro)
        <option value="{{$pro->idProducer}}">{{$pro->name}}</option>
        @endforeach
      </select>      
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">3.Tên sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" value="{{$row->products_name}}" placeholder="sex toy">
      
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">4.Giá sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="price" class="form-control" id="price" value="{{$row->products_price}}" placeholder="1000">
      
    </div>
  </div>
  <div class="form-group">
    <label for="saleRate" class="col-sm-2 control-label">5.Giảm giá:</label>
    <div class="col-sm-10">
      <input type="number" name="saleRate" class="form-control" id="saleRate" value="{{$row->products_saleRate}}" placeholder="9%">
    </div>
  </div>
   <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">5.Ghi chú:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" value="{{$row->products_detail}}" placeholder="sản phẩm tốt">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="reset" class="btn btn-default">reset</button>
      <button type="submit" class="btn btn-default">submit</button>
    </div>
  </div>
</form>
@endforeach
@stop
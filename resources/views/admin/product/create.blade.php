@extends('admin.admin')
@section('content_admin')
<form action="store" method="POST" accept-charset="utf-8" class="form-group">
  <h2><center>Thêm mới Sản phẩm</center></h2>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="idCatalog" class="col-sm-2 control-label">1.Catalog: </label>
    <div class="col-sm-10">
      <select class="form-control" id="idCatalog" name="idCatalog">
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
        @foreach($producer as $pro)
        <option value="{{$pro->idProducer}}">{{$pro->name}}</option>
        @endforeach
      </select>      
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">3.Tên sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="sex toy">
      
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">4.Giá sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="price" class="form-control" id="price" placeholder="1000">
      
    </div>
  </div>
  <div class="form-group">
    <label for="saleRate" class="col-sm-2 control-label">5.Giảm giá:</label>
    <div class="col-sm-10">
      <input type="number" name="saleRate" class="form-control" id="saleRate" placeholder="9%">
    </div>
  </div>
   <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">5.Ghi chú:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" placeholder="sản phẩm tốt">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="reset" class="btn btn-default">reset</button>
      <button type="submit" class="btn btn-default">submit</button>
    </div>
  </div>
</form>
@stop
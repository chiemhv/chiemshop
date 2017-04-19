@extends('admin.admin')
@section('content_admin')
<span><h4><center><b>SẢN PHẨM</b></center></h4></span>
<form method="POST" action="{{asset('admin/man')}}" class="form-inline">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <div class="form-group">
      <label for="idCatalog">Loại SP: </label>
      <select class="form-control" name="idCatalog">
        @foreach($catalog as $cata)
        <option value="{{$cata->idCatalog}}">{{$cata->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="idProducer">Hãng SX: </label>
      <select class="form-control" name="idProducer">
      @foreach($producer as $pro)
      <option value="{{$pro->idProducer}}">{{$pro->name}}</option>
      @endforeach
      </select>
     </div>
    <div class="form-group">
      <label for="name">Tên SP: </label>
      <input type="text" class="form-control" id="name" placeholder="quần sịp" name="name">
     </div>
    <button type="submit" class="btn btn-success">Tìm kiếm</button>
    <button type="reset" class="btn btn-success">Reset</button>
</form>
<table class="table table-striped">
  <tbody>
    <tr>
      <td><a href="{{URL::to('admin/product/create')}}" title=""><b>Tạo mới SẢN PHẨM</b></a></td>
    </tr>
  </tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Destroy</th>
        <th>Edit</th>
        <th>products_id</th>
        <th>Loại sản phẩm</th>
        <th>Hãng sản xuất</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Tỉ lệ giảm giá</th>
        <th>Chi tiết sản phẩm</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $row)
       <tr>
       <td><a href="product/destroy/{{$row->products_id}}">Destroy</a></td>
       <td><a href="product/edit/{{$row->products_id}}">Edit</a></td>
       <td>{{$row->products_id}}</td>
       <td>{{$row->catalogs_name}}</td>
       <td>{{$row->producers_name}}</td>
       <td>{{$row->products_name}}</td>
       <td>{{$row->products_price}}đ</td>
       <td>{{$row->products_saleRate}}%</td>
       <td>{{$row->products_detail}}</td>
       </tr>
      @endforeach
    </tbody>
  </table>
@stop
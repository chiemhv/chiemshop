@extends('admin.admin')
@section('content_admin')
<form action="store" method="POST" accept-charset="utf-8" class="form-group">
  <h2><center>Thêm mới catalog</center></h2>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name" class="col-sm-2 control-label">1.Catalog Name : </label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="Tên Catalog">
    </div>
  </div>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name" class="col-sm-2 control-label">1.Fx Name : </label>
    <div class="col-sm-10">
        <select class="form-control" id="idFx" name="idFx">
        @foreach($data as $row)
        <option value="{{$row->idFx}}">{{$row->name}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">2.Detail:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" placeholder="Detail ">
      
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
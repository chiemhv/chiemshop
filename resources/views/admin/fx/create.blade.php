@extends('admin.admin')
@section('content_admin')
<form action="store" method="POST" accept-charset="utf-8" class="form-group">
  <h2><center>Thêm mới FX</center></h2>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name" class="col-sm-2 control-label">1.Name: </label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="tên Fx">
    </div>
  </div>
  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">2.Detail:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" placeholder="ghi chú ">
      
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
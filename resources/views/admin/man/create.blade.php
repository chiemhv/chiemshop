@extends('admin.admin')
@section('content_admin')
<form action="store" method="POST" accept-charset="utf-8" class="form-group">
  <h2><center>Thêm mới khách hàng</center></h2>
  <div class="form-group">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name" class="col-sm-2 control-label">1.Tên: </label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="đại ka chiêm">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">2.Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="chiem@gmail.com">
      
    </div>
  </div>
  <div class="form-group">
    <label for="role" class="col-sm-2 control-label">3.Role:</label>
    <div class="col-sm-10">
      <input type="text" name="role" class="form-control" id="role" placeholder="admin">
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">4.Phone:</label>
    <div class="col-sm-10">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="0989686392">
    </div>
  </div>
<br>
    <div class="form-group">
    <label for="password" class="col-sm-2 control-label">5.Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password">
    </div>
    </div>
    <div class="form-group">
    <label for="mobile" class="col-sm-2 control-label">6.Mobile:</label>
    <div class="col-sm-10">
      <input type="text" name="mobile" class="form-control" id="mobile" placeholder="0989686392">
    </div>
    </div>
    <div class="form-group">
    <label for="sex" class="col-sm-2 control-label">7.Sex:</label>
    <div class="col-sm-10">
      <select class="form-control" id="sex" name="sex">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
        <option value="KB">Không rõ</option>
      </select>
      <!--<input type="text" name="mobile" class="form-control" id="sex" placeholder="nam"> -->
    </div>
    </div>
    <div class="form-group">
    <label for="CMND" class="col-sm-2 control-label">8.CMND:</label>
    <div class="col-sm-10">
      <input type="text" name="CMND" class="form-control" id="CMND" placeholder="122009869">
    </div>
    </div>
    <div class="form-group">
    <label for="job" class="col-sm-2 control-label">9.Job:</label>
    <div class="col-sm-10">
      <input type="text" name="job" class="form-control" id="job" placeholder="Kỹ sư viễn thông/Kỹ sư lập trình">
    </div>
    </div>
    <br>
    <div class="form-group">
    <label for="office" class="col-sm-2 control-label">10.Office:</label>
    <div class="col-sm-10">
      <input type="text" name="office" class="form-control" id="office" placeholder="Học viện công nghệ bưu chính viễn thông">
    </div>
    </div>
    <div class="form-group">
    <label for="address" class="col-sm-2 control-label">11.Address:</label>
    <div class="col-sm-10">
       <input type="text" name="address" class="form-control" id="address" placeholder="Km10 đường giải phóng">
    </div>
    </div>
    <div class="form-group">
    <label for="point" class="col-sm-2 control-label">12.Point:</label>
    <div class="col-sm-10">
      <input type="number" name="point" class="form-control" id="point" placeholder="1000">
    </div>
    </div>
    <div class="form-group">
    <label for="money" class="col-sm-2 control-label">13.Money:</label>
    <div class="col-sm-10">
      <input type="text" name="money" class="form-control" id="money" placeholder="5000">
    </div>
    </div>
    <div class="form-group">
    <label for="buyMoney" class="col-sm-2 control-label">14.buyMoney:</label>
    <div class="col-sm-10">
      <input type="text" name="buyMoney" class="form-control" id="buyMoney" placeholder="2000">
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
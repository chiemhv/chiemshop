@extends('admin.admin')
@section('content_admin')
<span><h3><center>QUẢN LÝ KHÁCH HÀNG</center></h3></span>
<form method="POST" action="#" class="form-inline">
	   <div class="form-group">
	    <label for="Phone">Phone : </label>
	    <input type="text" class="form-control" id="phone" placeholder="0989686392" name="phone">
	  </div>
	  <div class="form-group">
	    <label for="mobile">Mobile : </label>
	    <input type="text" class="form-control" id="mobile" placeholder="0989686392" name="mobile">
	   </div>
	  <div class="form-group">
	    <label for="name">Name : </label>
	    <input type="text" class="form-control" id="name" placeholder="đại ka chiêm" name="name">
	   </div>
	  <button type="submit" class="btn btn-default">Tìm kiếm</button>
</form>
<table class="table table-striped">
  <tbody>
    <tr>
      <td><a href="{{URL::to('admin/man/create')}}" title=""><b>Tạo mới khách hàng </b></a></td>
    </tr>
  </tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
      	<th>Destroy</th>
      	<th>Edit</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Sex</th>
        <th>Job</th>
        <th>Office</th>
        <th>Address</th>
        <th>Point</th>
        <th>Money</th>
        <th>BuyMoney</th>
      </tr>
    </thead>
    <tbody>
   		@foreach($data as $row)
   		 <tr>
   		 <td><a href="man/destroy/{{$row->id}}">Destroy</a></td>
   		 <td><a href="man/edit/{{$row->id}}">Edit</a></td>
   		 <td>{{$row->name}}</td>
   		 <td>{{$row->email}}</td>
   		 <td>{{$row->role}}</td>
   		 <td>{{$row->phone}}</td>
   		 <td>{{$row->mobile}}</td>
   		 <td>{{$row->sex}}</td>
   		 <td>{{$row->job}}</td>
   		 <td>{{$row->office}}</td>
   		 <td>{{$row->address}}</td>
   		 <td>{{$row->point}}</td>
   		 <td>{{$row->money}}</td>
   		 <td>{{$row->buyMoney}}</td>
   		 </tr>
   		@endforeach
    </tbody>
  </table>
@stop
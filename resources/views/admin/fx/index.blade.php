@extends('admin.admin')
@section('content_admin')
<span><h3><center><b>QUẢN LÝ FX</b></center></h3></span>
<table class="table table-striped">
  <tbody>
    <tr>
      <td><a href="{{URL::to('admin/fx/create')}}" title=""><b>Tạo mới Fx</b></a></td>
    </tr>
  </tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Destroy</th>
        <th>Edit</th>
      	<th>idFx</th>
      	<th>Name</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
   		@foreach($data as $row)
   		 <tr>
   		 <td><a href="fx/destroy/{{$row->idFx}}">Destroy</a></td>
   		 <td><a href="fx/edit/{{$row->idFx}}">Edit</a></td>
   		 <td>{{$row->idFx}}</td>
   		 <td>{{$row->name}}</td>
   		 <td>{{$row->detail}}</td>
   		 </tr>
   		@endforeach
    </tbody>
  </table>
@stop
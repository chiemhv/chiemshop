@extends('admin.admin')
@section('content_admin')
<span><h3><center><b>QUẢN LÝ Catalog</b></center></h3></span>
<table class="table table-striped">
  <tbody>
    <tr>
      <td><a href="{{URL::to('admin/catalog/create')}}" title=""><b>Tạo mới Catalog</b></a></td>
    </tr>
  </tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Destroy</th>
        <th>Edit</th>
        <th>catalogs_id</th>
        <th>catalogs_name</th>
      	<th>catalogs_detail</th>
      	<th>fxes_name</th>
        <th>fxes_detail</th>
      </tr>
    </thead>
    <tbody>
   		@foreach($data as $row)
   		 <tr>
   		 <td><a href="catalog/destroy/{{$row->catalogs_id}}">Destroy</a></td>
   		 <td><a href="catalog/edit/{{$row->catalogs_id}}">Edit</a></td>
   		 <td>{{$row->catalogs_id}}</td>
   		 <td><b>{{$row->catalogs_name}}</b></td>
   		 <td>{{$row->catalogs_detail}}</td>
       <td><b>{{$row->fxes_name}}</b></td>
       <td>{{$row->fxes_detail}}</td>
   		 </tr>
   		@endforeach
    </tbody>
  </table>
@stop
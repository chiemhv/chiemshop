@extends('admin.admin')
@section('content_admin')
<span><h3><center><b>PRODUCER</b></center></h3></span>
<table class="table table-striped">
  <tbody>
    <tr>
      <td><a href="{{URL::to('admin/producer/create')}}" title=""><b>Tạo mới Producer</b></a></td>
    </tr>
  </tbody>
</table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Destroy</th>
        <th>Edit</th>
        <th>idProducer</th>
        <th>name</th>
        <th>man</th>
        <th>address</th>
        <th>detail</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $row)
       <tr>
       <td><a href="producer/destroy/{{$row->idProducer}}">Destroy</a></td>
       <td><a href="producer/edit/{{$row->idProducer}}">Edit</a></td>
       <td>{{$row->idProducer}}</td>
       <td>{{$row->name}}</td>
       <td>{{$row->man}}</td>
       <td>{{$row->phone}}</td>
       <td>{{$row->address}}</td>
       <td>{{$row->detail}}</td>
       </tr>
      @endforeach
    </tbody>
  </table>
@stop
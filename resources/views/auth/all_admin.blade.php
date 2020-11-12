@extends('layouts.admin')
@section('admin_content')
<div class="list-group">
	<?php
	$message = Session::get('message');
	if ($message){
	echo $message;
	Session::put('message',null);
	}
	?>
  <button type="button" class="list-group-item list-group-item-action active">
    Danh Sách Tài Khoản
  </button>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tên Tài Khoản</th>
      <th scope="col">Email</th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($all_admin as $key =>$admin)
    <tr>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>
      <td>{{$admin->phone}}</td>
      <td>{{$admin->diachi}}</td>
      <td>
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_admin/'.$admin->id)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $all_admin->links() }}
</div>
@endsection
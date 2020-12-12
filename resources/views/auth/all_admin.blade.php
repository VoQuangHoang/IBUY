@extends('layouts.admin')
@section('admin_content')
<div class="list-group">
<?php
	$message = Session::get('message');
	if ($message){
	echo "<div class='"."alert"." alert-success'".">" . $message . "</div>";
	Session::put('message',null);
	}
	?>
  <div class="list-group-item list-group-item-action active">
    Danh Sách Tài Khoản
  </div>
  <div class="table-responsive">
  <table class="table table-bordered">
  <thead style="text-align:center">
    <tr>
      <th scope="col">Tên Tài Khoản</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Email</th>
      <th scope="col">Giới Tính</th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Phân Quyền</th>
      <th scope="col">Sửa/Xóa</th>
    </tr>
  </thead>
  <tbody style="text-align:center">
  	@foreach($all_admin as $key =>$admin)
    <tr>
      <td style="text-align:left">{{$admin->name}}</td>
      <td style="vertical-align: middle;">
        <img src="public/uploads/user/{{$admin->image}}" style="max-width:50px;">
      </td>
      <td style="vertical-align: middle;text-align:left">{{$admin->email}}</td>
      <td style="vertical-align: middle;">{{$admin->gender}}</td>
      <td style="vertical-align: middle;">{{$admin->phone}}</td>
      <td style="vertical-align: middle;">{{$admin->address}}</td>
      <td class="text-center" style="vertical-align: middle;">@if ($admin->roles->name_roles == 'user')
      <h5><span class="badge badge-primary">{{$admin->roles->name_roles}}</span></h5>
      @else
      <h5><span class="badge badge-success">{{$admin->roles->name_roles}}</span></h5>
      @endif
      </td>
      <td>
        <a href="{{URL::to('/edit_admin/'.$admin->id)}}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i>
        </a>
        @if(Auth::user()->id == $admin->id)
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_admin/'.$admin->id)}}" class="btn btn-danger btn-xs disabled"><i class="far fa-trash-alt"></i>
        </a>
        @else
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_admin/'.$admin->id)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i>
        </a>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
{{ $all_admin->links() }}
</div>
@endsection
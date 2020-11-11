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
    Danh Sách Danh Mục
  </button>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tên Danh Mục</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Trạng Thái</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($all_category as $key =>$cate)
    <tr>
      <td>{{$cate->Name_category}}</td>
      <td>
      	<img src="public/uploads/category/{{$cate->Image_category}}" height="80" width="120">
      </td>
      <td>
        <a href="{{URL::to('/edit_category/'.$cate->id_category)}}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_category/'.$cate->id_category)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $all_category->links() }}
</div>
@endsection
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
  <thead style="text-align:center">
    <tr>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Mô Tả</th>
      <th scope="col">Số Lượng</th>
      <th scope="col" >Hình Ảnh</th>
      <th scope="col">Thương Hiệu</th>
      <th scope="col">Trạng Thái</th>
    </tr>
  </thead>
  <tbody style="text-align:center">
  	@foreach($all_product as $key =>$pro)
    <tr>
      <td>{{$pro->Name_product}}</td>
      <td>{{$pro->Price_product}}</td>
      <td>{{$pro->Description_product}}</td>
      <td>{{$pro->Quantity_product}}</td>
      <td>
      	<img src="public/uploads/product/{{$pro->Image_product}}" height="250" width="220">
      </td>
      <td>{{$pro->Name_category}}</td>
      <td>
        <a href="{{URL::to('/edit_product/'.$pro->id_product)}}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a><br>
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_product/'.$pro->id_product)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $all_product->links() }}
</div>
@endsection
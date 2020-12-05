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
  <div class="list-group-item list-group-item-action active">
    Danh Sách Danh Mục
  </div>
  <table class="table table-bordered">
  <thead style="text-align:center">
    <tr>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Giảm giá (theo %)</th>
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
      <td>{{$pro->name_product}}</td>
      <td>{{$pro->price_product}}</td>
      <td>{{$pro->promotion_price}}%</td>
      <td>{{ substr(strip_tags($pro->description_product), 0, 300) }}{{ strlen(strip_tags($pro->description_product)) > 300 ? '...' : '' }}</td>
      <td>{{$pro->quantity_product}}</td>
      <td>
        <img src="public/uploads/product/{{$pro->image_product}}" width="60px">
      </td>
      <td>{{$pro->name_category}}</td>
      <td>
        <a href="{{URL::to('/edit_product/'.$pro->id_product)}}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
        <a onclick="return confirm('Bạn thật sự muốn xóa')" href="{{URL::to('/delete_product/'.$pro->id_product)}}" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $all_product->links() }}
    </div>
</div>
@endsection
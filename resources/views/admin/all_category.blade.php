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
        Danh Sách Thương Hiệu
    </div>
    <table class="table table-bordered" style="background-color: white;">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên Thương Hiệu</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Chức Năng</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($all_category as $key =>$cate)
            <tr>
                <td style="vertical-align: middle;">{{$cate->name_category}}</td>
                <td class="d-flex justify-content-center">
                    <img src="public/uploads/category/{{$cate->image_category}}" width="">
                </td>
                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/edit_category/'.$cate->id_category)}}" class="btn btn-primary btn-xs"><i
                            class="far fa-edit"></i></a>
                    <a onclick="return confirm('Bạn thật sự muốn xóa')"
                        href="{{URL::to('/delete_category/'.$cate->id_category)}}" class="btn btn-danger btn-xs"><i
                            class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $all_category->links() }}
    </div>
@endsection

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
        Danh Sách Bình Luận
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Lượt bình luận</th>
                <th scope="col">Ngày bình luận gần nhất</th>
                <th scope="col">Ngày bình luận cũ nhất</th>
                <th scope="col">Xem bình luận</th>
                <!-- <th scope="col">Xóa đơn</th> -->
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($comment as $cmt)
            <tr>
                <td style="vertical-align: middle;">{{$cmt->name_product}}</td>
                <td style="vertical-align: middle;">{{$cmt->soluong}}</td>
                <td style="vertical-align: middle;">{{date_format(new DateTime($cmt->max), 'd-m-Y')}}</td>
                <td style="vertical-align: middle;">{{date_format(new DateTime($cmt->min), 'd-m-Y')}}</td>

                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/comment-by-product/'.$cmt->id_product)}}" class="btn btn-success btn-xs">
                    <i class="fas fa-eye"></i></i></a>
                </td>
                <!-- <td style="vertical-align: middle;">
                    <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')"
                        href="{{URL::to('/delete_order/')}}" class="btn btn-danger btn-xs">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $comment->links() }}
</div>
@endsection

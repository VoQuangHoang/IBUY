@extends('layouts.admin')
@section('admin_content')
<div class="list-group">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <?php
	$message = Session::get('message');
	if ($message){
	echo "<div class='"."alert"." alert-success'".">" . $message . "</div>";
	Session::put('message',null);
	}
	?>
    <div class="list-group-item list-group-item-action active">
        Chi Tiết Bình Luận
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Nội dung</th>
                <th scope="col">Người bình luận</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($comment_by_product as $cmt)
            <tr>
                <td style="vertical-align: middle;">{{$cmt->content}}</td>
                <td style="vertical-align: middle;">{{$cmt->name}}</td>
                <td style="vertical-align: middle;">{{date_format($cmt->created_at, 'd-m-Y H:i')}}</td>
                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/delete-comment/'.$cmt->id_comment)}}" class="btn btn-danger btn-xs">
                        <i class="far fa-trash-alt"></i></i></a>
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
<div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $comment_by_product->links() }}
</div>
@endsection

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
        Danh Sách Đơn Hàng
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên người đặt</th>
                <th scope="col">Tổng giá tiền</th>
                <th scope="col">Hình thức thanh toán</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Xem chi tiết</th>
                <!-- <th scope="col">Xóa đơn</th> -->
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($all_order as $order)
            <tr>
                <td style="vertical-align: middle;">{{$order->name}}</td>
                <td style="vertical-align: middle;">{{$order->order_total}}</td>
                <td style="vertical-align: middle;">{{$order->payment_menthod}}</td>
                <td style="vertical-align: middle;"><span class="badge badge-pill badge-warning">{{$order->order_status}}</span></td>
                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="btn btn-success btn-xs">
                    <i class="fas fa-eye"></i></i></a>
                </td>
                <!-- <td style="vertical-align: middle;">
                    <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')"
                        href="{{URL::to('/delete_order/'.$order->order_id)}}" class="btn btn-danger btn-xs">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection

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
    @if(session()->get('success'))
                                                <div class="alert alert-success">
                                                {{ session()->get('success') }}  
                                                </div>
                                            @endif
    <div class="list-group-item list-group-item-action active">
        Danh Sách Đơn Hàng
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Mã đơn</th>
                <th scope="col">Người đặt hàng</th>
                <th scope="col">Tổng giá tiền</th>
                <th scope="col">Hình thức thanh toán</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Cập nhật trạng thái</th>
                <th scope="col">Xem chi tiết</th>
                <!-- <th scope="col">Xóa đơn</th> -->
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <?php $countOrder =1;?>
            @foreach($all_order as $order)
            <tr>
                <td style="vertical-align: middle;">{{$order->order_id}}</td>
                <td style="vertical-align: middle;">{{$order->name}}</td>
                <td style="vertical-align: middle;">{{$order->order_total}}</td>
                <td style="vertical-align: middle;">{{$order->payment_method}}</td>
                <td style="vertical-align: middle;">{{date_format($order->created_at, 'd/m/Y')}}</td>
                <td style="vertical-align: middle; width: 190px">
                @if($order->order_status == 'Đang chờ xử lý')
                <h5><span class="badge badge-warning mb-2">{{$order->order_status}}</span></h5>
                    @elseif($order->order_status == 'Đã xác nhận')
                    <h5><span class="badge badge-primary mb-2">{{$order->order_status}}</span></h5>
                    @elseif($order->order_status == 'Đang giao hàng')
                    <h5><span class="badge badge-info mb-2">{{$order->order_status}}</span></h5>
                    @elseif($order->order_status == 'Đã hoàn thành')
                    <h5><span class="badge badge-success mb-2">{{$order->order_status}}</span></h5>
                    @endif
                </td>
                <td style="vertical-align: middle; width: 190px"> <form action="{{URL::to('/update_status/'.$order->order_id)}}" method="post">
                    {{ csrf_field() }}
                  <select class="form-control mb-2" name="order_status" id="order_status" style="width:180px">
                    <option value="{{$order->order_status}}">{{$order->order_status}}</option>
                    @if($order->order_status == 'Đang chờ xử lý')
                    <option value="Đã xác nhận">Đã xác nhận</option>
                    <option value="Đang giao hàng">Đang giao hàng</option>
                    <option value="Đã hoàn thành">Đã hoàn thành</option>
                    @elseif($order->order_status == 'Đã xác nhận')
                    <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                    <option value="Đang giao hàng">Đang giao hàng</option>
                    <option value="Đã hoàn thành">Đã hoàn thành</option>
                    @elseif($order->order_status == 'Đang giao hàng')
                    <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                    <option value="Đã xác nhận">Đã xác nhận</option>
                    <option value="Đã hoàn thành">Đã hoàn thành</option>
                    @elseif($order->order_status == 'Đã hoàn thành')
                    <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                    <option value="Đã xác nhận">Đã xác nhận</option>
                    <option value="Đang giao hàng">Đang giao hàng</option>
                    @endif
                  </select>
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form></td>
                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="btn btn-success btn-xs">
                    <i class="fas fa-eye"></i></a>
                </td>
                <!-- <td style="vertical-align: middle;">
                    <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')"
                        href="{{URL::to('/delete_order/'.$order->order_id)}}" class="btn btn-danger btn-xs">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td> -->
            </tr>
            <?php $countOrder++;?>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $all_order->links() }}
    </div>
</div>

@endsection

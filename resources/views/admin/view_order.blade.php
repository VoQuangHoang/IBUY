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
    <div class="list-group-item list-group-item-action active text-center">
        THÔNG TIN NGƯỜI MUA
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Ngày đặt hàng</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            
            <tr>
                <td style="vertical-align: middle;">{{$order_by_id->name}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->gender}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->email}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->phone}}</td>
                <td style="vertical-align: middle;">{{date_format($order_by_id->created_at, 'd-m-Y')}}</td>
            </tr>
            
        </tbody>
    </table>
    
</div>
<br>

<div class="list-group">
    <div class="list-group-item list-group-item-action active text-center">
        THÔNG TIN VẬN CHUYỂN
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên người nhận</th>
                <th scope="col">Địa chỉ nhận</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Ghi chú</th>
                
            </tr>
        </thead>
        <tbody style="text-align:center;">
            
            <tr>
                <td style="vertical-align: middle;">{{$order_by_id->shipping_name}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->shipping_address}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->shipping_phone}}</td>
                <td style="vertical-align: middle;">{{$order_by_id->shipping_note}}</td>
            </tr>
            
        </tbody>
    </table>
    
</div>
<br>

<div class="list-group">
    <div class="list-group-item list-group-item-action active text-center">
        LIỆT KÊ CHI TIẾT ĐƠN HÀNG
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá tiền</th>
                
                <th scope="col">Tổng</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($order_detail as $value)
            <tr>
                <td style="vertical-align: middle;">{{$value->product_name}}</td>
                <td style="vertical-align: middle;">{{$value->product_sales_quantity}}</td>
                <td style="vertical-align: middle;">{{number_format($value->product_price, 0, ',', '.')}}</td>
                <td style="vertical-align: middle;">{{number_format($value->product_price*$value->product_sales_quantity, 0, ',', '.')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection

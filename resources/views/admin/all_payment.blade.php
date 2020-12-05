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
        Danh Sách Hình Thức Thanh Toán
    </div>
    <table class="table table-bordered">
        <thead style="text-align:center;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên hình thức</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            @foreach($all_payment as $key =>$pay)
            <tr>
                <td style="vertical-align: middle;">{{$pay->payment_id}}</td>
                <td style="vertical-align: middle;">{{$pay->payment_menthod}}</td>
                <td style="vertical-align: middle;">{{$pay->payment_status}}</td>
                <td style="vertical-align: middle;">
                    <a href="{{URL::to('/edit_payment/'.$pay->payment_id)}}" class="btn btn-primary btn-xs"><i
                            class="far fa-edit"></i></a>
                    <a onclick="return confirm('Bạn thật sự muốn xóa')"
                        href="{{URL::to('/delete_payment/'.$pay->payment_id)}}" class="btn btn-danger btn-xs"><i
                            class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $all_payment->links() }}
    </div>
</div>
@endsection

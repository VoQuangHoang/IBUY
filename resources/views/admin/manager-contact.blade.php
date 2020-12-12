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
        Danh Sách Liên Hệ
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead style="text-align:center;">
                <tr>
                    <th scope="col">Tên liên hệ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Nội dung liên hệ</th>
                    <!-- <th scope="col">Xóa đơn</th> -->
                </tr>
            </thead>
            <tbody style="text-align:center;">
                @foreach($contact as $cmt)
                <tr>
                    <td style="vertical-align: middle;">{{$cmt->contact_name}}</td>
                    <td style="vertical-align: middle;">{{$cmt->contact_email}}</td>
                    <td style="vertical-align: middle;">{{$cmt->contact_phone}}</td>
                    <td style="vertical-align: middle;">{{$cmt->contact_tilte}}</td>
                    <td style="vertical-align: middle;">{{$cmt->contact_message}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row justify-content-center" style="width:100%;  margin:0">
    {{ $contact->links() }}
</div>
@endsection

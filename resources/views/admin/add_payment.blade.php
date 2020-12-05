@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Thêm phương thức thanh toán</li>
    <li class="list-group-item" aria-disabled="true">
        <form role="form" action="{{URL::to('/save_payment')}}" method="post" class="form-horizontal style-form"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Tên phương thức</label><br>
                <input type="text" name="payment_menthod" class="form-control" id="" placeholder="Tên phương thức"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Trạng thái</label><br>
                <input type="text" name="payment_status" class="form-control" id="" placeholder="" value="Đang chờ xử lý" required>
            </div>
            
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </li>
</ul>
@endsection

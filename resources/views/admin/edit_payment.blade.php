@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Sửa Hình Thức Thanh Toán</li>
    <li class="list-group-item" aria-disabled="true">
        <div class="form-group">

            @foreach($edit_payment as $pay)
            <form role="form" action="{{URL::to('/update_payment/'.$pay->payment_id)}}" method="post"
                class="form-horizontal style-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Tên Danh Mục</label><br>
                    <input type="text" name="payment_menthod" value="{{$pay->payment_menthod}}" class="form-control"
                        id="formGroupExampleInput" placeholder="" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Trạng thái</label><br>
                    <input type="text" name="payment_status" value="{{$pay->payment_status}}" class="form-control"
                        id="formGroupExampleInput" placeholder="" required>
                </div>
                <div class="form-group"></br>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
            </form>
            @endforeach
        </div>
    </li>
</ul>

@endsection
